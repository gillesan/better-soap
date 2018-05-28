<?php
include_once('include/beginning.php');
?>

<!-- content 
        ================================================== -->
<div id="contentContact">
    <div class="inner-content">
        <div class="contact-page">
            <!--  <div id="map"></div>-->
            
            

            <div class="contact-box">
                <div class="contact-info">
                    <h1>Contactez-nous !</h1>
                    <p>Nous partageons avec plaisir notre passion. Nous aimons en parler et échanger de bons tuyaux.</p>
                </div>
                <form id="contact-form">
                    <h1>Envoyez-nous un message</h1>
                    <div class="text-fields">
                        <div class="float-input">
                            <input name="name" id="name" type="text" placeholder="Nom">
                            <span><i class="fa fa-user"></i></span>
                        </div>
                        <div class="float-input">
                            <input name="mail" id="mail" type="text" placeholder="e-mail">
                            <span><i class="fa fa-envelope-o"></i></span>
                        </div>
                        
                    </div>

                    <div class="submit-area">
                        <textarea name="comment" id="comment" placeholder="Message"></textarea>
                        <input type="submit" id="submit_contact" class="main-button" value="Envoyer">
                        <div id="msg" class="message"></div>
                    </div>
                </form>
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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/gmap3.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>



<?php
include_once('include/ending.php');
?>