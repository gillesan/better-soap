<?php
include_once('include/beginning.php');
include_once('include/data.php');
?>

<!-- content 
        ================================================== -->
<div id="content">
    <div class="inner-content">
        <div class="about-page">

            <div class="about-box">
                <div class="service-content">
                    <div class="service-section clearfix">
                        <h1><?php echo $data[$page]["titleh1"];?></h1>
                        <img src="<?php echo $data[$page]["imgSrc"];?>" alt=<?php echo $data[$page]["imgAlt"];?>/>
                        <?php echo $data[$page]["desc"];?>
                        
                        <div class="height"></div>						
                    </div>
                    <div class="border"></div>
                    <div class="service-section offer-section">
                        <h1>Recommend&eacute; pour</h1>
                        <?php echo $data[$page]["recomd"];?>

                    </div>
                    <div class="border"></div>
                    <!-- Tabs -->
                    <div class="tabs service-section last-section">		
                        <h1>Ingr&eacute;dients</h1>		
                        <div class="tabs-widget clearfix">
                            <ul class="tab-links clearfix">
                                <li class="active"><a href="#graphic">Huiles v&eacute;g&eacute;tales</a></li>
                                <li class=""><a href="#visual">Huiles essentielles</a></li>
                                <li class=""><a href="#econom">Ajouts</a></li>
                            </ul>

                            <div id="graphic" style="display: block;">
                                <ul>
                                    <a href="ingredientNaturel.php?p=ingredientNaturel&o=<?php echo $page;?>"><li>
                                        <p><?php echo $data[$page]["huileVegDescr"];?></p>
                                    </li></a>
                                </ul>
                            </div>

                            <div id="visual" style="display: none;">
                                <ul>
                                    <a href="ingredientNaturel.php?p=ingredientNaturel&o=<?php echo $page;?>"><li>
                                        <p><?php echo $data[$page]["huileEssDescr"];?></p>
                                    </li></a>
                                </ul>
                            </div>

                            <div id="econom" style="display: none;">
                                <ul>
                                    <a href="ingredientNaturel.php?p=ingredientNaturel&o=<?php echo $page;?>"><li>
                                        <p><?php echo $data[$page]["ajoutDescr"];?></p>
                                    </li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Tabs -->
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
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="js/jquery.quovolver.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>



<?php
include_once('include/ending.php');
?>