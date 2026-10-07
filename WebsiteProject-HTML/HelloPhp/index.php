<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width: 50px;
            height: 50px;
        }
        .blue{
            background-color: blue;
        }
        .red{
            background-color: red;
        }
    </style>
</head>
<body>

<?php

for ($i=0; $i < 3; $i++) { 
    ?>
    <div class="red box">
    </div>

    <div class="blue box">
    </div>
    <?php
}
?>
</body>
</html>