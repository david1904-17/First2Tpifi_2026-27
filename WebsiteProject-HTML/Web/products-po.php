<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyles.css">
    <title>Products</title>
</head>

<body>
    <?php 
     include_once ("commonCode.php"); 
     navigationBar("products" , "en");
     $namesOfProducts = ["Ronaldo", "Cancelo", "Totti", "Cardoso","Jonas", "Mbappe"];
     $imagesOfProducts = ["images/Ronaldo.png", "images/cancelo.png", "images/totti.png", "images/cardoso.png", "images/jonas.png", "images/mbappe.png"];
     $pricesOfProducts = [200000.000, 100000.00, 75000.00, 75000.00, 50000.00, 150000.00];
   ?>
    <div class="AllItems">

    <?php
    for ($i = 0; $i < count($namesOfProducts); $i++) {
        ?>
        <div class="oneItem">
            <div><?= $namesOfProducts[$i] ?></div>
            <img src="<?= $imagesOfProducts[$i] ?>" alt= "$namesOfProducts[$i]">
            <div>Price: $<?=$pricesOfProducts[$i] ?></div>
        </div>
        <?php

    }
    ?>
    </div>
</body>

</html>