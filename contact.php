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
                    <h1>Get in touch with us</h1>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                </div>
                <form id="contact-form">
                    <h1>Send us a Message</h1>
                    <div class="text-fields">
                        <div class="float-input">
                            <input name="name" id="name" type="text" placeholder="Name">
                            <span><i class="fa fa-user"></i></span>
                        </div>
                        <div class="float-input">
                            <input name="mail" id="mail" type="text" placeholder="e-mail">
                            <span><i class="fa fa-envelope-o"></i></span>
                        </div>
                        <div class="float-input">
                            <input name="website" id="website" type="text" placeholder="website">
                            <span><i class="fa fa-link"></i></span>
                        </div>
                    </div>

                    <div class="submit-area">
                        <textarea name="comment" id="comment" placeholder="Message"></textarea>
                        <input type="submit" id="submit_contact" class="main-button" value="Send Now">
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