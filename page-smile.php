<?php get_header(); ?>

<?php /* Template Name: Smile Gallery */ ?>
    <div class="vertical-padding"></div>
    <div class="text-center dark-green vertical-padding smile-gallery-text">
        <h1>WELCOME TO THE SMILE GALLERY!</h1>
        <h2>A BEAUTIFUL SMILE CHANGES EVERYTHING</h2>
        <div style="margin-bottom:20px;"><a href="patient-info" class="bg-lime-green button">BOOK A VISIT</a></div>
    </div>

    <?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>
    <?php echo do_shortcode('[supsystic-gallery id=1]') ?>
    <div class="vertical-padding"></div>
    <div class="text-center dark-green" style="margin-bottom:25px;">
        <h1>GET A RADIANT SMILE</h1>
        <div><a href="patient-info" class="bg-dark-green button">BOOK A VISIT</a></div>
    </div>

<?php get_footer(); ?>