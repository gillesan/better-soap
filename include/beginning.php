<?php
$page = isset($_GET['p']) ? $_GET['p'] : "presentation";
$origin = isset($_GET['o']) ? $_GET['o'] : "all";
include_once('include/titleMeta.php');
?>

<!doctype html>


<html lang="en" class="no-js">

    <head>
        <title><?php echo $title;?></title>
        
        <link rel="icon" type="image/png" href="images/faviconBetterSoap.png" />
        <meta charset="utf-8">
        <meta name="description" content="<?php echo $meta;?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">	
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/flexslider.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah">

    </head>
    <body>

        <!-- Container -->
        <div id="container">
            <!-- Header
                ================================================== -->
            <header>
                <div class="logo-box">
                    <a class="logo" href="index.php"><img alt="" src="images/logoBetterSoap.png" height="110" width="181"></a>
                    <div class="logo-text">Homemade with love</div>
                </div>

                <a class="elemadded responsive-link" href="#">Menu</a>

                <div class="menu-box">
                    <ul class="menu">
                        <li><a <?php
                            if ($page == 'presentation') {
                                echo 'class="active"';
                            }
                            ?>href="index.php"><span>presentation</span></a></li>
                        <li><a <?php
                            if ($page == 'valeurs' || ($page == 'ingredientNaturel'&& $origin == 'all') || $page == 'faitMaison' || $page == 'environnement' || $page == 'local') {
                                echo 'class="active"';
                            }
                            ?> href="valeurs.php?p=valeurs"><span>valeurs</span></a></li>
                        <li><a <?php
                            if ($origin != 'all' || $page == 'produits' || ( $page !='presentation' && $page != 'valeurs' && $page != 'faitMaison' && $page != 'environnement'  && $page != 'local' && $page != 'histoire') && $page != 'contact') {
                                echo 'class="active"';
                            }
                            ?>href="produits.php?p=produits"><span>produits</span></a></li>
                        <li><a <?php
                            if ($page == 'histoire') {
                                echo 'class="active"';
                            }
                            ?>href="histoire.php?p=histoire"><span>notre histoire</span></a></li>
                        <li><a <?php
                            if ($page == 'contact') {
                                echo 'class="active"';
                            }
                            ?>href="contact.php?p=contact"><span>Contact</span></a></li>
                    </ul>				
                </div>

                <div class="social-box">
                    <!--<ul class="social-icons">
                        <li><a href="#" class="facebook" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="dribble" ><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#" class="pinterest" ><i class="fa fa-pinterest"></i></a></li>
                    </ul>-->
                    <div class="info">
                        <!-- <a href="#" class="mail">info@better-soap.be<i class="fa fa-envelope-o"></i></a>-->
                        <p>info(at)better-soap.be<i class="fa fa-envelope-o"></i></p>
                        <!--<p class="phone">+32 486 74 43 52<i class="fa fa-phone"></i></p>-->
                    </div>

                    <p class="copyright">&#169; <?php echo date("Y"); ?> better soap<br> Droits R&eacute;serv&eacute;</p>
                </div>
            </header>
            <!-- End Header -->
