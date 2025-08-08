<?php
require_once "./admin/config.php";

if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("location: login.php");
    exit;
}

$update_success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['salvar_conteudo'])) {
        $sql_update_content = "UPDATE pagina_sacramentos SET 
            titulo_catequese = ?, info_catequese = ?, aviso_catequese = ?, 
            titulo_documentacao = ?, docs_pais_paroquianos = ?, docs_pais_outra_paroquia = ?, 
            docs_padrinhos_paroquianos = ?, docs_padrinhos_outra_paroquia = ?, docs_padrinhos_consagracao = ?, 
            info_taxa = ?, titulo_info_adicionais = ?, info_adicionais = ?
            WHERE id = 1";

        if ($stmt = $mysqli->prepare($sql_update_content)) {
            $stmt->bind_param("ssssssssssss",
                    $_POST['titulo_catequese'], $_POST['info_catequese'], $_POST['aviso_catequese'],
                    $_POST['titulo_documentacao'], $_POST['docs_pais_paroquianos'], $_POST['docs_pais_outra_paroquia'],
                    $_POST['docs_padrinhos_paroquianos'], $_POST['docs_padrinhos_outra_paroquia'], $_POST['docs_padrinhos_consagracao'],
                    $_POST['info_taxa'], $_POST['titulo_info_adicionais'], $_POST['info_adicionais']
            );
            $stmt->execute();
            $stmt->close();
            $update_success = "Conteúdo principal atualizado com sucesso!";
        }
    }

    if (isset($_POST['salvar_datas'])) {
        if (isset($_POST['datas'])) {
            $sql_update_date = "UPDATE datas_batismo SET mes = ?, dias_horarios = ?, ordem = ? WHERE id = ?";
            $stmt_update = $mysqli->prepare($sql_update_date);
            foreach ($_POST['datas'] as $id => $data) {
                $stmt_update->bind_param("ssii", $data['mes'], $data['dias_horarios'], $data['ordem'], $id);
                $stmt_update->execute();
            }
            $stmt_update->close();
        }

        if (!empty($_POST['nova_data']['mes']) && !empty($_POST['nova_data']['dias_horarios'])) {
            $sql_insert_date = "INSERT INTO datas_batismo (mes, dias_horarios, ordem) VALUES (?, ?, ?)";
            $stmt_insert = $mysqli->prepare($sql_insert_date);
            $stmt_insert->bind_param("ssi", $_POST['nova_data']['mes'], $_POST['nova_data']['dias_horarios'], $_POST['nova_data']['ordem']);
            $stmt_insert->execute();
            $stmt_insert->close();
        }

        if (isset($_POST['remover_data'])) {
            $sql_delete_date = "DELETE FROM datas_batismo WHERE id = ?";
            $stmt_delete = $mysqli->prepare($sql_delete_date);
            foreach ($_POST['remover_data'] as $id_para_remover) {
                $stmt_delete->bind_param("i", $id_para_remover);
                $stmt_delete->execute();
            }
            $stmt_delete->close();
        }
        $update_success = "Datas atualizadas com sucesso!";
    }
}


$result_content = $mysqli->query("SELECT * FROM pagina_sacramentos WHERE id = 1");
$content = $result_content->fetch_assoc();
$result_dates = $mysqli->query("SELECT * FROM datas_batismo ORDER BY ordem ASC, id ASC");
$dates = [];
while($row = $result_dates->fetch_assoc()){
    $dates[] = $row;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel de Edição - Sacramentos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/theme/neo.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.15/mode/htmlmixed/htmlmixed.min.js"></script>

</head>
<body>

<header class="admin-header">
    <nav class="header-nav">
        <h1>Painel Administrativo</h1>
        <div>
            <a href="/sacramentos.php" target="_blank" class="link-view">Ver Página Pública</a>
            <a href="./admin/logout.php" class="link-logout">Sair</a>
        </div>
    </nav>
</header>

<main class="admin-main">

    <?php if(!empty($update_success)): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($update_success); ?></div>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-card">
        <h2 class="form-card-header">Editar Datas do Batismo</h2>

        <div class="dates-list">
            <?php foreach($dates as $date): ?>
                <div class="date-item">
                    <div class="form-group">
                        <label>Mês</label>
                        <input type="text" name="datas[<?php echo $date['id']; ?>][mes]" value="<?php echo htmlspecialchars($date['mes']); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Dias e Horários</label>
                        <input type="text" name="datas[<?php echo $date['id']; ?>][dias_horarios]" value="<?php echo htmlspecialchars($date['dias_horarios']); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Ordem</label>
                        <input type="number" name="datas[<?php echo $date['id']; ?>][ordem]" value="<?php echo htmlspecialchars($date['ordem']); ?>" class="form-control">
                    </div>
                    <label class="remove-date-label">
                        <input type="checkbox" name="remover_data[]" value="<?php echo $date['id']; ?>"> Remover
                    </label>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="add-date-section">
            <h3>Adicionar Nova Data</h3>
            <div class="add-date-grid">
                <div class="form-group">
                    <label>Mês</label>
                    <input type="text" name="nova_data[mes]" placeholder="Ex: JANEIRO" class="form-control">
                </div>
                <div class="form-group">
                    <label>Dias e Horários</label>
                    <input type="text" name="nova_data[dias_horarios]" placeholder="Ex: 10 - 16HRS e 25 - 11HRS" class="form-control">
                </div>
                <div class="form-group">
                    <label>Ordem</label>
                    <input type="number" name="nova_data[ordem]" value="99" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" name="salvar_datas" class="btn btn-secondary">Salvar Datas</button>
        </div>
    </form>

    <!-- Formulário para Conteúdo Principal -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-card">
        <h2 class="form-card-header">Editar Conteúdo da Página</h2>

        <div class="content-grid">
            <!-- Seção Catequese -->
            <div class="form-section">
                <h3>Seção Catequese</h3>
                <div class="form-group">
                    <label>Título da Seção</label>
                    <input type="text" name="titulo_catequese" value="<?php echo htmlspecialchars($content['titulo_catequese']); ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Informações (Editor de HTML)</label>
                    <textarea name="info_catequese" class="html-editor"><?php echo htmlspecialchars($content['info_catequese']); ?></textarea>
                </div>
                <div class="form-group">
                    <label>Caixa de Aviso (Editor de HTML)</label>
                    <textarea name="aviso_catequese" class="html-editor"><?php echo htmlspecialchars($content['aviso_catequese']); ?></textarea>
                </div>
            </div>

            <!-- Seção Documentação -->
            <div class="form-section">
                <h3>Seção Documentação</h3>
                <div class="form-group">
                    <label>Título da Seção</label>
                    <input type="text" name="titulo_documentacao" value="<?php echo htmlspecialchars($content['titulo_documentacao']); ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Docs. Pais Paroquianos (Editor de HTML)</label>
                    <textarea name="docs_pais_paroquianos" class="html-editor"><?php echo htmlspecialchars($content['docs_pais_paroquianos']); ?></textarea>
                </div>
                <div class="form-group">
                    <label>Docs. Pais Outra Paróquia (Editor de HTML)</label>
                    <textarea name="docs_pais_outra_paroquia" class="html-editor"><?php echo htmlspecialchars($content['docs_pais_outra_paroquia']); ?></textarea>
                </div>
                <div class="form-group">
                    <label>Docs. Padrinhos Paroquianos (Editor de HTML)</label>
                    <textarea name="docs_padrinhos_paroquianos" class="html-editor"><?php echo htmlspecialchars($content['docs_padrinhos_paroquianos']); ?></textarea>
                </div>
                <div class="form-group">
                    <label>Docs. Padrinhos Outra Paróquia (Editor de HTML)</label>
                    <textarea name="docs_padrinhos_outra_paroquia" class="html-editor"><?php echo htmlspecialchars($content['docs_padrinhos_outra_paroquia']); ?></textarea>
                </div>
                <div class="form-group">
                    <label>Docs. Padrinhos Consagração (Editor de HTML)</label>
                    <textarea name="docs_padrinhos_consagracao" class="html-editor"><?php echo htmlspecialchars($content['docs_padrinhos_consagracao']); ?></textarea>
                </div>
            </div>

            <!-- Seção Taxa e Infos Adicionais -->
            <div class="form-section full-width">
                <h3>Seção Final</h3>
                <div class="form-group">
                    <label>Informação da Taxa</label>
                    <input type="text" name="info_taxa" value="<?php echo htmlspecialchars($content['info_taxa']); ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Título Informações Adicionais</label>
                    <input type="text" name="titulo_info_adicionais" value="<?php echo htmlspecialchars($content['titulo_info_adicionais']); ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Informações Adicionais (Editor de HTML)</label>
                    <textarea name="info_adicionais" class="html-editor"><?php echo htmlspecialchars($content['info_adicionais']); ?></textarea>
                </div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" name="salvar_conteudo" class="btn btn-primary">Salvar Conteúdo</button>
        </div>
    </form>
</main>

<script>
    // Inicializa o CodeMirror em todas as textareas com a classe 'html-editor'
    document.addEventListener('DOMContentLoaded', function () {
        const editors = document.querySelectorAll('.html-editor');
        editors.forEach(editor => {
            const codeMirrorInstance = CodeMirror.fromTextArea(editor, {
                lineNumbers: true, // Mostra números de linha
                mode: 'htmlmixed', // Define o modo para HTML
                theme: 'neo',      // Tema de cores claro e limpo
                lineWrapping: true // Quebra de linha automática
            });
            codeMirrorInstance.on('change', () => {
                codeMirrorInstance.save();
            });
        });
    });
</script>
</body>
</html>
