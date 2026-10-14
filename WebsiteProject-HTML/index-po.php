<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyles.css">
    <title>Home Page</title>
</head>
<body>
    <nav>
        <!---<ul id="mainLinks">
            <li><a href="index-po.php" class="active">Home</a></li>
            <li><a href="about-po.php">Sobre</a></li>
            <li><a href="contact-po.php">Contacto</a></li>
            <li><a href="products-po.php">Produtos</a></li>
        </ul>
        <ul id="languageLinks">
            <a href="index.php">English</a>
            <a href="index-po.php" class="active">Portuguese</a>
        </ul>
    </nav>
        -->
    <?php 
     include_once ("commonCode.php");
     navigationBar("home", "po");
    ?>



    <h1>Bem-vindo ao Nosso Site</h1>
</body>
</html>