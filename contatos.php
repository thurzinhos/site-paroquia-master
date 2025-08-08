<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paróquia Nossa Senhora de Fátima - Contatos</title>
    <link rel="stylesheet" href="./styles/contatos.css" />
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
    <h1 class="page-title">Entre em Contato</h1>
    <div class="contact-container">
        <div class="contact-info">
            <h2>Secretaria Paroquial</h2>
            <p>
                <i class="fas fa-map-marker-alt"></i>
                Rua Salgado Filho, 3354 - Cancelli, Cascavel - PR
            </p>
            <p>
                <i class="fas fa-phone"></i>
                (45) 3226-4903
            </p>
            <p>
                <i class="fas fa-envelope"></i>
                secretaria@paroquiadefatima.com.br
            </p>
            <p>
                <i class="fas fa-clock"></i>
                <strong>Segunda a Sexta:</strong> 08h às 12h e 13h30 às 18h
            </p>
            <p>
                <i class="fas fa-clock"></i>
                <strong>Sábado:</strong> 08h às 12h
            </p>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.529806456094!2d-53.46820088924637!3d-24.939223777855013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f3d474e2d4d3d1%3A0x6e7b1a0e7f7b1a0e!2sPar%C3%B3quia%20Nossa%20Senhora%20de%20F%C3%A1tima%20-%20Cancelli!5e0!3m2!1spt-BR!2sbr!4v1717349911999!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contact-form">
            <h2>Mande uma Mensagem</h2>
            <form action="#" method="POST">
                <div class="input-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="subject">Assunto</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                <div class="input-group">
                    <label for="message">Mensagem</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</main>

<a href="index.php" class="menu-button">MENU</a>

</body>
</html>
