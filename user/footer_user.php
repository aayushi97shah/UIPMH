
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/retina-1.1.0.js"></script>
    <script src="js/custom.js"></script>

    
    <script src="js/owl.carousel.min.js"></script>
    <script>
        (function($) {
          "use strict";
    
            $("#owl-testimonial").owlCarousel({
                items : 1,
                lazyLoad : true,
                navigation : false,
                pagination : true,
                autoPlay: false
            });
            $("#owl-blog").owlCarousel({
                items : 2,
                lazyLoad : true,
                navigation : true,
                pagination : false,
                autoPlay: false
            });
        })(jQuery);
    </script>

    <script src="js/jquery.flexslider.js"></script>
    <script>
        (function($) {
          "use strict";
        $(window).load(function() {
            $('#aboutslider').flexslider({
                animation: "fade",
                controlNav: true,
                animationLoop: false,
                slideshow: true,
                sync: "#carousel"
            });
        });
        })(jQuery);
    </script>  

    <script src="js/jquery.fitvids.js"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
              $(document).ready(function(){
                // Target your .container, .wrapper, .post, etc.
                $("body").fitVids();
              });
        })(jQuery);
    </script>
    
</body>
</html>