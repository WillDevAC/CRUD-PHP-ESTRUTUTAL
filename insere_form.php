<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Sistema Gaio | Cadastro</title>
    <!-- Fontes do projeto -->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet"> <!-- Css Estilização-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet"> <!-- Transição CSS-->
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all"> <!-- Animações do projeto -->
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet"> <!-- Menu Hamburguer -->
    <link href="css/index.css" rel="stylesheet" media="all"> <!-- Css Principal-->

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- CABECALHO MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="IFAC" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            </ul>
                </div>
            </nav>
        </header>
        <!-- MENU LATERAL-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="IFAC" height="80px" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <img src="images/produto.svg" alt="Icone">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-database"></i>Lista de produtos</a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-plus"></i>Novo produto</a>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="esquema.php">
                                <i class="fas fa-check-square"></i>Esquema</a>
                        </li>
                </nav>
            </div>
        </aside>
        <div class="page-container">
            <!-- CABECALHO NORMAL -->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                        <form class="form-header" action="adicionais/search.php" method="POST">
                                <input class="au-input au-input--xl" type="text" name="pesquisa"
                                    placeholder="O que você deseja?" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                        <img src="https://img.icons8.com/color/48/000000/checked-user-male-skin-type-7.png"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- TEXTO MAIN - CADASTRO PRODUTO -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <p>Cadastro de produto</p>
                                    </div>
                                    <div class="container">
                                    <div class="row">
                                        <div class="col"><br>
                                        <center>
                                        <img src="https://img.icons8.com/fluent/48/000000/add-dollar.png"/>
                                        </center>
                                        <br>
                                            <form action="insere_prod.php" method="post">
                                                <div class="form-group">
                                                    <label>Nome do produto</label>
                                                    <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Categoria</label>
                                                    <select name="categoria" class="form-control" required>
                                                        <option>Atacado</option>
                                                        <option>Varejo</option>
                                                        <option>Papelaria</option>
                                                        <option>Carnes</option>
                                                        <option>Frios</option>
                                                        <option>Outros</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Preço</label>
                                                    <input type="number" name="preco" class="form-control" placeholder="0.00" required>
                                                </div>
                                                <br><br>
                                                <p></p>
                                                <div class="row mt-5">
                                                    <div class="col-6">
                                                        <a href="http://localhost/PDV" class="btn btn-warning btn-block text-white">Voltar</a>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-info btn-block" type="submit">Cadastrar</button>
                                                    </div>
                                                    <br><br><br>
                                                </div>
                                            </form>
                                        
                                        </div>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="js/index.js"></script>
</body>

</html>
<!-- end document-->