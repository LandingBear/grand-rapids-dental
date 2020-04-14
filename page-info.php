<?php get_header(); ?>

<?php /* Template Name: Patient Info */ ?>
	<div class="info-background">
		<div class="dark-green hero-image">
			<h1>YOUR VISIT</h1>
			<p>Let’s speed things up for your first apointment by completing some forms ahead of time.</p>
		</div>
	
    <?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>
	
		<div class="text-center" style="padding-top:6%">
			<h2 class="dark-green">LOCATIONS</h2>
			<p class="light-font">Grand Rapids Dental has two locations in West Michigan to serve you.</p>
			<p class="lime-green" style="font-weight:bold; margin:4px;">Monday-Wednesday: 8:30AM-5:30PM</p>
			<p class="lime-green" style="font-weight:bold">Thursday: 7:00AM-5:30PM</p>
			<div style="margin: 3% auto; width:95%;">
				<div class="map-col">
					<div class="map-sub-col">
						<div style="display:inline-block;text-align:left;">
							<p class="light-font"><span class="dark-green" style="font-weight:bold">DOWNTOWN GRAND RAPIDS</span>
							<br>169 Louis Campau Promenade
							<br>NW, Suite 2A</p>
							<p class="light-font">Grand Rapids, MI 49503
							<br>616.458.2545</p>
							<a class="faded-green" href="mailto:drdaytondds@yahoo.com">drdaytondds@yahoo.com</a>
						</div>
					</div>
					<div class="map-sub-col">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d729.9062938223303!2d-85.67294950078984!3d42.965102657203374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819adc5174fe7a3%3A0xdd9b0536dc214427!2sCampau+Promenade%2C+Grand+Rapids%2C+MI+49503!5e0!3m2!1sen!2sus!4v1535070444184" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="map-col">
					<div class="map-sub-col">
						<div style="display:inline-block;text-align:left;">
							<p class="light-font"><span class="dark-green" style="font-weight:bold">BURTON OFFICE</span>
							<br>2000 Burton Street
							<br>Southeast Ste B</p>
							<p class="light-font">Grand Rapids, MI 49506
							<br>616.241.2229</p>
							<a class="faded-green" href="mailto:drdaytondds@yahoo.com">drdaytondds@yahoo.com</a>
						</div>
					</div>
					<div class="map-sub-col">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2921.4481571988827!2d-85.62086128427649!3d42.92667810712168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819b2a34f0e446b%3A0xbef6f67c49f2a9fb!2s2000+Burton+St+SE+Ste+B%2C+Grand+Rapids%2C+MI+49506!5e0!3m2!1sen!2sus!4v1532043734033" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="mobile-hidden">
				<p class="dark-green" style="font-weight:bold;">WE VALIDATE THE FOLLOWING PARKING:</p>
				<div class="ramp-section">
					<p>Monroe Center <span class="ramp-text">Ramp</span></p>
					<p>Ottawa Fulton <span class="ramp-text">Ramp</span></p>
					<p>Louis Campau <span class="ramp-text">Ramp</span></p>
					<p>Amway Grand Plaza <span class="ramp-text">Ramp</span></p>
					<p>JW Marriott <span class="ramp-text">Ramp</span></p>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>