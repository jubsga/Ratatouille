<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="//db.onlinewebfonts.com/c/d7e8a95865396cddca89b00080d2cba6?family=SoDo+Sans+SemiBold" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/le592b5726.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/fav.png">

    <!-- <link type="text/css" rel="stylesheet" href="navbar.css"/> -->
    <link type="text/css" rel="stylesheet" href="footer.css"/>
    <link type="text/css" rel="stylesheet" href="scrollbar.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/conteudo.css"/>

    <!-- -- >media query<-- -->
    <link type="text/css" rel="stylesheet" href="css-about-us/801-1024px.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/1025-1152px.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/1153-1280px.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/1281-1360px.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/1361-1366px.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/1367-1400px.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/1401-1440px.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/1441-1600px.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/1601-1680px.css"/>
    <link type="text/css" rel="stylesheet" href="css-about-us/1681-1920px.css"/>

    <link type="text/css" rel="stylesheet" href="css/navbar.css"/>
    <link rel="shortcut icon" href="img/fav.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <title>Sobre Nós - Ratatouille</title>

</head>
<?php
    session_start();

    // session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
    

?>

<body>
<header>
            <nav>
                <div class="navbar">
                    <div class="nome"></div>
                    <a href="index.php"><img src="img/img_icon.svg"/></a>
                    <div class="navbar-left">
                        <div class="receita"><a href="receita.php">Receitas</a></div>
                        <div class="sobrenos"><a href="about-us.php">Sobre nós </a></div>
                        <div class="enviereceita"><a href="cad_receita.php">envie sua receita</a></div>
                    </div>
        
                    <div class="navbar-right">
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
    } else{
           ?>
        <header>
            <nav>
                <div class="navbar">
                    <div class="nome"></div>
                    <a href="index.php"><img src="img/img_icon.svg"/></a>
                    <div class="navbar-left">
                        <div class="receita"><a href="receita.php">Receitas</a></div>
                        <div class="sobrenos"><a href="about-us.php">Sobre nós </a></div>
                        <div class="enviereceita"><a href="cad_receita.php">envie sua receita</a></div>
                    </div>
        
                    <div class="navbar-right">
                            <div class="login"><a href="login.php">Entrar</a></div>
                            <div class="cadastro"><a href="cad.php">Cadastrar</a></div>
                        </div>

                </div>
            </nav>  
        </header>
        <?php
    }?>
       
        <div id="conteudo1">
             <h2>Quem somos?
             </h2>
             <h3>Somos uma equipe de 3 pessoas! <br>
            Julia, Marcos e Paloma. <br><br>
            Criamos essa plataforma com o objetivo de <br>
            construir uma comunidade criativa e interativa.
            <br>
            </h3>
            <img src="img/foto-sobrenos.png"/>
        </div>

        <div id="conteudo2">
            <iframe width="700" height="400" src="https://Www.youtube.com/embed/XzjieG-QV-w" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            <h2>Conheça nosso projeto</h2>
            <h3>
                <i class="fa fa-sharp fa-solid fa-code"></i> <br><br>Back-end: Julia Gabriela, <br>Front-end: Marcos Raphael, <br>Paloma Kouzmin.
                <br><br>

                Ficamos felizes com a sua colaboração :)<br>
            <br>
            <audio controls type="audio/mpeg">
                <source src="podcast.mp3">
            </audio>
            
        </h3>
        </div>

        <form method="POST" action="estrelaAction.php">
            <div id="conteudo3">
                <h1>Gostou?<h1><h2><br>Avalie o site e ajude-nos a melhorá-lo cada vez mais.</h2>
                <div class="rate">
                    <input type="radio" id="star5" name="estrela" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="estrela" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="estrela" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="estrela" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="estrela" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
                <button type="submit">Avaliar</button>
                <div class="msg">
                    <?php
                        if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset ($_SESSION['msg']);
                        }
                    ?>
                </div>
                  
            </div>
        </form>
        

        <footer>
            <div class="footer-content">
                <h3>Siga nossas redes sociais</h3>
                <p>Fique por dentro de nossas novidades e junte-se à comunidade.</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/ratatouille.recipes/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2022 JPM. designed by <span>pk</span></p>
            </div>
        </footer>
</body>
</html>