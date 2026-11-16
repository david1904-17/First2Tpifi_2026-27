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
    $names =["John", "Angelina", "Shakira", "Ronaldo", "Michelle", "Micheal"];
    $lastNames =["Doe", "Joli", "Smith", "Cristiano", "Duran", "Olise"];
    for($i=0; $i<count($names); $i++) {
        print "<li>" . $names[$i] ."</li>";
    }
    ?>
    </ul>
    
    <table style="width:50%">
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Last Name</th>
        </tr>
    <?php
    for($i=0; $i<count($names); $i++) {
        ?>
        <tr>
            <td><?php print $i?></td>
            <td><?php print $names[$i]?></td>
            <td><?php print $lastNames[$i]?></td>
        </tr>
        <?php
    }
    ?>
    

</body>
</html>