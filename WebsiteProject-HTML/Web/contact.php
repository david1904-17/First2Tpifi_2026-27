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
     navigationBar("contact" , "en");
    ?>
        <h1>Contact Us here</h1>
        <?php
        if (isset($_GET["username"])) {
            print "Hello" . $_GET["username"];
            print $_GET["username"];
        }
        else{

        
        ?>
        <form method="GET" action="contact.php">
            Please type your name here: <input type="text" name="username">
            <button type="submit"> Send data </button>
        </form>
        <?php
        }
        ?>

        
</body>
</html>