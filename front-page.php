<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
<?php 
echo do_shortcode('[smartslider3 slider=2]');
?>
	<main id="main" class="site-main" role="main">
		<div class="lander-buttons vertical-padding">
			<a href="#office-locations"><div class="bg-faded-green to-dark-green"><img src="<?php bloginfo('template_directory'); ?>/assets/images/Schedule-Appointment-Icon.png" /><br>OFFICE LOCATIONS</div></a><!––
			--><a href="patient-info" target="_blank"><div class="bg-dark-green to-faded-green"><img src="<?php bloginfo('template_directory'); ?>/assets/images/Fill-out-forms-Icon.png" /><br>FILL OUT PATIENT FORMS</div></a>
		</div>
		<div class="text-center vertical-padding max-635" id="about">
			<h2  class="dark-green">FLAWLESS TEETH SINCE 1987</h2>
			<p class="light-font">Welcome to our office. There is nothing more beautiful than a healthy smile. That's why the team at our dental practice will do everything they can to ensure your teeth are their healthiest, and that they stay that way.<br><br>Our team of experts relies on the most modern technology as well as on friendly service to offer you the best and most comprehensive treatment.<br><br>For a lifetime of healthy teeth, we offer a wide range of dental services.</p>
		</div>
		<div class="text-center vertical-padding" style="max-width:1500px; margin:auto;">
			<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src="https://www.youtube.com/embed/gyrLVbBTQ2w?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
			<div style="margin:15px;"><a target="_blank" href="spanish-video" target="_blank" class="bg-lime-green button" style="text-transform:uppercase;">ver video en español</a></div>
		</div>
		<div class="text-center vertical-padding mobile-hidden" id="team">
			<h2 class="dark-green">MEET OUR TEAM</h2>
			<div class="bg-dark-green text-center">
					<div class="column image-col">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/dayton.png" />
					</div>
					<div class="column" style="padding-bottom:5%;">
						<h3 class="lime-green">DR. RICK DAYTON, DDS</h3>
						<p class="white scroller light-font">Dr Dayton's practice includes general, cosmetic and implant dentistry. In the over 25 years of practice he has always been guided by one philosophy... "Personal Care Committed to Excellence". Our belief that everyone is unique requiring personal care related to their individual needs and health goals has been at the core of our philosophy. Supporting this ideal Dr Dayton has developed a practice that provides a spectrum of dental services that allows everyone to collaborate in a treatment plan that meets their personal care goals. Always focused on providing care in a comfortable, caring professional environment at the highest level of quality for these services.<br><br>A graduate of University of Southern California Dental School, Dr Dayton is committed to improvement through continuing education. He has participated in thousands of hours of post graduated training to provide state-of-the-art care to improve the patient experience. Dr Dayton has used this experience to benefit the community through participation in Adult Dental Services and Donated Dental Services, programs to that ensure access to care for all community members.<br><br>A native of the state of Wyoming, after graduation from dental school Dr Dayton adopted Grand Rapids as home. Since relocating to Grand Rapids he has married his wife, Margy, and has raised five children.<br><br><b>Advanced Continuing Education:</b><br><br>
							The Dawson Academy— The Concept of Complete Dentistry<br><br>
							Las Vegas Institute for Cosmetic Dentistry Graduate<br><br>
							Misch Institute Dental Implantology<br><br>
							Advance Implant Education— Live Surgery <br><br>
							IDEA— Immediate Placement and Restoration of Implants<br><br>
							The Schuster Center— Dental Practice Management</p>
					</div>
					<div class="column" style="padding-bottom:5%;">
						<h3 class="lime-green">Dr. Michelle Kuznia, DDS</h3>
						<p class="white scroller light-font">Dr. Michelle Kuznia graduated from the University of Michigan with a Bachelor of Science degree in Linguistics and Biochemistry. GO BLUE! Throughout her undergraduate career she helped plan, fundraise, and travel to Central America for several medical and dental mission trips. It was through her first mission abroad, working with patients and doctors from across the world, that she realized her passion to help others attain their best selves through healthy smiles. She went on to obtain her Doctorate of Dental Surgery from the University of Detroit Mercy where she stayed intricately involved in organized dentistry serving as the American Dental Association Vice President UDM Chapter. She was awarded the U.S. Army Health Professions Scholarship and served her country alongside Soldiers from all branches and countries at the U.S. Army Dental Clinic Command at Fort Rucker, Alabama. She continues to serve her country in the U.S. Army Reserve. She recently moved back to the mitten to be closer to family and friends.<br><br>
							Dr. Kuznia values creating a safe, healthy, comfortable environment for patients of all ages. She places emphasis on teaching preventative, responsible oral health as it contributes to overall well being. She advocates for continued education and community service.<br><br>
							<b>Dr. Kuznia’s professional organization affiliation includes:</b><br>
							- American Dental Association<br>
							- Michigan Dental Association<br>
							- Academy of General Dentistry<br>
							- Western Michigan Dental Society<br><br>
							Outside of the office, you can find Dr. Kuznia running and biking in the great outdoors, spending time with family and friends, or teaching her rescue-pup, Honey, how to swim.</p>
					</div>
					<div class="column image-col">
						<img src="<?php bloginfo('template_directory'); ?>/assets/images/kuznia.png" />
					</div>
			</div>
		</div>
		<div class="text-center vertical-padding max-750">
			<h2 class="dark-green">WHY US?</h2>
			<p class="light-font">Our team is focused on your comfort. We know that visiting the dentist can seem like a stressful errand and we seek to alleviate that feeling in our patients. That's why we have two easy-access locations in Grand Rapids, staffed with calm and friendly employees.</p>
			<div class="grid">
				<div class="pic-container"><div class="overlay"><div class="dark-green" style="font-size:16px; font-weight:400">Amy</div>Amy is a Registered Dental Hygienist. Amy graduated from Ferris State University in 1986 and has been actively practicing for 32 years! In addition to her work in local dental offices she also held an instructor position at Ferris State for Dental Hygiene Students. Amy and her husband, Jeff, were married this past December. Amy is the proud mom of two children and a stepdaughter. Amy likes traveling, playing golf, spending time with family and friends, renovating her home, going to concerts, and finding amazing bargains while shopping.</div><img src="<?php bloginfo('template_directory'); ?>/assets/images/amy.jpg" /></div>
				<div class="pic-container"><div class="overlay"><div class="dark-green" style="font-size:16px; font-weight:400">Deb</div>Deb started in dentistry in 1977 and has been our Business Administrator since 1994. Deb enjoys fishing, boating, sitting on the beach, and is a diehard Detroit Lions fan. Deb especially loves spending time with her husband, Dan, and their fur babies, Bella and Pearl.</div><img src="<?php bloginfo('template_directory'); ?>/assets/images/deb.jpg" /></div>
				<div class="pic-container"><div class="overlay"><div class="dark-green" style="font-size:16px; font-weight:400">Irma</div>Irma is a Dental Receptionist and has been in dentistry since 2006. Irma is currently working on obtaining her Bachelors in Business Administration. Irma loves spending time with her kids, spending time at the beach and reading. Irma is bilingual in English and Spanish and interpreting is something she really enjoys as a part of her job.</div><img src="<?php bloginfo('template_directory'); ?>/assets/images/irma.jpg" /></div>
				<div class="pic-container"><div class="overlay"><div class="dark-green" style="font-size:16px; font-weight:400">Julie</div>Julie has lived in Grand Rapids her entire life. Julie graduated from South Christian High School and then GRCC in Dental Hygiene. She as been doing hygiene for 20 years and still loves it! Julie loves camping, stamping cards, hanging out with her super cool nephew, and going on her husband’s surprise adventures.</div><img src="<?php bloginfo('template_directory'); ?>/assets/images/julie.jpg" /></div>
				<div class="pic-container"><div class="overlay"><div class="dark-green" style="font-size:16px; font-weight:400">Kerri</div>Kerri is a Dental Assistant and has been with Dr. Dayton for 26 years. Kerri enjoys spending time with her husband and 2 sons. Kerri enjoys landscaping, working on her home, and traveling.</div><img src="<?php bloginfo('template_directory'); ?>/assets/images/kerri.jpg" /></div>
				<div class="pic-container"><div class="overlay"><div class="dark-green" style="font-size:16px; font-weight:400">Muriel</div>Muriel is a Registered Dental Hygienist. She graduated from Ferris State University in 2014 and joined our practice in 2015. Muriel enjoys traveling, playing and watching various sports, kayaking and spending time with her 3 dogs, friends, and family. Muriel is bilingual in English/Spanish.</div><img src="<?php bloginfo('template_directory'); ?>/assets/images/muriel.jpg" /></div>
			</div>
		</div>
		<div class="text-center vertical-padding mobile-hidden" style="max-width:1100px; margin:auto;" id="services">
			<h2 class="dark-green" style="margin-bottom:5px;">OUR SERVICES</h2>
			<p class="lime-green">(HOVER FOR DETAILS)</p>
			<div>
				<div class="button-container"><div class="service-button">DIAGONOSTIC<br>SERVICES</div><div style="margin-left:0px; width:100%" class="serv-dropdown"><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Digital Radiographic Exams</span><br>All necessary x-rays taken with digital processing for radiation reduction including Panorex and 3D imaging using Cone Beam Technology.
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Oral Cancer Screening</span><br>Provides early detection of possible problems related to cancer
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Periodontal Screening</span><br>Providing early diagnosis and treatment of Periodontal Disease
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Oral Health Evaluation</span><br>Diagnosis for any problems associated with problems related to your teeth.
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">TMJ Evaluation</span><br>Diagnosis of the overall health and function of the joint
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Sleep Apnea Evaluation</span>
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Occlusal Evaluation</span><br>Diagnosis of the bite relationship and function</div></div><!––
			 --><div class="button-container"><div class="service-button">SOFT TISSUE<br>MANAGEMENT</div><div style="" class="serv-dropdown"><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Dental Hygiene Cleanings</span><br>Removal of plaque, bacteria and calculus deposits responsible for periodontal disease
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Root Plane and Scalings</span><br>Ddvanced cleanings related to advance problems of the gum and bone
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Laser Surgeries</span><br>Minor surgeries related to soft tissue problems</div></div><!––
			 --><div class="button-container"><div class="service-button">DENTAL<br>TREATMENTS</div><div style="" class="serv-dropdown"><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Esthetic Fillings</span><br>Tooth colored bonded fillings
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Crowns and Bridges</span><br>Fixed non-removable treatments to repair or replace broken or missing teeth
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Partial and Full Dentures</span><br>Removable appliances to replace multiple missing teeth
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Root Canals (Endodontics)</span><br>Treatment involving the nerves of teeth related to abcesses
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Oral Surgery</span><br>Removal of non-restorable teeth and wisdom teeth
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Teeth whitening</span><br>Brightens smile by removing stain and discoloration from natural teeth</div></div><!––
			 --><div class="button-container"><div class="service-button" style="border-right-style:none">ADVANCED DENTAL SERVICES</div><div style="" class="serv-dropdown"><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Cosmetic Smile Makeovers</span><br>Restoring or changing teeth to a more ideal youthful appearance
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Implants</span><br>Placement of implants to support replacement of missing teeth with crowns, bridges partial or full dentures
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Invisalign Braces</span><br>Clear braces used to straighten crooked misaligned teeth for better function and appearance
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">TMJ Therapy</span><br>Treatment of the joint problems to reduce pain, dysfunction and headaches
				<br><br><span class="dark-green" style="font-weight:bold; text-transform:uppercase;">Sleep Apnea</span><br>Treatment to improve sleep disorders</div></div>
			</div>
		</div>
		<div class="text-center max-750" style="max-width:1100px;" id="reviews">
			<h2 class="dark-green">WHAT OUR PATIENTS SAY</h2>
			<?php echo do_shortcode('[testimonial_view id="1"]'); ?>

			<div style="text-align:center;padding-top:10px;">
				<div style="margin-bottom:20px;"><a href="submit-a-review/" class="bg-lime-green button">SUBMIT A REVIEW</a></div>
			</div>
		</div>
		<div class="divider-line"></div>

		<div>
			<?php // Show the selected frontpage content.
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/page/content', 'page' );
				endwhile;
			else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
				get_template_part( 'template-parts/post/content', 'none' );
			endif; ?>
		</div>

		<div class="text-center" id="locations">
			<a id="office-locations"></a>
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

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>