
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A + B</title>
</head>
<body>

<?php

if (isset($_GET["NumberA"]) && isset($_GET["NumberB"])) {
    $sum = $_GET["NumberA"] + $_GET["NumberB"];
    print "The sum of the two numbers is: " . $sum;
} else {
?>
  <form method="GET" action="AddNumbers.php">
    Please type a number <input type="number" name="NumberA"> <br>
    Please type another number <input type="number" name="NumberB"> <br>
    <button type="submit">Add</button>
  </form>
  <?php
    }
   ?>
 
</body>
</html>
