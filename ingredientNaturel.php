<?php
include_once('include/beginning.php');
include_once('include/data.php');
include_once('include/inclIngrNat.php');

?>
<!-- content 
        ================================================== -->
<div id="content">
    <div class="inner-content">
        <div class="single-project">
            <div class="single-box">
                <div class="single-box-content">
                    <div class="project-post-content">
                        
                        <?php echo $sliderIngredient;?>
               
                        

                        <div class="project-text">
                            <h1><?php echo $titleh1;?></h1>
                            <?php echo $explIngr;?>
                            <h2>Les huiles végétales</h2>
                            <?php echo $huileVeg;?>
                            <h2>Les huiles essentielles</h2>
                            <?php echo $huileEss;?>
                               
                            <h2>Les ajouts</h2>
                            <?php echo $ajout;?>

                        </div>
                        <p><a href="produit.php?p=<?php echo $origin;?>"><strong id='buttonBack'><?php echo $data[$origin]["titleh1"];?></strong></a></p>


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