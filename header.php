<header class="container-fluid">
        <section class="topo">
            <!-- logo1 MiniEmpório AnaLu -->
            <a href="index.php"><img src="./assets/imagens/logo.png" alt="logo mini empório AnaLu"></a>
            <!-- BARRA DE PESQUISA -->
            <form class="search-bar" action="resultado-busca.php" method="get" id="form_busca">
                <input type="text" placeholder="O que você procura?" name="produto" id="produto" required>
                <button type="submit" class="btn btn-default botao_lupa">
                    <img src="./assets/imagens/search.png" alt="imagem de lupe de pesquisa">
                </button>
            </form>
            <!-- Texto do Header -->
            <div class="header-text">
                <p>Horário de Atendimento</p>
                <p>10h às 18h</p>
            </div>
        </section>
        <!-- Barra de Navegação -->
        <nav class="d-flex">
            <li>
                <a href="queijos.php" class="texto-reset">
                    <p class="texto-reset">Queijos</p>
                    <img src="./assets/imagens/cheese.png" alt="ícone de queijo">
                </a>
            </li>
            <li>
                <a href="paes.php" class="texto-reset">
                    <p class="texto-reset">Pães de Queijo</p>
                    <img src="./assets/imagens/bread.png" alt="ícone de pão">
                </a>
            </li>
            <li>
                <a href="doces.php" class="texto-reset">
                    <p>Doces</p>
                    <img src="./assets/imagens/candy.png" alt="ícone de doce">
                </a>
            </li>
            <li>
                <a href="variedades.php" class="texto-reset">
                    <p>Variedades</p>
                    <img src="./assets/imagens/food.png" alt="ícone de variedades">
                </a>
            </li>
            <li>
                <a href="ofertas.php" class="texto-reset">
                    <p>Ofertas</p>
                    <img src="./assets/imagens/discount.png" alt="ícone de desconto">
                </a>
            </li>
        </nav>
    </header>