<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paróquia Nossa Senhora de Fátima - Cancelli</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
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
<div class="fundo-fixo"></div>
<div class="background-wrapper">
    <section class="navigation-section">
        <div class="nav-buttons">
            <a href="paroquia.php" class="nav-button">A PARÓQUIA</a>
            <a href="capelas.php" class="nav-button">CAPELAS</a>
            <a href="sacramentos.php" class="nav-button">SACRAMENTOS</a>
            <a href="contatos.php" class="nav-button">CONTATOS</a>
            <a href="dizimo.php" class="nav-button">DÍZIMO</a>
            <a href="cadastro.php" class="nav-button">CADASTRO</a>
        </div>
    </section>
    <section class="events-section">
        <div class="events-container">
            <div class="events-header">
                <h2>EVENTOS DA <br><span class="fino">Paróquia</span></h2>
            </div>
            <div class="risco-vertical"></div>
            <div class="event-highlight">
                <div class="highlight-data">
                    <h3><strong id="mainEventDate">13 de Maio</strong></h3>
                </div>
                <div class="highlight-details">
                    <h4 id="mainEventTitle">Festa de Fátima</h4>
                    <ul id="mainEventItems">
                        <li>• Kit costela</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="slider-container" id="slider-container">
        <div class="slider" id="slider">
            <div class="slide" style="background-image: url('imagens/FotoFundo.png');"></div>
            <div class="slide" style="background-image: url('imagens/FotoFundo2.png');"></div>
        </div>
        <button class="arrow prev" onclick="prevSlide()">❮</button>
        <button class="arrow next" onclick="nextSlide()">❯</button>
        <div class="dots" id="dots"></div>
    </div>
    <section class="location-section">
        <div class="location-container">
            <div class="address">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h3>R. Salgado Filho, 3354 - Cancelli,</h3>
                    <p>Cascavel - PR, 85813-740</p>
                </div>
            </div>
            <div class="risco-vertical2"></div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.529806456094!2d-53.46820088924637!3d-24.939223777855013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f3d474e2d4d3d1%3A0x6e7b1a0e7f7b1a0e!2sPar%C3%B3quia%20Nossa%20Senhora%20de%20F%C3%A1tima%20-%20Cancelli!5e0!3m2!1spt-BR!2sbr!4v1717349911999!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</div>
<script src="/js/script.js"></script>
</body>
</html>