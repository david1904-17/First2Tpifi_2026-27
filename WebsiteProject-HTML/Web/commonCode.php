<?php

$lang = "en";

if(isset($_GET["lang"])){
    $lang = $_GET["lang"];
}

$translations = [];

$fileTranslations = fopen("Translations.csv", "r");
while (!feof($fileTranslations)) {
    $anotherLineOfText = fgets($fileTranslations);
    $oneLineArray = explode(";", $anotherLineOfText);

    if (count($oneLineArray) == 3) {
        if ($lang == "en") {
            $translations[$oneLineArray[0]] = $oneLineArray[1];
        } else {
            $translations[$oneLineArray[0]] = $oneLineArray[2];
        }
    }
}











function navigationBar($activePage, $language)
{
    global $translations;
    if ($language == "en") {
?>
        <nav>
            <ul id="mainLinks">
                <li><a href="index.php?lang<?= $language ?>" <?php if ($activePage == "home") {
                                            print "class='active'";
                                        } ?>><?=  $translations["HomeBtn"] ?></a></li>
                <li><a href="about.php?lang<?= $language ?>" <?php if ($activePage == "about") {
                                            print "class='active'";
                                        } ?>><?= $translations["AboutBtn"] ?></a></li>
                <li><a href="contact.php?lang<?= $language ?>" <?php if ($activePage == "contact") {
                                                print "class='active'";
                                            } ?>><?= $translations["ContactBtn"] ?></a></li>
                <li><a href="products.php?lang<?= $language ?>" <?php if ($activePage == "products") {
                                                print "class='active'";
                                            } ?>><?= $translations["ProductsBtn"] ?></a></li>
            </ul>
            <ul id="languageLinks">
                <li><a href="index.php" <?php if($language == "en") print ('class="active"'); ?>>class="active">English</a></li>
                <li><a href="index.php?lang=po" <?php if($language == "po") print ('class="active"'); ?>>Portuguese</a></li>
            </ul>
        </nav>

    
    <?php
    }
    ?>
<?php
    }
    ?>