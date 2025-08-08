<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paróquia Nossa Senhora de Fátima - Capelas</title>
    <link rel="stylesheet" href="./styles/capelas.css" />
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
    <h1 class="page-title">Nossas Capelas</h1>
    <div class="chapels-grid">
        
        <div class="chapel-card">
            <img src="https://placehold.co/600x400/a28a77/ffffff?text=Capela+1" alt="Foto da Capela São João Batista" class="chapel-image">
            <div class="chapel-info">
                <h3 class="chapel-name">Capela São João Batista</h3>
                <p class="chapel-address">
                    <i class="fas fa-map-marker-alt"></i>
                    Rua das Flores, 123 - Bairro vizinho
                </p>
                <p class="chapel-mass-times">
                    <i class="fas fa-clock"></i>
                    Missas: Sábados, às 19h30
                </p>
            </div>
        </div>

        <div class="chapel-card">
            <img src="https://placehold.co/600x400/8c9ea3/ffffff?text=Capela+2" alt="Foto da Capela Santa Luzia" class="chapel-image">
            <div class="chapel-info">
                <h3 class="chapel-name">Capela Santa Luzia</h3>
                <p class="chapel-address">
                    <i class="fas fa-map-marker-alt"></i>
                    Avenida da Paz, 456 - Centro
                </p>
                <p class="chapel-mass-times">
                    <i class="fas fa-clock"></i>
                    Missas: Domingos, às 08h00
                </p>
            </div>
        </div>

        <div class="chapel-card">
            <img src="https://placehold.co/600x400/bfa995/ffffff?text=Capela+3" alt="Foto da Capela Nossa Senhora Aparecida" class="chapel-image">
            <div class="chapel-info">
                <h3 class="chapel-name">Capela Nossa Senhora Aparecida</h3>
                <p class="chapel-address">
                    <i class="fas fa-map-marker-alt"></i>
                    Estrada Principal, 789 - Zona Rural
                </p>
                <p class="chapel-mass-times">
                    <i class="fas fa-clock"></i>
                    Missas: 1º e 3º Domingo do mês, às 10h00
                </p>
            </div>
        </div>


    </div>
</main>

<a href="index.php" class="menu-button">MENU</a>

</body>
</html>
