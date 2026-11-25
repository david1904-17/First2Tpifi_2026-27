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
    navigationBar("registration", $lang);


    if (isset(
        $_POST["username"],
        $_POST["emailAddress"],
        $_POST["fullName"],
        $_POST["age"],
        $_POST["gender"],
        $_POST["psw"],
        $_POST["pswAgain"]
    )) {

        if ($_POST["psw"] != $_POST["pswAgain"]) {
            print("Password missmatch.Please try again.");
        } else {
            print("We are processing your request");

            $userisOkToBeCreated = true;

            $fileUsers = fopen("Users.csv", "r");

            while (!feof($fileUsers)) {
                $anotherUser = fgets($fileUsers);
                $userDataArray = explode(";", $anotherUser);


                if (count($userDataArray) == 6) {
                    print($userDataArray[0] . "<br>");
                    if ($_POST["username"] == $userDataArray[0]) {
                        $userisOkToBeCreated = false;
                        break;
                    }
                }
            }

            if ($userisOkToBeCreated) {
                $fileUsers = fopen("Users.csv", "a");
                $hashedPassword = password_hash($_POST["psw"], PASSWORD_BCRYPT);
                $newUserData = $_POST["username"] . ";" . $hashedPassword . ";" . $_POST["emailAddress"] . ";" . $_POST["fullName"] . ";" . $_POST["age"] . ";" . $_POST["gender"] . "\n";
                fputs($fileUsers, $newUserData);
                print("Done. We saved your data");
            } else {
                print("Sorry, this username is already taken. Please choose another one.");
            }
        }
    } else {

    ?>

        <h1><?= $translations["RegistrationPageTitle"] ?></h1>


        <form method="POST" id="userForm">

            <div><?= $translations["RegistrationPageAskUsername"] ?>
                <input type="text" name="username"><br>
            </div>

            <div><?= $translations["RegistrationPageAskPassword"] ?>
                <input type="password" name="psw"><br>
            </div>

            <div><?= $translations["RegistrationPageAskPasswordAgain"] ?>
                <input type="password" name="pswAgain"><br>
            </div>

            <div><?= $translations["RegistrationPageEmailAdress"] ?>
                <input type="text" name="emailAddress"><br>
            </div>

            <div><?= $translations["RegistrationPageFullName"] ?>
                <input type="text" name="fullName"><br>
            </div>

            <div><?= $translations["RegistrationPageAge"] ?>
                <input type="number" name="age"><br>
            </div>

            <div><?= $translations["RegistrationPageGender"] ?>
                <select name="gender">
                    <option value="male"><?= $translations["RegistrationPageMale"] ?></option>
                    <option value="female"><?= $translations["RegistrationPageFemale"] ?></option>
                </select><br>
            </div>

            <button type="submit"><?= $translations["RegistrationPageDataBtn"] ?></button>

        </form>

    <?php
    }
    ?>
</body>

</html>