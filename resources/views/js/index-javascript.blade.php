  <!-- js -->
  <script type="text/javascript" src="{{asset('bootstrap/js/jquery-2.1.4.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
  <!-- //js --> 

  <!-- Banner Slider js script file-->
    <script src="{{asset('bootstrap/js/JiSlider.js')}}"></script>
    <script>
      $(window).load(function () {
        $('#JiSlider').JiSlider({
          color: '#fff',
          start: 1,
          reverse: false
        }).addClass('ff')
      })
    </script>
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);

      (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();
    </script>
  <!-- //Banner Slider js script file-->

  <!-- tabs -->
  <script src="{{asset('bootstrap/js/easy-responsive-tabs.js')}}"></script>
  <script>
  $(document).ready(function () {
  $('#horizontalTab').easyResponsiveTabs({
  type: 'default', //Types: default, vertical, accordion           
  width: 'auto', //auto or any width like 600px
  fit: true,   // 100% fit in a container
  closed: 'accordion', // Start closed if in accordion view
  activate: function(event) { // Callback function if tab is switched
  var $tab = $(this);
  var $info = $('#tabInfo');
  var $name = $('span', $info);
  $name.text($tab.text());
  $info.show();
  }
  });
  $('#verticalTab').easyResponsiveTabs({
  type: 'vertical',
  width: 'auto',
  fit: true
  });
  });
  </script>
  <!--//tabs-->
  
  <!-- for-Testimonials -->
  <!-- required-js-files-->
  <link href="{{asset('bootstrap/css/owl.carousel.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap/js/owl.carousel.js')}}"></script>
      <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
      items : 1,
      lazyLoad : true,
      autoPlay : true,
      navigation : false,
      navigationText :  false,
      pagination : true,
      });
    });
    </script>
  <!--//required-js-files-->
  <!-- //for-Testimonials -->

  <!-- start-smoth-scrolling -->
  <script src="{{asset('bootstrap/js/SmoothScroll.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('bootstrap/js/move-top.js')}}"></script>
  <script type="text/javascript" src="{{asset('bootstrap/js/easing.js')}}"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
      });
    });
  </script>
  <!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });
  </script>
  <!-- //here ends scrolling icon -->
  <!-- start-smoth-scrolling -->
  
<!-- //js-scripts -->