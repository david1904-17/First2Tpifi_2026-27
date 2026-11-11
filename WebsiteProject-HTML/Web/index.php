<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyles.css?<?= time(); ?>">
    <title>Home Page</title>
</head>
<body>
    <?php 
     include_once ("commonCode.php"); 
     navigationBar("home" ,$lang);
    ?>
    <h1><?= $translations["HomePageWelcome"] ?></h1>
</body>
</html>