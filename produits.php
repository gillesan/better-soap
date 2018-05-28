<?php
include_once('include/beginning.php');
include_once('include/data.php');

?>

<!-- content 
        ================================================== -->
<div id="content">
    <div class="inner-content">
        <div class="portfolio-page">
            <div class="portfolio-box">
                
<?php 

foreach ($data as $produit){
    echo '<div class="project-post">
                    <div class="view view-first">
                        
                        <img src="'.$produit["imgSrc405x311"].'" alt="'.$produit["imgAlt"].'"/>
                        <div class="mask">
                            <div class="top-post">
                                <h2>'.$produit["titleh1"].'</h2>
                                <div class="post-border"></div>
                                '.$produit["recomd"].'
                            </div>
                            <div class="bottom-post">
                                <a class="zoom" href="'.$produit["imgSrc780x396"].'"><i class="fa fa-search"></i></a>
                                <a href="produit.php?p='.$produit["page"].'"><i class="fa fa-arrow-right"></i></a>
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
<!-- End content -->

</div>
<!-- End Container -->

<div class="preloader">
    <img alt="" src="images/preloader.gif">
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.migrate.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>



<?php
include_once('include/ending.php');
?>