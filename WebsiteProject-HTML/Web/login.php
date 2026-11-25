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
    include_once("commonCode.php");
    navigationBar("Login", $lang);



    if (isset($_POST["username"], $_POST["psw"])) {
        $fileUsers = fopen("Users.csv", "r");
        $flagUserLoggedIn = false;
        while (!feof($fileUsers)) {
            $newUserFromFile = fgets($fileUsers);
            $currentUserData = explode(";", $newUserFromFile);
            if (count($currentUserData) == 6) {
                if (($_POST["username"] == $currentUserData[0]) && (password_verify($_POST["psw"], $currentUserData[1]))) {
                    $flagUserLoggedIn = true;
                    break;
                }
            }
        }

        if ($flagUserLoggedIn) {
            print("Username and password are matching. Welcome back to our website !");
        } else {
            print("Wrong username or password. Please try again.");
        }
    } else {
    ?>
        <h1><?= $translations["LoginPageTitle"] ?></h1>


        <form method="POST" id="userForm">
            <div><?= $translations["LoginPageAskUsername"] ?>
                <input type="text" name="username"><br>
            </div>

            <div><?= $translations["LoginPageAskPassword"] ?>
                <input type="password" name="psw"><br>
            </div>

            <button type="submit"><?= $translations["LoginPageDataBtn"] ?></button>
        </form>
    <?php
    }

    ?>

</body>

</html>