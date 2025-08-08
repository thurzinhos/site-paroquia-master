<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paróquia Nossa Senhora de Fátima - A Paróquia</title>
    <link rel="stylesheet" href="./styles/paroquia.css" />
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
    <h1 class="page-title">Sobre a Paróquia</h1>

    <div class="parish-content">
        <section class="parish-section">
            <div class="section-image">
                <img src="https://placehold.co/600x400/a28a77/ffffff?text=História" alt="Imagem representando a história da paróquia">
            </div>
            <div class="section-text">
                <h2>Nossa História</h2>
                <p>Aqui você pode inserir um texto detalhado sobre a fundação e a trajetória da Paróquia Nossa Senhora de Fátima. Fale sobre os momentos marcantes, as pessoas importantes e o desenvolvimento da comunidade ao longo dos anos.</p>
                <p>Descreva os desafios enfrentados e as conquistas celebradas, construindo uma narrativa que conecte os fiéis com as raízes da sua fé local.</p>
            </div>
        </section>

        <section class="parish-section reverse">
            <div class="section-image">
                <img src="https://placehold.co/600x400/8c9ea3/ffffff?text=Padroeira" alt="Imagem de Nossa Senhora de Fátima">
            </div>
            <div class="section-text">
                <h2>Nossa Padroeira</h2>
                <p>Nossa Senhora de Fátima, a quem nossa paróquia é dedicada, é um farol de esperança e fé. Aqui, você pode contar a história das aparições em Fátima, Portugal, e o significado da sua mensagem de oração, penitência e conversão para o mundo.</p>
                <p>Explique a importância dela como intercessora e modelo de vida cristã para toda a nossa comunidade paroquial.</p>
            </div>
        </section>

        <section class="priests-section">
            <h2>Nossos Sacerdotes</h2>
            <div class="priests-container">
                <div class="priest-card">
                    <img src="https://placehold.co/300x300/bfa995/ffffff?text=Pároco" alt="Foto do Pároco">
                    <h3>Padre [Nome do Pároco]</h3>
                    <p>Pároco</p>
                </div>
                <div class="priest-card">
                    <img src="https://placehold.co/300x300/a28a77/ffffff?text=Vigário" alt="Foto do Vigário">
                    <h3>Padre [Nome do Vigário]</h3>
                    <p>Vigário Paroquial</p>
                </div>
            </div>
        </section>
    </div>
</main>

<a href="index.php" class="menu-button">MENU</a>

</body>
</html>
