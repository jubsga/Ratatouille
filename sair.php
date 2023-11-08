<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index-responsividade.css">
    <link rel="stylesheet" href="css/sair.css">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- MediaQuery -->
    <link type="text/css" rel="stylesheet" href="css-index/801-1024px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1025-1152px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1153-1280px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1281-1360px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1361-1366px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1367-1400px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1401-1440px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1441-1600px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1601-1680px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/1681-1920px.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/navbar.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/slide.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/conteudo.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/footer.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/navbar.css"/>
    <link type="text/css" rel="stylesheet" href="footer.css"/>

    <!-- Icons -->
    <link type="text/css" rel="stylesheet" href="scrollbar.css"/>
    <link href="//db.onlinewebfonts.com/c/d7e8a95865396cddca89b00080d2cba6?family=SoDo+Sans+SemiBold" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/le592b5726.js" crossorigin="anonymous"></script>
    <title>Ratatouille - Sair</title>
</head>
<body>
<?php
    session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
    ?>
    <header>
        <nav>
            <div class="navbar">
                <div class="nome">Ratatouille</div>
                <a href="index.php"><img src="img/img_icon.svg"/></a>
                <div class="navbar-left">
                    <div class="receita"><a href="receita.php">Receitas</a></div>
                    <div class="sobrenos"><a href="about-us.php">Sobre nós</a></div>
                    <div class="enviereceita"><a href="cad_receita.php">envie sua receita</a></div>
                </div>
    
                <div class="navbar-right">
                        <form action="consultaPesquisa.php" method="get">
                            <input type="text" name="nomeR" id="search" placeholder="Faça sua busca" required>
                            <button type="submit"><i class="fa fas fa-search"></i></button>

                        </form>
                        <div class="login"><a href="dados.php">
                            
                                <?php
                                echo $userName_cookie;
                                ?>
                            
                            </a></div>
                </div>
            </div>
        </nav>  
    </header>
    <?php
    } 
    ?>
    <main>
        <div class="container-titulo">
            <div class="grid-titulo">
                <h2 class="titulo">Área do Usuário</h2>
                <!-- <span class="subtitulo"> marquinhos </span> -->
            </div>
        </div>

        <div class="display">
            <div class="text-filter">
                <div class="filter">
                    <ul class="filter-list">
                        <li class="filter-list-by">
                            <span class="txt">Sobre o Usuário</span>
                        </li>
                        <a href="dados.php">
                            <li class="filter-list-item">
                                <span class="span">Dados</span>
                            </li>
                        </a>
                        <a href="edit_dados.php">
                            <li class="filter-list-item">
                                <span class="span">Editar Dados</span>
                            </li>
                        </a>
                        <a href="receita_cad.php">
                            <li class="filter-list-item">
                                <span class="span">Receitas Cadastradas</span>
                            </li>
                        </a>
                        <a href="sair.php">
                            <li class="filter-list-item">
                                <span class="span">Sair / Excluir Conta</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
         
            <div class="sair">
                <div class="logout">
                    <span class="text-sair">Deseja realmente sair?</span>
                    <div class="botao-cad">
                        <div class="cad">
                            <a href="logout.php">
                            <button type="submit" class="action-cad" name="send" id="send2">
                                <span class="cad">Sair</span>
                                <img class="icon1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUCAYAAAAcaxDBAAAAAXNSR0IArs4c6QAAA25JREFUeF7tnEGO1DAQRScngJsAJ5jmAMAZEEgjNELAkhU9N2DFAqEREhfgBmR2LBiJW7BgAWuE1PyvTkvDjBNX7HI7SX9LUS/aLpdfKlW241RzpOJKoHGVJmFHAupsBAIqoM4EnMXJQgXUmYCzOFmogDoTcBYnC60JdLPZ3Eb/x7juOuuRIu43Gl00TfM9pXGpNiYL7UC+gBIvcRHqlEoLZc4Alr/VSxRoB/PLRKxyCNhjQP1Ym6gFKGGuaitq7P9ebRcwCBTWSZAEOpfSAuj9msrGgH6Gco9qKpjQd1UrjQH9NcEgFGP8Clb6Nlap1P8xoJuBjs9KKWWQS1fE6VuoMOKvDTKKVEkGCqWjAa2IxhAK305gbwTUibCAOoHciRFQAd0SgCX0BiX50LCVKCg5Pz0CKqCaNjnbgIAK6JX53qKiPCYtJxjbN8xQLt3vcifwoIJStyB4jbE/BdRPJaAeItDdHsB7AD0F2L+eYOcKdAUIvEKFm8xt6I/AkvUr6j1E/Z9eUGcJNHXwPXsAPyDvgZdfFdDt3fnj5VcF9H9zz/arAnrTf2T5VQENO+Rkvyqg/REuya/uHWgXaVMDdW47TrX6Xu71yX6HGcCpteMaQIfepFr13nc9s18VUPutMflVAbUDNc1XBXQcUK77n8GnfuhrJqB2oFzvc91Pf9pbBNQGlPunXO/Tjw6WGkDXMaUK/p8ybToHyCdWnfYO1KpYiXqREyfXu+TE/jlgcn1vLgIaRmXyl6GmAnqTitlfCujwMUjy4Xsmvm/i455UZKFbbEn+UhYattBkf7kYoN3XKX27Rvy6rg0NNhDls/zlkoCuMZjRR8KvAc32lwK6feR50GH0/NIaoWYZlFKPhKMdN4ovY+txK7yDt9AcUNa2B2WhVig59QQ0h16grYAKqE4wO9uAgArojoA+/BpvCwpK45kNthDQqQCFHlwX1yordMwrVCadgIDJpm7VopbY76RTZCiJy8i7GvOhfKzmlGaIm8t9rmAkmrTq0bwhmDq1ED32TGWaNvmtqqYYovoWoMx1R6h38sdbVMI8UrURQZf/jokEeU0tSF1Qr9op2namErXQqzbVgaWPmkq6S341N790l0Uf1IUJH2WhCxt7keEIqDNWARVQZwLO4mShAupMwFmcLFRAnQk4i5OFOgP9B3C4RHNTdlipAAAAAElFTkSuQmCC"/>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="logout">
                    <span class="text-sair">Excluir Conta</span>
                    <div class="botao-cad">
                        <div class="cad">
                            <a href="delete.php">
                            <button type="submit" class="action-cad" name="send" id="send2">
                                <span class="cad">Excluir</span>
                                <img class="icon1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKVJREFUSEvtldENwjAMRN9N0BGATToKTEZHYZR2AzYwClJQqyZxWxQhoeTXse/OdnKi8lHl+hQBzKwH7sA5Q2QEbpIeOaIeQChwclSOki5HASwkSkoSMbNi/J1bYucV8OIrgJjw7eDnihcKqgNE5lukz1WW7h8eXgNw97u1qLXoswP/+9CeQLfzV50krZwv16JglcMGN4scJuCass7fmv7OFiWvvwDSf44ZQEbr5gAAAABJRU5ErkJggg=="/>
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="index">
                    <span class="text-index">Voltar para a página inicial</span>
                    <div class="botao-cad">
                        <div class="cad">
                            <a href="index.php	">
                                    <button type="submit" class="action-cad" name="send" id="send2">
                                    <span class="cad">Página Inicial</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </main>
</body>
</html>