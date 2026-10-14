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
     navigationBar("products", "po");
    ?>
    <div class="AllItems">
        <div class="oneItem">
            <div>Ronaldo</div>
            <img src="images/Ronaldo.png" alt="Ronaldo">
            <div>Price: $200.000.000</div>
        </div>

        <div class="oneItem">
            <div>Cancelo</div>
            <img src="images/cancelo.png" alt="Cancelo">
            <div>Price: $100.000.000</div>
        </div>

        <div class="oneItem">
            <div>Totti</div>
            <img src="images/totti.png" alt="Totti">
            <div>Price: $75.000.000</div>
        </div>
    </div>
</body>

</html>