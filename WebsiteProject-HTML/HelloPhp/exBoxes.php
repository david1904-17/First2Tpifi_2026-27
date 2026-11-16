<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width:10px;
            height:10px;
        }
        .yellow{
            background-color:yellow;
        }
        .blue{
            background-color:blue;
        }
    </style>
</head>
<body>
    <div class="box yellow"></div>
    <div class="box blue"></div>

    <form method="GET" action="exBoxes.php">
        Please enter blues number: <input type="number" name="blueBoxes"> <br>
        Please enter yellows number: <input type="number" name="yellowBoxes"> <br>
        <button type="submit">show boxes</button>

        <?php
          if(isset($_GET["blueBoxes"]) && isset($_GET["yellowBoxes"]))
         {
            if ($_GET["blueBoxes"] <  $_GET["yellowBoxes"])
            {
                $max=$_GET["yellowBoxes"];
                $min=$_GET["blueBoxes"];
            }
            else
            {
                $min=$_GET["yellowBoxes"];
                $max=$_GET["blueBoxes"];
            }

            for($i=0; $i<$min; $i++)
            {
                ?>
                <div class="box blue"></div>
                <div class="box yellow"></div>
                <?php
            }
            for($i=$min; $i<$max; $i++)
            {
                if($_GET["blueBoxes"] < $_GET["yellowBoxes"])
                {
                    ?>
                    <div class="box yellow"></div>
                    <?php
                }
                else
                {
                    ?>
                    <div class="box blue"></div>
                    <?php
                }
            }
            
         }
         ?>
    </form>
</body>
</html>