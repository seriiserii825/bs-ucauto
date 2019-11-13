<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bs-ucauto
 */
/**
 * Template Name: Filials
 */
get_header();
?>
<?php
$cities = new WP_Query( [
	'post_type'      => 'city',
	'posts_per_page' => - 1,
	'order'          => 'ASC'
] );
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
                    <div class="bg bg-bg-chrome" style="background-image:url(<?php echo $imageSrc; ?>)"></div>
                </div>
            </div>
            <div class="page-title">
                <h3><?php the_title(); ?></h3>
            </div>
        </div>

        <div class="container">
            <div class="cities-page">
				<?php if ( $cities->have_posts() ): ?>
					<?php while ( $cities->have_posts() ): ?>
						<?php $cities->the_post(); ?>
						<?php
						if ( has_post_thumbnail() ) {
							$img_bg = getThePostThumbSrc( '500', '300' );
						} else {
							$img_bg = kama_thumb_src( 'w=500 &h=300', 361 );
						}
						?>
                    
                        <div class="cities__item" style="background: url('<?php echo $img_bg; ?>')">
                            <h3 class="cities__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
            </div>
        </div>
    </div>
<?php
get_footer();
