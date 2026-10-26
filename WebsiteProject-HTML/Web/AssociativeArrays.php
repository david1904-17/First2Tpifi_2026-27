<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
    $heights = ["Valerii" => 1.80,
               "Anastasia" => 1.77,
               "Thomas" => 1.75,
               "Lidia" => 1.65,
               "Violeta" => 1.59,];

    $heights["David"] = 1.75;
    $heights["Thomas"] = 2.00;

    foreach($heights as $name => $height) 
    {
        print $name."has a height of". $height."<br>";
    }
    ?>
    </ul>

     <table style="width:50%">
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Height</th>
        </tr>

    <?php
    $i=1;
    foreach($heights as $name => $height)
     {
        ?>
        <tr>
            <td><?php print $i?></td>
            <td><?php print $name?></td>
            <td><?php print $height?></td>
        </tr>
        <?php
        $i++;
    }
    ?>
</body>
</html>