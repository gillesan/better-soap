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
                                foreach ($photos["environnement"]["emballageBetterSoap780x396"] as $photo) {
                                    echo '<li>
                                            <img alt="emballge better soap" src="' . $photo . '" />
                                           </li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <div class="project-text">
                            <h1>Sauvegarde de notre environnement</h1>
                            <p>La profusion des emballages non-recyclables qui est imposée par la grande distribution devient intolérable. Les emballages plastiques nécessaire au stockage et transport des cosmétiques industriels créent un déchet qui représente plus de la moitié du poids du savon lui-même.</p>
                            <p>Les gels douches, de par leurs ingrédients, rejettent dans les eaux usées des polluants tels l’EDTA, les plastiques, les PE qui ne peuvent pas être éliminés par les stations d’épuration et se retrouvent dans le milieu naturel. Ils finissent par se retrouver dans notre nourriture et dans l’eau que nous buvons.</p>
                            <p>Les <strong>savons et shampoings solides</strong> permettent un emballage composé de <strong>papiers et cartons</strong> (recyclés et recyclables).</p> 
                            <p>La traçabilité des ingrédients permet de contrôler l’<strong>impact de leur culture</strong> sur l’environnement. Les productions peu énergivores et locales limitent considérablement l’<strong>impact en gaz à effet de serre.</strong></p>
                        </div>

                        <div class="project-gallery">
                            <h1>Surveillons notre impact</h1>
                            <div class="row">
                                <?php
                                for ($i = 0; $i <= 5; $i++) {
                                    echo '<div class="col-md-2">
                                                <div class="view view-first">
                                                    <img src="' . $photos["environnement"]["pollution"]["pollution118x117"][$i] . '" alt="pollution emballage" /> 
                                                    <div class="mask">
                                                        <div class="i-icons">
                                                            <a href="' . $photos ["environnement"]["pollution"]["pollution780x396"][$i] . '"><i class="fa fa-plus"></i></a>
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