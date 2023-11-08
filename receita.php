<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/navbar.css"/>
    <link rel="stylesheet" href="css/receita-banner.css">
    <link rel="stylesheet" href="css/receita-filter-list.css">
    <link rel="stylesheet" href="css/receita-responsividade.css">
    <link type="text/css" rel="stylesheet" href="css/mediaquerys.css"/>
    <link rel="shortcut icon" href="img/fav.png"> 
    <link type="text/css" rel="stylesheet" href="css-index/navbar.css"/>  
    <link href="//db.onlinewebfonts.com/c/d7e8a95865396cddca89b00080d2cba6?family=SoDo+Sans+SemiBold" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="scrollbar.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/le592b5726.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Ratatouille - Receitas</title>
</head>
<body>
<body>
<?php
    // session_start();
    include_once("conexaoDB.php");

    if (isset($_COOKIE['userName'])){
        $userName_cookie = $_COOKIE['userName'];
    
?>

    <!-- Header -->
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
    } else{
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
                        <div class="login"><a href="login.php">Entrar</a></div>
                        <div class="cadastro"><a href="cad.php">Cadastrar</a></div>
                </div>
            </div>
        </nav>  
    </header>
    <?php
    }?>
    <!-- Banner -->
    <div class="banner_wrapper">
        <div class="banner_text">
            <div class="banner_header">
                <span class="banner_subtitle">O melhor lugar para se fazer uma receita é aqui!</span>
                <h1 class="banner_title">Receitas de todos os tipos</h1>
            </div>
            <div class="banner_descri">
                <p class="banner_paragrafo">De deliciosas guloseimas que dão água na boca a saborosos <br> 
                    salgados, selecionamos algumas de nossas receitas favoritas <br>
                    para você poder saborear em casa.
                </p>
            </div>
        </div>
           
        <div class="banner_image">
            <div class="image">
                <div class="image_circulo">
                    <!-- <img class="circulo" src="https://www.starbucksathome.com/br/media/wysiwyg/bannerEllipse.png" alt="circulo">
                    <img src="https://images.unsplash.com/photo-1503146234394-631200675614?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="salada" class="salada"> -->
                </div>
            </div>
            <div class="banner_shadow"></div>
        </div>
    </div>

    <!-- Filtro -->
    <div class="text-filter">
        <div class="text">
            <h1 class="h1-receitas">Receitas</h1>
        </div>
        <div class="filter">
            <ul class="filter-list">
                <li class="filter-list-by">
                    <span>Filtrar por: </span>
                </li>
                <li class="filter-list-item">
                <a href="filtro.php?cat=salgado">
                    <span>Salgados</span>
                </a>
                </li>
                <li class="filter-list-item">
                <a href="filtro.php?cat=doce">
                    <span>Doces</span>
                </a>
                </li>
                <li class="filter-list-item">
                <a href="filtro.php?cat=vegetariano">
                    <span>Vegetarianos</span>
                </a>
                </li>
                <li class="filter-list-item">
                <a href="filtro.php?cat=bebida">
                    <span>Bebidas</span>
                </a>
                </li>
            </ul>
        </div>
    </div>

    
    <!-- Lista de Receitas -->
    <div class="food-list-wrapper">
        <ul class="food-list">
            <li class="food-item">
                <a href="consultaPesquisa.php?nomeR=coxinha" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">90 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img src="img/img/coxas.png" alt="Coxinha">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Coxinha</span>
                        <span class="item-subtitulo">Crocante</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="consultaPesquisa.php?nomeR=croissant" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">80 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img src="img/img/croas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Croissant</span>
                        <span class="item-subtitulo">Delicioso</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="consultaPesquisa.php?nomeR=brigadeiro" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">25 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img" src="img/img/brigas.png" alt="Croissant">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Brigadeiro</span>
                        <span class="item-subtitulo">Cremoso</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="consultaPesquisa.php?nomeR=esfiha de carne" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">90 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img_esfiha" src="img/img/esfiha.png" alt="Esfiha de Carne">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Esfiha de Carne</span>
                        <span class="item-subtitulo">Suculenta</span>
                    </div>
                </a>
            </li>
            <!-- <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img5" src="img/img/feijoas.png" alt="Feijão">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Feijão</span>
                        <span class="item-subtitulo">Desmanchando</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="img6" src="img/img/ratas.png" alt="Ratatouille">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Ratatouille</span>
                        <span class="item-subtitulo">Ratoso</span>
                    </div>
                </a>
            </li> -->
            <li class="food-item">
                <a href="consultaPesquisa.php?nomeR=suco de morango" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">5 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="suco" src="img/img/suco_morangas.png" alt="Suco de Morango">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Suco de Morango</span>
                        <span class="item-subtitulo">Geladinho</span>
                    </div>
                </a>
            </li>
            <!-- <li class="food-item">
                <a href="consultaPesquisa.php?nomeR=suco verde" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="suco1" src="img/img/suco_verdas.png" alt="Suco Verde">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Croissant</span>
                        <span class="item-subtitulo">Delicioso</span>
                    </div>
                </a>
            </li> -->
            <!-- <li class="food-item">
                <a href="#" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="strongas" class="img" src="img/img/strongas.png" alt="Strogonoff">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Brigadeiro</span>
                        <span class="item-subtitulo">Cremoso</span>
                    </div>
                </a>
            </li> -->
            <li class="food-item">
                <a href="consultaPesquisa.php?nomeR=Milk Shake de Chocolate" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">5 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="milk" src="img/img/milkas.png" alt="Milk-Shake">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Milk Shake de Chocolate</span>
                        <span class="item-subtitulo">Irresistível</span>
                    </div>
                </a>
            </li>
            <!-- <li class="food-item">
                <a href="consultaPesquisa.php?nomeR=Limonada Suiça" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="limas" src="img/img/limas.png" alt="Limonada Suiça">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Feijão</span>
                        <span class="item-subtitulo">Desmanchando</span>
                    </div>
                </a>
            </li>
            <li class="food-item">
                <a href="consultaPesquisa.php?nomeR=Molho Bolonhesa" class="item-link">
                    <div class="item-header">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAaVJREFUSEvVVdFRg0AQvQP+NJoStALJRP9JCVagHUBsQK2Ao4PYgR3Iv8OIFZgS0OgfsO4SbuaA4yAz8uF9ZY7d996+3dtwNvHhE+OzUQSz9RJ0QnZhMpg/GEDAkxOMsfHk7vLBKnORiTRT4wcrmAfuWc4c3+LgoU8uJWNSWgKPHZZHCLglcAC4p3sLipVKYiQ4Xi8FBvimCgC4QKLHgtsxxl0wYNc7kTzLnF4C9D2tEvbnqQRL/IhXumNHwZVr8TLAnzeyIlJeMNtTwetvXX2K8k8E9iRwO7ImIuWnaF/0HSZE2jidCshzLPeDohB8oYLLaVLHsyZ5o3gbinPqibHJUr1OkY6AwPB+Q3bpcjoVSO/b6mug6sG1H5isgqboK0wWxgr6VJoITN90FWhV/iVBNZ46i7rztr9RGv2O9lWPUZ5OBaYm9xEc1GTTmOoIDh5TAlEeWoZWrQYe2gumzEc/NKmysSqAbUpmRY1VwUoft95tHd/xvrcHqg2jll3PihhFQEHVuuZ2gNPg0XRJxWhJ7EBB+3/b13y6H/w/MCWP+fb/CX4Bv5H4GTXhYx8AAAAASUVORK5CYII=" alt="Time" class="time"/>
                        <span class="text-time">20 min</span>
                    </div>
                    <div class="item-body">
                        <div class="imagem-receita">
                            <img class="molho" src="img/img/molhas.png" alt="Molho">
                        </div>
                    </div>
                    <div class="item-footer">
                        <span class="item-titulo">Ratatouille</span>
                        <span class="item-subtitulo">Ratoso</span>
                    </div>
                </a>
            </li> -->
        </ul>
    </div>

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
                <p>copyright &copy;2022 JPM. designed by <span>pk</span></p>
            </div>
        </footer> -->

    <!-- Footer
    <footer class="page-footer">
        <div class="l-footer">
            <div class="logo-footer">
                <img src="img/img_icon.svg" alt="" class="img-footer">
                <span>Ratatouille</span>
            </div>
        </div>
        <div class="menu">
            <div class="menu-footer">
                <div class="first-menu-footer"></div>
                <div class="sec-menu-footer"></div>
            </div>
        </div>
        <div class="social">
            <div class="social-footer"></div>
        </div>
    </footer> -->
</body>
</html>