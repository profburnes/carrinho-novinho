<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Carro Novinho</title>

    <meta name="description" content="Site de venda de carros nacionais e importados com garantia">

	<link rel="shortcut icon" href="imagens/icone.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;600;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
</head>
<body>
    <header class="header">
        <a href="home" class="header-logo">
            <img src="imagens/logo.png" alt="Logo">
        </a>

        <a href="javascript:menu()" class="header-menu">
            <i class="fa-solid fa-bars"></i>
        </a>

        <nav class="header-nav">
            <ul>
                <li>
                    <a href="home" title="Home">
                        <i class="fa-solid fa-house-chimney"></i> Home
                    </a>
                </li>
                <li>
                    <a href="sobre" title="Sobre">
                        <i class="fa-solid fa-user-tie"></i>
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="contato" title="Contato">
                        <i class="fa-solid fa-envelope"></i>
                        Contato
                    </a>
                </li>
                <li>
                    <a href="download.zip" title="Download">
                        <i class="fa-solid fa-download"></i>
                        Download
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <?php

        $pagina = $_GET["param"] ?? "home";

        $pagina = "paginas/{$pagina}.php";

        if ( file_exists ( $pagina ) ) 
            include $pagina;
        else
            include "paginas/erro.php";

    ?>
    

    <footer class="footer">
        <p>Desenvolvido por WebDev Internet</p>
        <p>
            <a href="http://www.facebook.com" title="Facebook">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="http://www.instagram.com" title="Instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="http://www.twitter.com" title="Twitter">
                <i class="fa-brands fa-twitter"></i>
            </a>
        </p>
    </footer>
    
    <script>
        function menu() {
            document.querySelector(".header .header-nav").classList.toggle("show");
        }
    </script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/lightbox.min.js"></script>
</body>
</html>