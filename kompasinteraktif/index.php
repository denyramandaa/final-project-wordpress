<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kompasinteraktif
 */

get_header();
?>
	<section id="banner">
        <div class="container clearfix">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Multimedia Kompas</h1>
                </div>
                <div class="col-sm-6">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus orci interdum sodales consequat. Curabitur lacinia sem ac urna pulvinar, non rutrum erat posuere.</span>
                </div>
            </div>
        </div>
    </section>
	<section id="article">
	    <div class="container">
	        <div class="row">
	            <div class="col-sm-12">
	                <span class="article__border"></span>
	            </div>
	        </div>
            <?php
				if ( have_posts() ) :
			?>
	        <div class="row flexbox">
					<?php
						if ( is_home() && ! is_front_page() ) :
					?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
							<?php
						endif;
			
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
			
							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );
			
						endwhile;
					?>	
	         </div>
				
			<?php 
				the_posts_pagination( array(
				    'mid_size' => 2,
				    'prev_text' => __( 'Sebelumnya', 'textdomain' ),
				    'next_text' => __( 'Selanjutnya', 'textdomain' ),
				) );
				
				else :
					get_template_part( 'template-parts/content', 'none' );
			
			endif; ?>
	    </div>
    </section>

<?php
get_footer();
