<?php
require_once "./admin/config.php";

if (isset($_SESSION["admin_logged_in"]) && $_SESSION["admin_logged_in"] === true) {
    header("location: admin.php");
    exit;
}

$username = $password = "";
$login_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["username"]))) {
        $login_err = "Por favor, insira o nome de usuário.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $login_err = "Por favor, insira a senha.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($login_err)) {
        $sql = "SELECT id, username, password_hash FROM admins WHERE username = ?";
        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("s", $param_username);
            $param_username = $username;
            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $stmt->bind_result($id, $username, $hashed_password);
                    if ($stmt->fetch()) {
                        if (password_verify($password, $hashed_password)) {
                            $_SESSION["admin_logged_in"] = true;
                            $_SESSION["admin_id"] = $id;
                            $_SESSION["admin_username"] = $username;
                            header("location: admin.php");
                        } else {
                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else {
                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else {
                echo "Ops! Algo deu errado. Tente novamente.";
            }
            $stmt->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Painel Administrativo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="login-body">
<div class="login-container">
    <h2>Login do Administrador</h2>

    <?php
    if(!empty($login_err)){
        echo '<div class="alert alert-danger">' . htmlspecialchars($login_err) . '</div>';
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo htmlspecialchars($username); ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
    </form>
</div>
</body>
</html>
