
  </div> <!-- main row end -->
</div>  <!-- main container end -->

<footer class="p-3 bg-dark text-light">
  <h6 class="text-center">&copy; Copyright 2020. All right reserved.</h6>
</footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.UserProfile').click(function(){
          $('.profileBlock').toggle(500);
        })
      })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel();
        });
    </script>
    <script type="text/javascript">
    var owl = $('.owl-carousel');
      owl.owlCarousel({
          items:1,
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:6000,
          autoplayHoverPause:true
      });
      $('.play').on('click',function(){
          owl.trigger('play.owl.autoplay',[1000])
      })
      $('.stop').on('click',function(){
          owl.trigger('stop.owl.autoplay')
      })
    </script>
  </body>
</html>