<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyles.css">
    <title>About Us</title>
</head>
<body>
    <?php 
     include_once ("commonCode.php"); 
     navigationBar("about" ,$lang);
    ?>
        <h1><?= $translations["AboutPageMainText"] ?></h1>
</body>
</html>