<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyles.css">
    <title>Contact Us</title>
</head>
<body>
    <?php 
     include_once ("commonCode.php"); 
     navigationBar("contact" ,$lang);
    ?>
        <h1><?= $translations["ContactPageAskName"] ?></h1>
        <?php
        if (isset($_POST["username"])) 
            {
            print "Hello" . $_POST["username"];
        }
        else{
        ?>

        <form method="POST">
            <?= $translations["ContactPageAskName"] ?> <input type="text" name="username">
            <br>
            <?= $translations["ContactPageAskButton"] ?> <input type="password" name="psw">
            <button type="submit"> <?= $translations["ContactPageDataBtn"] ?> </button>
        </form>
        <?php
        }
        ?>

        
</body>
</html>