<?php
function navigationBar($activePage, $language)
{
    if ($language == "en") {
?>
        <nav>
            <ul id="mainLinks">
                <li><a href="index.php" <?php if ($activePage == "home") {
                                            print "class='active'";
                                        } ?>>Home</a></li>
                <li><a href="about.php" <?php if ($activePage == "about") {
                                            print "class='active'";
                                        } ?>>About</a></li>
                <li><a href="contact.php" <?php if ($activePage == "contact") {
                                                print "class='active'";
                                            } ?>>Contact</a></li>
                <li><a href="products.php" <?php if ($activePage == "products") {
                                                print "class='active'";
                                            } ?>>Products</a></li>
            </ul>
            <ul id="languageLinks">
                <a href="index.php" class="active">English</a>
                <a href="index-po.php">Portuguese</a>
            </ul>
        </nav>

    <?php
    }
    if ($language == "po") {
    ?>
        <nav>
            <ul id="mainLinks">
                <li><a href="index-po.php" <?php if ($activePage == "home") {
                                                print "class='active'";
                                            } ?>>Casa</a></li>
                <li><a href="about-po.php" <?php if ($activePage == "about") {
                                                print "class='active'";
                                            } ?>>Sobre</a></li>
                <li><a href="contact-po.php" <?php if ($activePage == "contact") {
                                                    print "class='active'";
                                                } ?>>Contactos</a></li>
                <li><a href="products-po.php" <?php if ($activePage == "products") {
                                                    print "class='active'";
                                                } ?>>Produtos</a></li>
            </ul>
            <ul id="languageLinks">
                <a href="index.php" class="active">English</a>
                <a href="index-po.php">Portuguese</a>
            </ul>
        </nav>
    <?php
    }
    ?>

<?php
}
?>