<?php

require_once "./admin/config.php";

$result_content = $mysqli->query("SELECT * FROM pagina_sacramentos WHERE id = 1");
$content = $result_content->fetch_assoc();

$result_dates = $mysqli->query("SELECT * FROM datas_batismo ORDER BY ordem ASC, id ASC");
$dates = [];
while($row = $result_dates->fetch_assoc()){
    $dates[] = $row;
}

$mysqli->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paróquia Nossa Senhora de Fátima - Sacramentos</title>
    <link rel="stylesheet" href="./styles/sacramentos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('./imagens/FotoFundo3.png') !important">

<header class="site-header">
    <div class="header-content">
        <div class="logo-container">
            <img src="./imagens/logo.png" alt="Logo da Paróquia" class="logo" />
            <div class="parish-info">
                <p class="parish-name">Paróquia Nossa Senhora De Fátima</p>
                <p class="parish-address">RUA SALGADO FILHO, 3354 - CANCELLI</p>
            </div>
        </div>
        <div class="social-icons">
            <a href="https://www.instagram.com/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.youtube.com/" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</header>

<main class="main-content">

    <section class="content-section">
        <h2 class="section-title"><?php echo htmlspecialchars($content['titulo_catequese']); ?></h2>
        <div class="section-body-grid">
            <div class="main-column">
                <h3>Catequese Batismal</h3>
                <?php echo $content['info_catequese']; ?>
            </div>
            <aside class="side-column-box">
                <?php echo $content['aviso_catequese']; ?>
            </aside>
        </div>
    </section>

    <section class="content-section">
        <h2 class="section-title"><?php echo htmlspecialchars($content['titulo_documentacao']); ?></h2>
        <div class="section-body-grid documentation-section">
            <div class="main-column docs-grid">
                <div class="doc-column">
                    <?php echo $content['docs_pais_paroquianos']; ?>
                    <?php echo $content['docs_pais_outra_paroquia']; ?>
                </div>
                <div class="doc-column">
                    <?php echo $content['docs_padrinhos_paroquianos']; ?>
                    <?php echo $content['docs_padrinhos_outra_paroquia']; ?>
                    <?php echo $content['docs_padrinhos_consagracao']; ?>
                </div>
            </div>
            <aside class="dates-box">
                <h4 class="h4-wrap">Datas</h4>
                <ul>
                    <?php foreach ($dates as $date): ?>
                        <li>
                            <strong><?php echo htmlspecialchars(strtoupper($date['mes'])); ?></strong><br>
                            <?php echo htmlspecialchars($date['dias_horarios']); ?>
                        </li>
                    <?php endforeach; ?>
                    <?php if (empty($dates)): ?>
                        <li>Nenhuma data agendada no momento.</li>
                    <?php endif; ?>
                </ul>
            </aside>
        </div>
        <div class="tax-badge"><?php echo htmlspecialchars($content['info_taxa']); ?></div>
    </section>

    <section class="content-section">
        <h2 class="section-title"><?php echo htmlspecialchars($content['titulo_info_adicionais']); ?></h2>
        <div class="section-body-grid">
            <div class="main-column">
                <?php echo $content['info_adicionais']; ?>
            </div>
        </div>
    </section>

</main>

<a href="index.php" class="menu-button">MENU</a>

</body>
</html>
