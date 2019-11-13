<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bs-ucauto
 */

get_header();

?>
<div class="full-width main-wrapper">
    <div class="top-title">
        <div class="page-intro-bg">
			<?php
			if ( has_post_thumbnail() ) {
				$imageSrc = getThePostThumbSrc( '1920', '340' );
			} else {
				$imageSrc = kama_thumb_src( 'w=1920 &h=340', 235 );
			}
			?>
            <div class="clip">
                <div class="bg bg-bg-chrome"
                     style="background-image:url(<?php echo $imageSrc; ?>)"></div>
            </div>
        </div>
        <div class="page-title">
            <h3><?php the_title(); ?></h3>
        </div>
    </div>

    <div class="blog blog-post">
        <div class="container">
            <div class="single-content">
				<?php if ( have_posts() ): ?>
				<?php the_post(); ?>
				<?php the_content(); ?>
				
				<?php $main_table = carbon_get_the_post_meta( 'crb_main_banner' ); ?>
				
				<?php if ( $main_table ): ?>
                <div class="main-table" style="overflow-x:auto;" id="js-main-table">
                    <div class="main-table__table">
						<?php foreach ( $main_table as $table_item ): ?>
                            <div class="main-table__item">
                                <div class="main-table__img">
                                    <a href="<?php echo $table_item['crb_image']; ?>">
                                        <img src="<?php echo $table_item['crb_image']; ?>" alt="">
                                    </a>
                                </div>
                                <div class="main-table__title">
                                    <h3 class="main-table__title"><?php echo $table_item[ 'title' . get_lang() ]; ?></h3>
                                    <p><?php echo $table_item[ 'text' . get_lang() ]; ?></p>
                                </div>
                            </div>
						<?php endforeach; ?>
                    </div>
					<?php endif; ?>
					
					
					<?php require_once __DIR__ . '/template-parts/media-gallery.php'; ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
	
	
	<?php
	get_footer();
	?>
