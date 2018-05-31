<?php
include_once('include/beginning.php');
include_once('include/photoValeurs.php');
?>

<!-- content 
        ================================================== -->
<div id="content">
    <div class="inner-content">
        <div class="single-project">
            <div class="single-box">
                <div class="single-box-content">
                    <div class="project-post-content">

                        <div class="flexslider">
                            <ul class="slides">
                                <?php
                                foreach ($photos["faitMaison"]["artisanat780x396"] as $photo) {
                                    echo '<li>
                                            <img alt="savon artisanat" src="' . $photo . '" />
                                           </li>';
                                }
                                ?>

                            </ul>
                        </div>

                        <div class="project-text">
                            <h1>Fait-Maison</h1>
                            <p>Lors de la <strong>saponification à froid</strong>, les huiles ne sont pas chauffées au-dessus de 45°C.</p>
                            <p>Le savon conserve un haut taux de <strong>glycérine végétale</strong>, ce qui n’est pas le cas des savons qu’on trouve dans le commerce. La glycérine végétale nourrit la peau et est assimilé à un <strong>soin relipidant</strong> lors du lavage.</p>
                            <p>Le <strong>savon artisanal</strong> est le fruit d’un savoir-faire au niveau des procédés de fabrication et aussi au niveau du choix des ingrédients afin de créer un savon <strong>adapté à chaque peau</strong>.</p>

                            <p>La <strong>fabrication locale</strong> permet de garder le <strong>savoir-faire</strong> à l'intérieur de nos frontières et d’avoir un <strong>contrôle</strong> au plus proche de ce que nous appliquons sur notre peau chaque jour.</p>

                        </div>

                        <div class="project-gallery">
                            <h1>Saponification à froid</h1>
                            <div class="row">
                                <?php
                                
                                for ($i = 0; $i <= 5; $i++) {
                                    echo '<div class="col-md-2">
                                                <div class="view view-first">
                        
                                                    <img src="' . $photos["faitMaison"]["saponification"]["saponification118x117"][$i] . '" alt="" /> 
                                                    <div class="mask">
                                                        
                                                        <div class="i-icons">
                                                            <a href="' . $photos ["faitMaison"]["saponification"]["saponificationLarge"][$i] . '"><i class="fa fa-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                }


                                ?>



                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End content -->

</div>
<!-- End Container -->

<div class="preloader">
    <img alt="" src="images/preloader.gif">
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.migrate.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>




<?php
include_once('include/ending.php');
?>