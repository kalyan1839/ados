    <footer class="footer">
		<div class="container"> 
			<div class="footer-info">
				<div class="col-md-3 col-sm-3 footer-info-grid links">
					<h4 class="logo">Ados Logo</h4>
					<div class="connect-social">  
						<ul class="list-inline">
							<li><a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a></li>
						</ul>
						</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid address">
					<h4>Site Links</h4>
					<ul class="list-unstyled links">
						<li>
							<a href="#">Kitchen</a>
						</li>
						<li>
							<a href="#">Wardrobes</a>
						</li>
						<li>
							<a href="#">Living Room</a>
						</li>
						<li>
							<a href="#">Blog</a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid address">
					<h4>ADDRESS</h4>
					<address>
						<ul class="list-unstyled">
							<li>720, Wing 8, Arrat Felicita</li>
							<li>Begur, Bangalore</li>
							<li>Telephone :(+91) 9550790276</li>
							<li>Email : <a class="mail" href="mailto:mail@example.com">info@ados.com</a></li>
						</ul>
					</address>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-3 col-sm-3 footer-info-grid email">
					<h4>NEWSLETTER</h4>
					<p>Subscribe to our newsletter and we will inform you about newest projects and promotions. </p>
 
					<form action="#" method="post" class="newsletter">  
						<input class="email" type="email" placeholder="Your email..." required="">
						<input type="submit" class="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div> 
			<div class="copyright text-center">
				<p>© 2017 Ados Home Interior. All Rights Reserved</p>
			</div> 
		</div>
	</footer>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/jqueryslider/dist/jquery.zoomslider.min.js"></script>
    <script src="plugins/lightgallery/dist/js/lightgallery.min.js"></script>
    <script src="plugins/owlcarousel/dist//owl.carousel.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('.owl-carousel').owlCarousel({
              loop:true,
              margin:10,
              autoplay: true,
              nav:true,
              items: 1,
              smartSpeed: 900,
              dots: true,
              navText : ["<img src='images/chevron.svg' />","<img src='images/chevron.svg' />"]
          })
      });
    </script>
    <script src="js/script.js"></script>
  </body>
</html>