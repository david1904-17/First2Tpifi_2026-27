
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A + B</title>
</head>
<body>

<?php
$a = 0;
$b = 0;
$c = 0;

if (isset($_GET["a"]) && isset($_GET["b"])) {
    $a =  $_GET["a"];
    $b =  $_GET["b"];
    $c = $a + $b;
}
?>

<form method="GET" action="a+b.php">
    <label>Enter number A:</label>
    <input type="number" name="a" step="any" required>

    <br><br>

    <label>Enter number B:</label>
    <input type="number" name="b" step="any" required>

    <br><br>

    <button type="submit">Calculate</button>
</form>

<?php
if (isset($_GET["a"]) && isset($_GET["b"])) {
    echo "Result: " . $a . " + " . $b . " = " . $c;
}
?>

</body>
</html>
