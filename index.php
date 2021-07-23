<?php
    include_once('./conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="./script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!-- MENU -->
    <nav>
        <input type="checkbox" id="check">

        <label for="check" class="checkbtn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </label>

        <label class="logo"><a href="#"><img src="./img/logo.png" alt="Logo RGB"></a></label>
        <ul>
            <label><i class="fa fa-phone" aria-hidden="true"></i>00 0000-0000</label><br>
            <li> <a href="#">Página 1</a></li>
            <li> <a href="#">Página 2</a></li>
            <li> <a href="#">Página 3</a></li>
            <li> <a href="#">Página 4</a></li>
            <li> <a href="#">Página 5</a></li>
            <li> <a href="#">Página 6</a></li>
            <li> <a href="#">Página 7</a></li>
        </ul>
    </nav>
    <hr class="final-menu">

    <!-- GALERIA -->
    <div class="gallery">
        <?php

            $sql = "SELECT * FROM images";
                if ($res=mysqli_query($con, $sql)){
                    $caminho = array();
                    $nome= array();
                    $fotografo= array();
                    $ano= array();
                    $i=1;
                    
                    while ($reg=mysqli_fetch_assoc($res)){
                        $caminho[$i] = $reg['caminho'];
                        $nome[$i] = $reg['nome'];
                        $fotografo[$i] = $reg['fotografo'];
                        $ano[$i] = $reg['ano'];
                        ?>

                    <div class="image"> 
                        <span> 
                            <img src="./fotos/<?=$reg['caminho'] ?>" alt=""> 
                        </span>  
                          
                        <div class="dados-foto">
                            <p> <?=$reg['nome']?> </p>
                            <p> <?=$reg['fotografo']?> </p>
                            <p> <?=$reg['ano']?> </p>
                        </div>
                    </div>
                    
                    <?php
                    $i++;
                    }
                }
        ?>

        

    </div>

    <hr class="final-galeria">
    <!-- RODAPÉ -->

    <footer class="footer-distributed">

        <div class="footer-left">
            <img src="https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083379_960_720.jpg">
        </div>

        <div class="footer-center">
            <div>
                <p id="nome-fotografo">Nome do Fotografo</p>
            </div>

            <div>
                <p id="sobre-fotografo">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa sint harum, maxime nisi culpa fugit veniam praesentium aspernatur voluptatem quisquam labore ab libero quae veritatis doloremque alias possimus blanditiis facere!</p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Acesse Também:</span>
            </p>
            <div class="footer-icons">
                <span><a href="#"><i class="fa fa-facebook"></i></a>www.fb.com/rgbfast</span>
                <span><a href="#"><i class="fa fa-twitter"></i></a>www.twitter.com/rgbfast</span>
                <span><a href="#"><i class="fa fa-flickr"></i></a>www.flickr.com/rgbfast</span>
            </div>
        </div>
        <HR>
        <div class="copy-write">
            <span class="direitos">Todos os direitos reservados - © 2021</span>
            <span class="marca">Linha Fast | RGB Fast</span>
        </div>
    </footer>

</body>

</html>