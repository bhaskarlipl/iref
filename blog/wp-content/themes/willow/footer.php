			
			<?php if ( willow_option( 'enable_footer_widgets' ) ) : ?>
				<footer id="footer" class="footer-section section footer-group-section custom-menu" role="contentinfo">
					<div class="container">
						<div class="row">
							<?php for ( $i = 1; $i <= willow_option( 'footer_number_of_columns' );  $i++ ) : ?>
								<div class="col-md-4">
									<?php if ( is_active_sidebar( 'footer-sidebar-' . $i ) ) {
										dynamic_sidebar( 'footer-sidebar-' . $i );
									} ?>
								</div>
							<?php endfor; ?>
						</div>
					</div>
				</footer>
			<?php endif; ?>

			<?php /* <footer id="bottom-logo" class="bottom-logo-section section footer-group-section">
				<div class="container">
					<div class="text-center">
						<a class="footer-logo site-logo" href="<?php echo home_url(); ?>">
							<?php if  ( willow_option( 'footer_logo' ) ) : ?>
								<img src="<?php echo willow_option( 'footer_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
							<?php else : ?>
								<span><?php bloginfo( 'name' ); ?></span>
							<?php endif ?>
						</a>
					</div>
				</div>
			</footer> */?>

			<footer id="copyright" class="copyright-section section footer-group-section custom-menu">
				<div class="container">
					<div class="footer-top-menu clearfix">
						<div id="bottom_f">
      <div id="bottom_cont_f">
        <div class="div_footer_top_section">
          <div class="footer_top_left">
            
              <a href="https://yairef.in"> <img alt="IREF® Indian Real Estate Forum - Properties in India Discussion" src="http://codingserver.com/iref/wp-content/uploads/2015/27-06/iref_footer_logo.png" title="IREF® Indian Real Estate Forum - Properties in India Discussion"></a> 
          </div>
          <div class="footer_top_right"> <a target="_blank" href="https://twitter.com/iref_forum"><img title="IREF Twitter" alt="IREF Twitter" src="http://codingserver.com/iref/wp-content/uploads/2015/27-06/iref_twitter.png"></a> <a target="_blank" href="https://www.facebook.com/IREF.Forum"><img title="IREF Facebook" alt="IREF Facebook" src="http://codingserver.com/iref/wp-content/uploads/2015/27-06/iref_facebook.png"></a> <a target="_blank" href="https://plus.google.com/+Indianrealestateforum/posts"><img title="IREF Google+" alt="IREF Google+" src="http://codingserver.com/iref/wp-content/uploads/2015/27-06/iref_google_plus.png"></a> </div>
        </div>
        <div class="bottom1_cont">
          <div class="bottom1_cont1">
            <div class="bottom1_cont1_a">
              <ul class="navf">
                <li><a class="nav" href="https://yairef.in/f-real-estate-group-buying-144.html/"><span class="bottom1_color">•</span> Real Estate Group Buying</a></li>
                <li><a class="nav" href="https://yairef.in/f-indian-property-laws-39.html/"><span class="bottom1_color">•</span> Indian Property Laws</a></li>
                <li><a class="nav" href="https://yairef.in/f-home-loans-india-36.html/"><span class="bottom1_color">•</span> Homeloans in India </a></li>
                <li><a class="nav" href="https://yairef.in/f-nri-real-estate-32.html/"><span class="bottom1_color">•</span> NRI Real Estate</a></li>
                <li><a class="nav" href="https://yairef.in/f-vastu-home-improvement-235.html/"><span class="bottom1_color">•</span> Vastu &amp; Home Improvement</a></li>
                <li><a class="nav" href="https://yairef.in/f-off-topic-forum-59.html/"><span class="bottom1_color">•</span> Off Topic Discussion</a></li>
              </ul>
            </div>
            <div class="bottom1_cont1_a">
              <ul class="navf">
                <li><a class="nav" href="https://yairef.in/f-real-estate-delhi-19.html/"><span class="bottom1_color">•</span> Property in Delhi</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-gurgaon-28.html/"><span class="bottom1_color">•</span> Property in Gurgaon</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-noida-83.html/"><span class="bottom1_color">•</span> Property in Noida</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-greater-noida-84.html/"><span class="bottom1_color">•</span> Property in Greater Noida</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-ghaziabad-119.html/"><span class="bottom1_color">•</span> Property in Ghaziabad</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-faridabad-95.html/"><span class="bottom1_color">•</span> Property in Faridabad</a></li>
              </ul>
            </div>
          </div>
          <div class="bottom1_cont1">
            <div class="bottom1_cont1_a">
              <ul class="navf">
                <li><a class="nav" href="https://yairef.in/f-real-estate-pune-25.html/"><span class="bottom1_color">•</span> Property in Pune</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-bangalore-21.html/"><span class="bottom1_color">•</span> Property in Bangalore</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-chennai-24.html/"><span class="bottom1_color">•</span> Property in Chennai</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-ahmedabad-29.html/"><span class="bottom1_color">•</span> Property in Ahmedabad</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-kolkata-27.html/"><span class="bottom1_color">•</span> Property in Kolkata</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-hyderabad-23.html/"><span class="bottom1_color">•</span> Property in Hyderabad</a></li>
              </ul>
            </div>
            <div class="bottom1_cont1_a">
              <ul class="navf">
                <li><a class="nav" href="https://yairef.in/f-real-estate-chandigarh-86.html/"><span class="bottom1_color">•</span> Property in Chandigarh</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-lucknow-128.html/"><span class="bottom1_color">•</span> Property in Lucknow</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-jaipur-88.html/"><span class="bottom1_color">•</span> Property in Jaipur</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-nagpur-92.html/"><span class="bottom1_color">•</span> Property in Nagpur</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-vadodara-233.html/"><span class="bottom1_color">•</span> Property in Vadodra</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-surat-232.html/"><span class="bottom1_color">•</span> Property in Surat</a></li>
              </ul>
            </div>
          </div>
          <div class="bottom1_cont1">
            <div class="bottom1_cont1_a">
              <ul class="navf">
                <li><a class="nav" href="https://yairef.in/f-real-estate-indore-122.html/"><span class="bottom1_color">•</span> Property in Indore</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-goa-105.html/"><span class="bottom1_color">•</span> Property in Goa</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-kochi-249.html/"><span class="bottom1_color">•</span> Property in Kochi</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-kerala-231.html/"><span class="bottom1_color">•</span> Property in Kerela</a></li>
                <li><a class="nav" href="https://yairef.in/f-rea-estate-coimbatore-230.html/"><span class="bottom1_color">•</span> Property in Coimbatore</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-bhubaneswar-91.html/"><span class="bottom1_color">•</span> Property in Bhubaneshwar</a></li>
              </ul>
            </div>
            <div class="bottom1_cont1_a">
              <ul class="navf">
                <li><a class="nav" href="https://yairef.in/f-real-estate-mysore-250.html"><span class="bottom1_color">•</span> Property in Mysore</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-mangalore-251.html"><span class="bottom1_color">•</span> Property in Mangalore</a></li>
                <li><a class="nav" href="https://yairef.in/f-more-indian-cities-120.html/"><span class="bottom1_color">•</span> Properties in other cities</a></li>
                <li><a class="nav" href="https://yairef.in/f-real-estate-developers-india-65.html/"><span class="bottom1_color">•</span> Real Estate Developers</a></li>
                <li><a class="nav" href="https://yairef.in"><span class="bottom1_color">•</span> Real Estate India</a></li>
                <li><a class="nav" href="https://yairef.in"><span class="bottom1_color">•</span> Property in India</a></li>
              </ul>
            </div>
          </div>
          <div class="bottom1_cont1">
            <div class="bottom1_cont1_a">
              <ul class="navf">
                <li><a class="nav" href="https://yairef.in/f-announcements-61.html/"><span class="bottom1_color">•</span> Announcements</a></li>
                <li><a class="nav" href="https://yairef.in/about_iref.php"><span class="bottom1_color">•</span> About IREF</a></li>
                <li><a class="nav" href="https://yairef.in/faq.php"><span class="bottom1_color">•</span> FAQs</a></li>
                <li><a class="nav" href="https://yairef.in/f-fun-promotions-170.html/"><span class="bottom1_color">•</span> Promotions</a></li>
                <li><a rel="nofollow" class="nav" href="https://yairef.in/misc.php?do=form&amp;fid=1"><span class="bottom1_color">•</span> Advertise</a></li>
                <li><a class="nav" href="https://yairef.in/f-questions-suggestions-62.html/"><span class="bottom1_color">•</span> Feedback</a></li>
                <li><a class="nav" href="https://yairef.in/sendmessage.php"><span class="bottom1_color">•</span> Contact Us</a></li>
                <li><a class="nav" href="http://codingserver.com/iref/our-team/"><span class="bottom1_color">•</span> Our Team</a></li>
                <li><a class="nav" href="http://codingserver.com/iref/join-us-3/"><span class="bottom1_color">•</span> Join Us</a></li>
              </ul>
            </div>
            <div class="iref_app_block">
              <p>Download our app now !</p>
              <a target="_blank" href="https://play.google.com/store/apps/details?id=com.tapatalk.indianrealestateforumcom&amp;hl=en" class="pull-left w100"> <img src="http://codingserver.com/iref/wp-content/uploads/2015/27-06/iref_android_app_icon.png"></a> <a target="_blank" href="https://itunes.apple.com/WebObjects/MZStore.woa/wa/viewSoftware?id=992143562&amp;mt=8" class="mt10 pull-left w100"> <img src="http://codingserver.com/iref/wp-content/uploads/2015/27-06/i_store_app_icon.png"></a> </div>
          </div>
        </div>
        <div class="bottom2_cont">
          <div class="footer_copyright">
            <div class="bottom_left"> <a href="https://yairef.in/forum-rules-read-before-posting/t-iref%AE-rules-please-read-6437.html">Rules</a>, <a href="https://yairef.in/terms_and_conditions.php">Terms of Use</a>, <a href="https://yairef.in/copyright_policy.php">Copyright Policy</a> </div>
            <div class="bottom_right"> Copyright &reg; 2015 indianrealestateforum.com | All Rights Reserved </div>
          </div>
        </div>
      </div>
    </div>


					</div>
			</footer>

		</div>

		<div id="popup-document" class="popup-document">
			<div class="markup hidden">
				<div class="mfp-iframe-scaler">
					<iframe src="" class="mfp-iframe" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<!-- BEGIN CUSTOM FOOTER SCRIPTS -->
		<?php echo willow_kses( willow_option( 'foot_script' ) ); ?>
		<!-- END CUSTOM FOOTER SCRIPTS -->

		<?php wp_footer(); ?>
		



	</body>

</html>