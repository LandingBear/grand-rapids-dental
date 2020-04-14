<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-bar ">
				<div class="big-footer-col footer-col" style="line-height:2.75em;">
					<a href="<?php echo home_url(); ?>">HOME</a>
					<!--<a>SMILE GALLERY</a>-->
					<a href="patient-info">PATIENT FORMS/FAQ</a>
					<a href="https://www.facebook.com/dental.grandrapids"><img style="padding-top:10px; max-width: 30px; margin-left: -10px;" src="<?php bloginfo('template_directory'); ?>/assets/images/Facebook-Icon_Footer.jpg" /></a>
				</div>
				<div class="big-footer-col footer-col"><img class="footer-logo" src="<?php bloginfo('template_directory'); ?>/assets/images/Calder-Icon_Footer.jpg" /></div>
				<div class="mobile-hidden footer-col" style="text-align:center">
					<div style="text-align:left; display:inline-block">
						<b>DOWNTOWN GRAND RAPIDS</b>
						<br>169 Louis Campau Promenade NW, Suite 2A
						<br>Grand Rapids, MI 49503
						<br>616.458.2545
						<br><a href="mailto:drdaytondds@yahoo.com">drdaytondds@yahoo.com</a>
						<div style="height:3px;display:block"></div>
						<b>Open Mon-Thur: 830AM-530PM</b>
					</div>
				</div>
				<div class="mobile-hidden footer-col" style="text-align:center">
					<div style="text-align:left; display:inline-block">
						<b>BURTON OFFICE</b>
						<br>2000 Burton Street Southeast STE B
						<br>Grand Rapids, MI 49506
						<br>616.241.2229
						<br><a href="mailto:drdaytondds@yahoo.com">drdaytondds@yahoo.com</a>
						SE HABLA ESPANOL!
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page --> <?php wp_footer(); ?>
</body>
</html>