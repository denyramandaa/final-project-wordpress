<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kompasinteraktif
 */

get_header();
?>


	<?php if ( have_posts() ) : ?>
		<section id="archive">
	        <div class="archive__title">
	            <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
	        </div>
	    </section>
		<div class="container" id="archive-content">	
			<div class="row" id="primary">
				<main id="content" class="col-sm-8 flexbox" role="main">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
		
						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'archive' );
		
					endwhile;
				?>
		
				</main><!-- #main -->
				<aside class="col-sm-4">
					<?php get_sidebar(); ?>
				</aside>
			</div>
		</div>
	
	<?php 	
		the_posts_pagination( array(
		    'mid_size' => 2,
		    'prev_text' => __( 'Sebelumnya', 'textdomain' ),
		    'next_text' => __( 'Selanjutnya', 'textdomain' ),
		) );
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
	?>

<?php
get_footer();


