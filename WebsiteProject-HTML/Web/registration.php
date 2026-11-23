<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyles.css?<?= time(); ?>">
    <title>Registration</title>
</head>
<body>
    <?php 
     include_once ("commonCode.php"); 
     navigationBar("registration" ,$lang);


     if (isset($_POST["username"],$_POST["emailAddress"],$_POST["fullName"],$_POST["age"],$_POST["gender"])) 
        {
            print("We are processing your request");

            $fileUsers = fopen("Users.csv", "a");
        }else{

    ?>

    <h1>Registration form</h1>


    <form method="POST" id="registrationForm">
        <div>Username: <input type="text" name="username"><br></div>
        <div>Your email address: <input type="text" name="emailAddress"><br></div>
        <div>Your full name: <input type="text" name="fullName"><br></div>
        <div>Your age: <input type="number" name="age"><br></div>
        <div>Gender: <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br></div>
    <button type="submit">Register</button>
    </form>

    <?php
     }
    ?>
</body>
</html>