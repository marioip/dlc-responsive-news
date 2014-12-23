<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

</div>
<!-- End Page -->

<!-- Footer -->
	<footer>
		<div class="row">

		<div class="large-12 large-centered columns">

			<div class="row normal-style">

				<div class="large-6 columns">
					<h5>Location</h5>
					<h6>Gen&egrave;ve</h6>
					<address class="small-style">
						<span>6, rue Adh&eacute;mar</span> - <span>Fabri 1201</span>
					</address>
					<ul class="small-style">
						<li>
						<abbr title="Phone">p</abbr>.
						<span>+41 22 731 72 80</span>
						</li>
						<li id="email-info">
						<abbr title="Email">e</abbr>.
						<a href="mailto:info@delacour.ch">info@delacour.ch</a>
						</li>
						<li class="contact"><a href="http://delacour.ch/#/contact" class="secondary button">Contact us</a></li>
					</ul>
				</div>
				
				<div class="large-6 columns">
					<h5>Stay Connected</h5>
					
					<div class="row">
						<div class="large-12 columns" id="social-foot">

							<div class="large-6 columns">
								<a href="http://www.facebook.com/deLaCourWatches" target="_blank"><img src="http://www.delacour.ch/images/icons/facebook-medium.png" alt="Join to deLaCour Facebook" />&nbsp; Join us on Facebook</a><br /><br />
								<a href="http://www.youtube.com/delacourwatches/" target="_blank" id="follow-youtube"><img src="http://www.delacour.ch/images/icons/youtube-medium.png" alt="Join to deLaCour Youtube" />&nbsp; Join us Youtube</a>
							</div>

							<div class="large-6 columns">
								<a href="http://twitter.com/#!/delacourwatches/" target="_blank"><img src="http://www.delacour.ch/images/icons/twitter-medium.png" alt="Join to deLaCour Twitter" />&nbsp; Follow us on Twitter</a><br /><br />
								<!-- <a href="#" target="_blank"><img src="http://www.delacour.ch/images/icons/rss-medium.png" alt="RSS FeedBack" />&nbsp; RSS Feeds</a> -->
							</div>

						</div>
						<div class="large-12 columns subscribe-newsletter">
							<form action="http://delacour.us4.list-manage.com/subscribe/post?u=ab9fbd61b8e64a2782864b1b8&amp;id=dccbb54cae" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div class="large-6 columns">
          							<input type="email" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Insert your email - Newsletter" required>
        						</div>
						        <div class="large-6 columns">
						        	<button id="mc-embedded-subscribe" class="secondary button" type="submit" value="Subscribe to newsletter" name="subscribe" ng-click="subscribe()">Subscribe</button>
						        </div>
							</form>
						</div>
					</div>
			</div>
		</div>

		</div>

</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>