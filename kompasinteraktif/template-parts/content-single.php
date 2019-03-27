<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kompasinteraktif
 */

?>


<section id="jumbotron" data-type="background" data-speed="5" style="background: url(<?php the_post_thumbnail_url(); ?>)">
    <div class="jumbotron__title">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
</section>
<div class="container" id="content">
    <div class="row">
        <div class="col-sm-7 col-sm-offset-1">
            <?php the_content(); ?>
            <div class="navigation-box">
                <h2>Menikmati Multimedia Kompas?</h2>
                <p>Baca Juga Multimedia Kompas Lainnya Yang Mungkin Anda Sukai</p>
                <?php
        			
        			$next_post = get_next_post();
        		    $previous_post = get_previous_post();
        		    the_post_navigation( array(
        		        'next_text' => 
        		                    '<div class="nav_img" style="background:url( '. get_the_post_thumbnail_url($next_post->ID, array('300' , '300')) .' )"></div>'  . 
        		                    '<span class="post-date">'. get_the_date() .'</span>' . '<span class="post-title">%title</span>',
        		        'prev_text' => 
        		                    '<div class="nav_img" style="background:url( '. get_the_post_thumbnail_url($previous_post->ID, array('300' , '300')) .' )"></div>'  . 
        		                    '<span class="post-date">'. get_the_date() .'</span>'. '<span class="post-title">%title</span>' ,
        		    ) );
        		 ?>
            </div>
        </div>
        <aside class="col-sm-3 pull-right">
            <div class="information">
                <h4>Oleh:</h4>
                
                
                <?php if( have_rows('team') ): ?>

            	<ul>
            
            	<?php while( have_rows('team') ): the_row(); 
            
            		// vars
            		$nama = get_sub_field('nama');
            		$job_desc = get_sub_field('deskripsi_tugas');
            		$foto = get_sub_field('foto');
            
            		?>
            		
            		<li>
            		    <?php if($foto): ?>
                            <img src="<?php echo $foto['url']; ?>">
                        <?php else: ?>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/default-profile.png">
                        <?php endif; ?>
                        <div class="information__bio">
                            <span class="information__bio--name"><?= $nama ?></span>
                            <span class="information__bio--job"><?= $job_desc ?></span>
                        </div>
                    </li>
            
            	<?php endwhile; ?>
            
            	</ul>
            
            <?php endif; ?>
                <div class="information__date">
                    <i class="fas fa-clock"></i> <time><?php echo get_the_date(); ?></time>
                </div>
                <div class="information__tag">
                    <i class="fas fa-tags"></i> <?php the_tags(''); ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div><!-- #post-<?php the_ID(); ?> -->
