<!-- works end -->
<div class="footer">
    <div class="container">
        <div class="col-sm-2">
            <h5>Site Map</h5>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php" class="last">Contact Us</a></li>
            </ul>
        </div>
        <div class="col-sm-4 col-md-3 twitter">
            <h5>Sosial Media</h5>
            <ul>
                <li><i class="fa fa-facebook" title="facebook"></i><a href="https://www.facebook.com/bahrudin.ardiansyah"> <span>Facebook</span></a></li>
                <li><i class="fa fa-google-plus" title="google"></i><a href="https://plus.google.com/u/0/103280157315910349330"> <span>Google+</span></a></li>
                <li><i class="fa fa-linkedin" title="linkedin"></i><a href="https://www.linkedin.com/in/bahrudin-ardiansyah-39a0416a?trk=hp-identity-name"> <span>Linkedin</span></a></li>
                <li><i class="fa fa-youtube" title="youtube"></i><a href="https://www.youtube.com/channel/UCgVUWSLwgxCmApG-euAVfew"> <span>Youtuber</span></a></li>
            </ul>
        </div>
        <div class="col-md-4 testimonial">
            <h5>Testimonial</h5>
            <ul>
                <li><i class="fa  fa-quote-left"></i> Harapan yang kita ukir dan tuangkan dengan tinta pasti bermakna </li>

            </ul>
            <div class="t-image">
                <img class="img-circle" src="img/work/my.png">
                <h6>- Bahrudin Ardiansyah, S.kom</h6><br>
                <!--<p>ceo of sun</p>-->
            </div>
        </div>
        <div class="col-md-3 contact-footer">
            <div class="footer-form">
                <h5>Contact Us</h5>
                <input type="text" placeholder="Name">
                <input type="text" placeholder="E-Mail">
                <textarea placeholder="Message" rows="3"></textarea>
                <button class="submit-bt">Send</button>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="container">
        <p>All Rights Reserved 2016 &copy; Bahrudin Ardiansyah</p>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<script src="js/responsiveslides.min.js"></script> 
<script src="js/response.min.js"></script>

<!--service star-->
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.mixitup.js"></script> 
<script>
    $('.collapse').on('shown.bs.collapse', function() {
        $(this).parent().find(".down-icon").removeClass("down-icon").addClass("up-icon");
    }).on('hidden.bs.collapse', function() {
        $(this).parent().find(".up-icon").removeClass("up-icon").addClass("down-icon");
    });
</script>
<script>

    $('.cd-testimonials-wrapper').flexslider({
        //declare the slider items
        selector: ".cd-testimonials > li",
        animation: "slide",
        //do not add navigation for paging control of each slide
        controlNav: false,
        slideshow: false,
        //Allow height of the slider to animate smoothly in horizontal mode
        smoothHeight: true,
        start: function() {
            $('.cd-testimonials').children('li').css({
                'opacity': 1,
                'position': 'relative'
            });
        }
    });
</script>
<script>
    $(function() {

        // Instantiate MixItUp:

        $('#Container').mixItUp();

    });
</script>

<!--service end-->
<script>
    $(function() {
        $(".rslides").responsiveSlides();
    });
</script>
<script>
    $("#playvideo1").click(function() {
        $("#video1")[0].src += "&autoplay=1";
        $(this).unbind("click");//or some other way to make sure that this only happens once
    });
    $("#playvideo2").click(function() {
        $("#video2")[0].src += "&autoplay=1";
        $(this).unbind("click");//or some other way to make sure that this only happens once
    });
    $("#playvideo3").click(function() {
        $("#video3")[0].src += "&autoplay=1";
        $(this).unbind("click");//or some other way to make sure that this only happens once
    });
    $("#playvideo4").click(function() {
        $("#video4")[0].src += "&autoplay=1";
        $(this).unbind("click");//or some other way to make sure that this only happens once
    });
    $("#playvideo5").click(function() {
        $("#video5")[0].src += "&autoplay=1";
        $(this).unbind("click");//or some other way to make sure that this only happens once
    });
    $("#playvideo6").click(function() {
        $("#video6")[0].src += "&autoplay=1";
        $(this).unbind("click");//or some other way to make sure that this only happens once
    });
    $("#playvideo7").click(function() {
        $("#video7")[0].src += "&autoplay=1";
        $(this).unbind("click");//or some other way to make sure that this only happens once
    });
</script>
<!--maps-->
<script>
  $('.collapse').on('shown.bs.collapse', function(){
   $(this).parent().find(".down-icon").removeClass("down-icon").addClass("up-icon");
 }).on('hidden.bs.collapse', function(){
   $(this).parent().find(".up-icon").removeClass("up-icon").addClass("down-icon");
 });
</script>
</body>
</html>