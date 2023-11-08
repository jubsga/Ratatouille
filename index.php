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
    
    <link type="text/css" rel="stylesheet" href="css-index/navbar.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/slide.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/conteudo.css"/>
    <link type="text/css" rel="stylesheet" href="css-index/footer.css"/>
    
    <!-- -- >media query<-- -->
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
    <link type="text/css" rel="stylesheet" href="footer.css"/>
    <link type="text/css" rel="stylesheet" href="scrollbar.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    
    <title>Ratatouille</title>

</head>
<?php
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
    } else{
           ?>
        <header>
            <nav>
                <div class="navbar">
                    <div class="nome"></div>
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
                            <div class="login"><a href="login.php">Entrar</a></div>
                            <div class="cadastro"><a href="cad.php">Cadastrar</a></div>
                    </div>
                </div>
            </nav>  
        </header>
        <?php
    }?>
       

    <div class="container">
        <!-- Slider main container -->
        <div class="swiper">
        <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
        <!-- Slides -->
                <div class="swiper-slide"><a href="consultaPesquisa.php?nomeR=Hambúrguer Vegetariano"><img src="img/vegetariano.png"></a></div>
                <div class="swiper-slide"><a href="consultaPesquisa.php?nomeR=Milk Shake de Chocolate"><img src="img/milk.png"></a></div>
                <div class="swiper-slide"><a href="consultaPesquisa.php?nomeR=Sushi"><img src="img/sushi.png"></a></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
  
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
     
    <conteudo1position>
    <div id="conteudo1">
        <div class="text1"><h4>Compartilhe a sua receita com a nossa comunidade e conheça outras novidades.</h4></div><br><br>
        <div class="saibamais"><a href="about-us.php"><h5>Saiba mais</h5></a></div>
    </div>
    </conteudo1position>

    <section class="cont2">
        <div class="cont2-left">
            <img src="img/pancakes.png"/>
        </div>
        <div class="cont2-right"> 
            <h3>Colabore</h3>
            <h4>Prezamos pela satisfação de nossos usuários, então criamos uma comunidade segura<br>
            e criativa, contamos com a sua colaboração para este projeto. <br><br>
            Nos ajude com a sua avaliação para que possamos melhorar cada vez mais a plataforma.<br>
             <i class="fa fa-solid fa-star"></i>
             <i class="fa fa-solid fa-star"></i>
             <i class="fa fa-solid fa-star"></i>
             <i class="fa fa-solid fa-star"></i>
             <i class="fa fa-solid fa-star"></i>
            </h4>
        </div>
    </section>

    <section class="cont3">
        <div class="cont3-left">
            <h3>Novidades</h3>
            <h4>Aqui na plataforma, você encontra muitas receitas
                rápidas e fáceis de fazer, com ingredientes <br> que
                você tem em casa. <br> <br>
                Para continuar sabendo de novas atualizações, <br> acesse nosso Instagram: <br>
                <a href="https://www.instagram.com/ratatouille.recipes/" target="_blank"><i class="fa fa-instagram"></i></a>
            </h4>
        </div>
        <div class="cont3-right">
            <img src="img/fruit.png"/>
        </div>
    </section>

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

    <main></main>
    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    <script>
        const swiper = new Swiper('.swiper', {
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        loop: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
    </script>

    </body>
    <!-- <script>
        var search = document.getElementById('pesquisar');
    
        search.addEventListener("keydown", function(event){
        if (event.key === "Enter") {
                searchData();
            }
        })
           
        function searchData(){
            window.location = 'pesquisa.php?search='+search.value;
        }
    </script> -->
</html>
