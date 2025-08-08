<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paróquia Nossa Senhora de Fátima - Cadastro</title>
    <!-- Ícones e fontes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        /* CSS Integrado e Reestruturado para a Página de Cadastro */

        /* Variáveis de Cor baseadas na página Sacramentos */
        :root {
            --primary-orange: #d89e2c;
            --dark-text: #3d3d3d;
            --light-text: #ffffff;
            --background-overlay: rgba(212, 158, 23, 0.31);
            --border-light: #e0e0e0;
            --background-light: #fdfdfd;
        }

        /* Estilos Gerais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--dark-text);
            background-image: url('./imagens/FotoFundo3.png'); /* Certifique-se que o caminho está correto */
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            line-height: 1.6;
        }

        /* Cabeçalho Padrão */
        .site-header {
            background-color: var(--background-overlay);
            padding: 15px 5%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo-container { display: flex; align-items: center; gap: 20px; }
        .logo { height: 80px; width: 80px; }
        .parish-name { font-size: 1.5rem; font-weight: 600; }
        .parish-address { font-size: 0.9rem; font-weight: 300; }

        .social-icons { display: flex; gap: 15px; }
        .social-icons a {
            background-color: var(--primary-orange);
            color: var(--light-text);
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            text-decoration: none;
            font-size: 1.2rem;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .social-icons a:hover {
            transform: scale(1.1);
            background-color: #c28b22;
        }

        /* Botão de Menu Fixo */
        .menu-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: var(--primary-orange);
            color: var(--dark-text);
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 700;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
            z-index: 999;
        }
        .menu-button:hover { transform: scale(1.05); }

        /* Estrutura de Conteúdo Principal (similar a sacramentos.php) */
        .main-content {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Título Laranja (padrão do site) */
        .section-title {
            background-color: var(--primary-orange);
            color: var(--dark-text);
            font-size: 1.2rem;
            font-weight: 700;
            padding: 12px 25px;
            border-radius: 25px;
            text-align: center;
            margin-bottom: 25px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Card do formulário */
        .form-card {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .form-card p {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 40px;
            text-align: center;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px 30px;
        }

        .form-group { display: flex; flex-direction: column; }
        .full-width { grid-column: 1 / -1; }

        .form-group label {
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-light);
            border-radius: 5px;
            font-size: 1rem;
            background-color: var(--background-light);
            transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-control:focus {
            outline: none;
            border-color: var(--primary-orange);
            box-shadow: 0 0 0 3px rgba(216, 158, 44, 0.25);
        }

        /* Estilos para Radio e Checkbox */
        .radio-group, .checkbox-group {
            display: flex;
            gap: 25px;
            align-items: center;
            padding-top: 5px;
        }
        .radio-group label, .checkbox-group label {
            font-weight: normal;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 1rem;
        }

        /* Customização dos inputs para usarem a cor do tema */
        input[type="radio"], input[type="checkbox"] {
            -webkit-appearance: none; appearance: none;
            background-color: #fff; margin: 0; color: currentColor;
            width: 1.15em; height: 1.15em;
            border: 0.15em solid var(--border-light);
            border-radius: 0.2em;
            transform: translateY(-0.075em);
            display: grid; place-content: center;
        }
        input[type="radio"] { border-radius: 50%; }
        input[type="radio"]::before,
        input[type="checkbox"]::before {
            content: ""; width: 0.65em; height: 0.65em;
            transform: scale(0);
            transition: 120ms transform ease-in-out;
            box-shadow: inset 1em 1em var(--primary-orange);
        }
        input[type="radio"]::before { border-radius: 50%; background-color: var(--primary-orange); }
        input[type="checkbox"]::before {
            background-color: var(--primary-orange);
            transform-origin: bottom left;
            clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%);
        }
        input[type="radio"]:checked::before,
        input[type="checkbox"]:checked::before {
            transform: scale(1);
        }

        /* Grid para as pastorais */
        .pastorais-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 15px;
            margin-top: 10px;
        }

        .form-actions {
            grid-column: 1 / -1;
            text-align: center;
            margin-top: 40px;
        }

        .btn-submit {
            background-color: var(--primary-orange);
            color: var(--dark-text);
            padding: 15px 50px;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .btn-submit:hover {
            background-color: #c28b22;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        .site-footer {
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #fff;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .form-grid { grid-template-columns: 1fr; }
            .main-content { margin: 20px auto; padding: 0 15px; }
            .form-card { padding: 25px; }
            .header-content { flex-direction: column; gap: 15px; }
        }

    </style>
</head>
<body>

<!-- Cabeçalho Padrão do Site -->
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

<!-- Conteúdo Principal -->
<main class="main-content">

    <h2 class="section-title">Meu Cadastro</h2>

    <div class="form-card">
        <p>Preencha seu cadastro o mais completo possível, para melhor nos comunicarmos. Mantenha sempre atualizado os seus dados.</p>

        <form action="#" method="post">
            <div class="form-grid">
                <!-- Campos de Dados Pessoais -->
                <div class="form-group full-width">
                    <label for="nome">Nome completo *</label>
                    <input type="text" id="nome" name="nome" class="form-control" required>
                </div>

                <div class="form-group full-width">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="senha">Senha *</label>
                    <input type="password" id="senha" name="senha" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="confirmar_senha">Confirmar Senha *</label>
                    <input type="password" id="confirmar_senha" name="confirmar_senha" class="form-control" required>
                </div>

                <div class="form-group full-width">
                    <label for="endereco">Endereço *</label>
                    <input type="text" id="endereco" name="endereco" class="form-control" required>
                </div>

                <div class="form-group full-width">
                    <label for="bairro">Bairro *</label>
                    <input type="text" id="bairro" name="bairro" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="tel" id="celular" name="celular" class="form-control">
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone" class="form-control">
                </div>

                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" class="form-control">
                </div>

                <div class="form-group">
                    <label for="cep">CEP *</label>
                    <input type="text" id="cep" name="cep" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Casado</label>
                    <div class="radio-group">
                        <label><input type="radio" name="casado" value="sim"> SIM</label>
                        <label><input type="radio" name="casado" value="nao"> NÃO</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="data_casamento">Data do Casamento</label>
                    <input type="date" id="data_casamento" name="data_casamento" class="form-control">
                </div>

                <div class="form-group">
                    <label>Filhos</label>
                    <div class="radio-group">
                        <label><input type="radio" name="filhos" value="sim"> SIM</label>
                        <label><input type="radio" name="filhos" value="nao"> NÃO</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="qtd_filhos">Quantidade de filhos *</label>
                    <input type="number" id="qtd_filhos" name="qtd_filhos" class="form-control" value="0" required>
                </div>

                <!-- Seção de Pastorais e Movimentos -->
                <div class="form-group full-width">
                    <label>Escolha as pastorais e movimentos que gostaria de acompanhar:</label>
                    <div class="pastorais-grid">
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="apostolado_oracao"> Apostolado da Oração</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="capela_ns_guadalupe"> Capela Nossa Senhora de Guadalupe</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="capela_sagrada_familia"> Capela Sagrada Família</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="capela_sao_jose"> Capela São José</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="catequese"> Catequese</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="cia_clara_ricci"> Cia Clara Ricci</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="conselho_economico"> Conselho Econômico Paroquial (CEP)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="conselho_pastoral"> Conselho Pastoral Paroquial (CPP)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="convivio_damasco"> Convívio Damasco</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="coral_anjos_fatima"> Coral Anjos de Fátima</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="coroinhas"> Coroinhas</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="dizimo_prestacao_contas"> Dízimo e Prestação de Contas</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="escolinha_dominical"> Escolinha dominical</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="homens_adoradores"> Homens Adoradores</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="infancia_adolescencia_missionaria"> Infância e Adolescência Missionária (IAM)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="instituto_franciscano"> Instituto Franciscano Secular Seara</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="irmas_franciscanas"> Irmãs Franciscanas Angelinas</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="jovens_rcc"> Jovens RCC</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="legiao_maria_chama"> Legião de Maria (Chama de Amor)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="legiao_maria_ns_fatima"> Legião de Maria (N. Sra. de Fátima)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="mensageiros_capelinhas"> Mensageiros das Capelinhas</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="ministerio_canto"> Ministério de Canto</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="ministros_eucaristia"> Ministros Extraordinários da Sagrada Comunhão Eucarística (MESCE)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="movimento_cursilho"> Movimento Cursilho Cristandade (MCC)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="movimento_renovacao_carismatica"> Movimento Renovação Carismática Católica (RCC)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="mulheres_adoradoras"> Mulheres Adoradoras</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="obra_divina_misericordia"> Obra da Divina Misericórdia</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="oficina_oracao_vida"> Oficina Oração e Vida</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_comunicacao"> Pastoral da Comunicação (PASCOM)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_crianca"> Pastoral da Criança</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_esperanca"> Pastoral da Esperança</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_batismo"> Pastoral do Batismo</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_menor"> Pastoral do Menor</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_acolitos"> Pastoral dos acólitos</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_familiar"> Pastoral Familiar</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_liturgica"> Pastoral Litúrgica</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_social"> Pastoral Social</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="pastoral_vocacional"> Pastoral Vocacional (SAV)</label></div>
                        <div class="checkbox-group"><label><input type="checkbox" name="pastorais[]" value="terco_homens"> Terço dos Homens</label></div>
                    </div>
                </div>

                <!-- Botão de Envio -->
                <div class="form-actions">
                    <button type="submit" class="btn-submit">Salvar</button>
                </div>
            </div>
        </form>
    </div>
</main>

<!-- Botão de Menu Fixo -->
<a href="index.php" class="menu-button">MENU</a>

</body>
</html>
