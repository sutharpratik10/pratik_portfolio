		<div id="contact" class="footer-top blue-bg">
			<div class="thm-container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="single-footer-top">
							
						</div><!-- /.single-footer-top -->
					</div><!-- /.col-md-4 -->
					<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="single-footer-top">
						<p><i class="bitmex-icon-envelope"></i><span>Email: </span><a style="color:#fff;" href="mailto:support@ultron.global">support@ultron.global</a></p>
						</div><!-- /.single-footer-top -->
					</div><!-- /.col-md-4 -->
					<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="single-footer-top">
							
						</div><!-- /.single-footer-top -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.thm-container -->
		</div><!-- /.footer-top -->

		<footer class="site-footer blue-bg">
			<div class="thm-container">
				<div class="row masonary-layout">
					<!--<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single-footer-widget">
							<div class="title">
								<h3>About</h3>
							</div>
							<ul class="links-list">
								<li><a href="#">Home</a></li>
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Our Team</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Latest News</a></li>
								<li><a href="#">Free Consultancy</a></li>
							</ul>
						</div>
					</div>-->
					<!--<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single-footer-widget">
							<div class="title">
								<h3>Bitcoin</h3>
							</div>
							<ul class="links-list">
								<li><a href="#">Get Started</a></li>
								<li><a href="#">Wallets</a></li>
								<li><a href="#">Buy & Sell Bitcoins</a></li>
								<li><a href="#">Exchange Market</a></li>
								<li><a href="#">Daily Stats</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="single-footer-widget">
							<div class="title">
								<h3>Legal</h3>
							</div>
							<ul class="links-list">
								<li><a href="#">Guide</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Advertise</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms of Use</a></li>
							</ul>
						</div>
					</div>col-md-3 -->
					<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
						<div class="single-footer-widget">
							<div class="title">
								<h3>Subscribe</h3>
							</div><!-- /.title -->
							<form action="inc/mailchimp/subscribe.php" class="subscribe-form">
								<input type="text" placeholder="Email Address" />
								<button type="submit" class="fa fa-check"></button>
							</form><!-- /.subscribe-form -->
						</div><!-- /.single-footer-widget -->
					</div><!-- /.col-md-3 -->
				</div><!-- /.row -->
			</div><!-- /.thm-container -->
		</footer><!-- /.site-footer -->

		<div class="footer-bottom blue-bg">
			<div class="thm-container clearfix">
				<div class="pull-left copy-text">
					<p>&copy; 2019 utltron.global All copy rights are reserved.</p>
				</div><!-- /.pull-left copy-text -->
				<div class="social pull-right"><!--
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-youtube-play"></a>
					<a href="#" class="fa fa-pinterest"></a>-->
					<a href="https://smallseotools.com/visitor-hit-counter/" target="_blank" title="Visitor Hit Counter">
						<img src="https://smallseotools.com/counterDisplay?code=4f3677af9884be8a3ab9593a74ceaa50&style=0015&pad=9&type=ip&initCount=2234"  title="Visitor Hit Counter" Alt="Visitor Hit Counter" border="0">
					</a>

				</div><!-- /.social -->
			</div><!-- /.thm-container -->
		</div><!-- /.footer-bottom -->


		<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/isotope.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/Chart.min.js"></script>
		<script src="js/chart-config.js"></script>
		<script src="js/custom.js"></script>
		<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/currency.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

		<script>
			const url = "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC,DASH,BCH,XRP,TRX,XMR&tsyms=BTC,USD,EUR&api_key=INSERT-YOUR-API-KEY-HERE";
				const vm = new Vue({
						el: '#app',
						data: {
						results: []
						},
						mounted() {
						axios.get(url).then(response => {
							this.results = response.data
						})
						}
					});
		</script>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
				var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
				s1.async=true;
				s1.src='https://embed.tawk.to/5ca4f0486bba460528011862/default';
				s1.charset='UTF-8';
				s1.setAttribute('crossorigin','*');
				s0.parentNode.insertBefore(s1,s0);
			})();
		</script>
               <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us20.list-manage.com","uuid":"7292e4ab613b60ec7ad6db101","lid":"0036940389","uniqueMethods":true}) })</script>
		<!--End of Tawk.to Script-->
	</body>
</html>