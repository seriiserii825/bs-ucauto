<?php get_header(); ?>
<div class="full-width main-wrapper">
	<div class="top-title">
		<div class="page-intro-bg">
			<div class="clip">
                <?php
                    $category = get_queried_object();
                    
                    if (carbon_get_term_meta($category->term_id, 'cb_term_image')) {
	                    $imageSrc = carbon_get_term_meta($category->term_id, 'cb_term_image');
                    } else {
	                    $imageSrc = kama_thumb_src( 'w=1920 &h=340', 235 );
                    }
                ?>
				<div class="bg bg-bg-chrome" style="background-image:url(<?php echo $imageSrc; ?>)"></div>
			</div>
		</div>
		<div class="page-title">
			<h3><?php single_cat_title(); ?></h3>
		</div>
	</div>

    <div class="bg-grey-wrap join-us-grey-block">
        <div class="container">
	        <?php if(is_category('gallery_photo')): ?>
                <div class="gallery">
	                <?php if ( have_posts() ): ?>
		                <?php while ( have_posts() ): ?>
			                <?php the_post(); ?>

                            <a href="<?php the_permalink(); ?>" class="gallery__item">
                                <div class="gallery__caption"><?php the_title(); ?></div>
                                <img src="<?php echo getThePostThumbSrc('400', '400'); ?>" alt="">
                            </a>
		                <?php endwhile; ?>
		                <?php wp_reset_postdata(); ?>
	                <?php else: ?>
	                <?php endif; ?>
                 
                </div>
	
	        <?php else: ?>
                <div class="join-us__content">
			        <?php if ( have_posts() ): ?>
				        <?php while ( have_posts() ): ?>
					        <?php the_post(); ?>

                            <div class="block-driver-more">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo carbon_get_the_post_meta( 'cb_services_short_text' . get_lang() ); ?></p>
                                <a href="<?php the_permalink(); ?>"><?php echo carbon_get_theme_option( 'crb_our_services_btn' . get_lang() ); ?></a>
                            </div>
				        <?php endwhile; ?>
				        <?php wp_reset_postdata(); ?>
			        <?php else: ?>
			        <?php endif; ?>
                </div>
	        <?php endif; ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>
