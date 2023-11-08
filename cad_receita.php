<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/navbar.css"/>
    <link rel="stylesheet" href="css/cad_receita.css">
    <link rel="stylesheet" href="css/receita-responsividade.css">
    <link type="text/css" rel="stylesheet" href="scrollbar.css"/>
    <link rel="shortcut icon" href="img/fav.png">
    <title>Ratatouille - Envie sua Receita</title>
</head>
<?php
    session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
?>

<body>
    <!-- Header -->
    <header>
            <nav>
                <div class="navbar">
                    <div class="nome">Ratatouille</div>
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
                    <div class="nome">Ratatouille</div>
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
       
    <!-- Cadastro da Receita -->

    <main class="container-cad">
        <div class="container-items">
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>
            <h2 class="enviar-receita">
                <!-- <div class="icon-receita">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJBJREFUSEtjZKAxYKSx+QwoFnwvEPkPspBzwhtGGJs0B/x/wMDAmAjUfwCmj8oWgIz9/4BzwltFoi0A+YZYXyCHwOCzAF+cwHxJkQ9obgEx8UCRD2huAc2DiOYW0DyIRi0AhwC20nT4lEVDN5KJcTmamofAeFMguj4g0YKHQPUJOKtMEg0jSjnR1SFRpmFRBAAYpvgZw32Q7wAAAABJRU5ErkJggg=="/>
                </div> -->
                Enviar Receita</h2>
            <form action="cadReceitas.php" class="form-receita" method="post" enctype='multipart/form-data'>
                <div class="container-nome-receita">
                    <input placeholder="Nome da Receita" type="text" class="nome-receita" title="Nome da Receita" name="nome" required>
                </div>
                <div class="display">
                    <div class="container-imagem">
                        <div class="imagem-grupo">
                            <div class="enviar-imagem">
                                <div class="imagem-receita"></div>
                            </div>
                            <!-- <div class="remover-img">
                                <span> X </span>
                                Remover Imagem
                            </div>  -->
                            <div class="icon-cam">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAUVJREFUSEvVlc9twjAUxp9RpSrqASq4AxuwAWUDugFMUG8ATIA3gA2ACRo26AhwJyIX4FLVfKYxihKbWLiRqE+R/d73e//sMCp5sZL1qRCw57VaQE+fkqiTDgaOXyf67r2KOL4V5E2ATVwLukCsgCJxV8gVcOKNNyI5I2Itv77IDTSGgdiFSicNwAE1/cS1t9wEImpnAeijda1/SIoXES2VxYHX+xViHJ9dmwcyuASfzsAGmMB4bBJCWdX+yHTmCljDEL35XRC8BKGdkz1V61wmTgCU5V2XxQZIyrXIZuEE0EY6cpuI6fwxAKWXCCUJkWqvtCYnwmNAJqZRPPK6YMQ+fMZU+4YVJsXzNFqlLpoSvo7wXVNkisx1LzdFR96Ica2rrgIFdlsAWsom85rSHHu+D94WGoPca/pHkedkCn+ZvuD/DzgDc+ixGeZDUpUAAAAASUVORK5CYII="/>
                            </div>
                            <div class="msg-enviar">
                                <span>Envie as fotos aqui!</span>
                            </div>
                        </div>
                        <label for="" class="btn-adicionar">
                            Adicionar Fotos
                            <input type="file" class="btn" multiple="multiple" name="imagem" title="Adicionar Fotos">
                        </label>
                    </div>
                    <div class="container-info">
                        <div class="info-grupo">
                            <div class="conteudo">
                                <div class="time">
                                    <label for="" class="label">
                                        <div class="icon">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaNJREFUSEvtVMtNw0AQHSNLxHDAEeFOB0AFCR04HYQKMBXgVJDtAKiAUAFJB7gCcscIc4AEyWDeOLtilazXJpIlDlha2d6dmffefNahhh+n4fj0NwHmYSfXlXsiKSW6kYLGAcrq9hL6fovccygaKptfKVAB4BQgR8cyyARvLPfGoexW7g8BEvF5bYB5eDDIKR/Bwbd1HgDiD8p6bZGmawBlueXgRPkVOyDAHUAEGDJzgk8PL2bb5f8vyvu74nlsTJEJgNOyTe7jkrlz5omna5MC+DLIJSjMFvR5YlRgc2TmOyIJlI0io7co9lhVF7YXsBW1avAedh7A/gjGpyotMjXFLKwAcLrusabY5++fIpfnfzlUq8NkUqCA4ZBCQbsxAJ1QZZuWpchUr7dwP9gih2chhoJiTioBVHfAcNwSSd8UWCt8UWQs86BZ2nQGgD04Rvo1oIMpImD/ikE73HjQEHQC3ZE3SqayqNwt6H8qusY6aHb5xVUhpJI1U2aO84E+xbVqoEeSl12IYIGcDb46Yq7PgjKh0qL7VBbZpqrO2T9AZZa+AdLy1hnKBGRGAAAAAElFTkSuQmCC"/>
                                        </div>
                                        Tempo de Preparo                       
                                    </label>
                                    <div class="number-input">
                                        <div class="controle">
                                            <input type="number" class="numero" step="1" name="tempo" required>
                                        </div>
                                        minutos
                                    </div>
                                </div>
                                <div class="porcao">
                                    <label for="" class="label">
                                        <div class="icon">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAWNJREFUSEvllWFKw0AQhWc1oAXBCCn4szcwOUHNCfQG6g32BuoN9ga2N+gN2huYI/RnoQUjiFGMrm9oV9LtJiTaCGL+pHRe53tvJpsKavkSLfenfwbIZKB5pB21qJ28tpAbtwJA01MifSFIhLAfMgiuEk06wach0kyqHpTSBJk87hHld/gxAJUXAN5VR82mLpUT8CS74Q7pMYo+XD/irt5JjA7UHK6JuL5L+hw1idoh7ukHidjUi6ANADvXlN9zcx7BC73JI5WmLncP0vf3yBtAe8YQQV5kJ3EAAp5pfznf+WWdg/gsgxFDoJ1gJ3FpguVCacxjeaW8V+bchq6STHlcqMXFxa8lyGR3wE8MRLcQ3dRxbzQwx/prO/kaAFETfHGChUauhVUBV4vn3SX7ahEZrZWg+UktQl0H0QloMhqXtvgq+V3AT51XnmQzv21BzJi+RtQ6YFvO7T6N/g++Y+LvAz4BLVmGGajd7t4AAAAASUVORK5CYII="/>
                                        </div>
                                        Porções
                                    </label>
                                    <div class="number-input">
                                        <div class="controle">
                                            <input type="number" class="numero" step="1" name="quantidade" required>
                                        </div>
                                        porções
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-categoria">
                            <label class="categoria" for="categoria">
                                <select class="opcoes" name="categoria" required>
                                    <option value="">Escolha uma Categoria</option>
                                    <option value="Salgado">Salgado</option>
                                    <option value="Doce">Doce</option>
                                    <option value="Vegetariano">Vegetariano</option>
                                    <option value="Bebida">Bebida</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="container-ingredientes">
                    <h2 class="ingrediente">Ingredientes</h2>
                    <div class="grupo-ingrediente">
                        <p class="texto">
                            Escreva cada ingrediente por linha e, para separar, não use hífen, numeração ou outro marcador.*
                        </p>
                        <div class="box-ingrediente">
                            <textarea class="txt-area" name="ingredientes" id="" cols="30" rows="8" placeholder="Ex: 2 xícaras de leite"></textarea>
                        </div>
                    </div>
                </div>
                <div class="container-preparo">
                    <h2 class="preparo">Modo de Preparo</h2>
                    <div class="grupo-preparo">
                        <p class="texto">
                            Descreva os passos por linha e, para separar, não use hífen, numeração ou outro marcador.*
                        </p>
                        <div class="box-preparo">
                            <textarea class="txt-area" name="modoPreparo" id="" cols="30" rows="8" placeholder="Ex: Pré-Aqueça o forno a 190° Graus"></textarea>
                        </div>
                    </div>
                </div>
               
                <div class="container-msg">
                    <h2 class="preparo">Antes de enviar</h2>
                    <ul>
                        <li>Revise sua receita para ter certeza que as quantidades estão corretas e todos os itens estão listados.*</li>
                        <li>Por favor, só envie fotos tiradas por você, fotos tiradas da internet não serão aceitas e você ainda corre o risco de ter seu cadastro removido do site.*</li>
                        <li>As informações serão posteriormente formatadas pelo time do Ratatouille.*</li>
                    </ul>
                </div>
                <button type="submit" class="enviar" name="enviar">
                    <Span>Enviar Receita</Span>
                </button>
                <!-- <input type="submit" class="enviar" name="enviar" value="Enviar Receita"> -->
            </form>
        </div>
    </main>

        <!-- Footer -->
        <!-- <footer>
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
            <p>copyright &copy;2022 JPM.</p>
        </div>
    </footer> -->
         <!-- <footer>
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
        </footer> -->

</body>
</html>