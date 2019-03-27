<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kompasinteraktif
 */

?>



<article class="col-md-4 col-sm-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="article">
    	<?php if(has_post_thumbnail()) {?>
    	<div class="article__image" style="background:url('<?php the_post_thumbnail_url(); ?>')"></div>
	    <?php } ?>
        <div class="article__detail">
            <div class="article__label">
                <?php 
                $cate = get_the_category(); 
                if($cate[0]->slug == 'tuturvisual') :
                ?>
                    <i class="fab fa-battle-net"></i> <a href="<?php echo esc_url( get_category_link( $cate[0]->term_id ) ); ?>"><?php echo $cate[0]->name; ?></a>
                <?php 
                else:
                ?>
                    <i class="fab fa-fort-awesome-alt"></i> <a href="<?php echo esc_url( get_category_link( $cate[0]->term_id ) ); ?>"><?php echo $cate[0]->name; ?></a>
                <?php endif; ?>
            </div>
            <div class="article__title">
            	<?php
					if ( is_singular() ) :
						the_title( '<h3 class="entry-title">', '</h3>' );
					else :
						the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
					endif;
				?>
            </div>
            <div class="article__excerpt">
                <p><?php echo get_excerpt(250); ?></p>
            </div>
            <div class="article__tag">
                <i class="fas fa-tags"></i> <?php the_tags(''); ?>
            </div>
            <div class="article__date">
                <i class="fas fa-clock"></i> <time><?php echo get_the_date(); ?></time>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
