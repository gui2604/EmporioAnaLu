<header class="container-fluid" style="margin:0;padding:0;width:100%;">
    <section class="topo container-fluid" style="margin:0;">
        <!-- logo MiniEmpório AnaLu -->
        <a href="index.php" title="link do logo mini emporio AnaLu"><img src="./assets/imagens/logo.png" alt="logo mini emporio AnaLu" class="logo_responsivo" title="logo do mini emporio AnaLu"></a>
        <!-- BARRA DE PESQUISA -->
        <form class="search-bar" action="resultado-busca.php" method="get" id="form_busca">
            <input class="barra_input" type="text" placeholder="Buscar no site" name="produto" id="produto" required>
            <!-- botao pesquisar -->
            <button type="submit" class="btn btn-default botao_lupa" style="background-color:#261B14">
                <div>
                    Pesquisar
                </div>
            </button>
        </form>
        <!-- Texto do Header -->
        <div class="header-text">
            <p>Horário de atendimento online:</p>
            <p>Segunda a Sexta: 09h às 18h</p>
        </div>
    </section>
    <!-- Barra de Navegação -->
    <nav class="d-flex">
            <li>
                <a href="queijos.php" class="texto-reset" title="link para pagina de queijos">
                    <p class="texto-reset-titulo">Queijos</p>
                    <img class="texto-reset-imagem" src="./assets/imagens/cheese.png" alt="ícone de queijo" title="ícone de queijo">
                </a>
            </li>
            <li>
                <a href="paes.php" class="texto-reset" title="link para pagina de paes">
                    <p class="texto-reset-titulo">Pães de Queijo</p>
                    <img class="texto-reset-imagem" src="./assets/imagens/bread.png" alt="ícone de pão" title="ícone de pão">
                </a>
            </li>
            <li>
                <a href="doces.php" class="texto-reset" title="link para pagina de doces">
                    <p class="texto-reset-titulo">Doces</p>
                    <img class="texto-reset-imagem" src="./assets/imagens/candy.png" alt="ícone de doce" title="ícone de doce">
                </a>
            </li>
            <li>
                <a href="variedades.php" class="texto-reset" title="link para pagina de variedades">
                    <p class="texto-reset-titulo">Variedades</p>
                    <img class="texto-reset-imagem" src="./assets/imagens/food.png" alt="ícone de variedades" title="ícone de variedades">
                </a>
            </li>
        
    </nav>
</header>