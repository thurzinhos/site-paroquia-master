<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');    // seu usuário do banco de dados
define('DB_PASSWORD', 'root');        // sua senha do banco de dados
define('DB_NAME', 'paroquia_nsf'); // o nome do banco de dados que você criou

$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($mysqli === false){
    die("ERRO: Não foi possível conectar ao banco de dados. " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8mb4");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
