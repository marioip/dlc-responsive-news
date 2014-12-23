<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>

    <!-- Main Content -->

    <div class="large-9 columns" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

					<div class="black-case border-radius box-shadow">
						<?php get_template_part( 'content', 'single' ); ?>
					</div>

			<?php endwhile; ?>

		<?php else : ?>

			<h2><?php _e('No posts.', 'foundation' ); ?></h2>
			<p class="lead"><?php _e('Sorry about this, I couldn\'t seem to find what you were looking for.', 'foundation' ); ?></p>
			
		<?php endif; ?>

		<?php foundation_pagination(); ?>

	</div>

    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<!-- MODAL WINDOW -->

		<div id="share-modal" class="reveal-modal small">
	  		<h5>Share this page on:</h5>
	  		<hr>

	       <!-- facebook -->
	       <div id="facebook-btn" class="share-item">
		    	<h7>Facebook</h7>
	        	<div class="fb-like" data-href="http://www.delacour.ch" data-width="350" data-colorscheme="dark" data-layout="button_count" data-show-faces="true" data-send="true">
	        	</div>
	        </div>

		    <!-- twitter -->

		    <div id="twitter-btn" class="share-item">
		    	<h7>Twitter</h7>
		    </div>

	  		<a class="close-reveal-modal">&#215;</a>
		</div>