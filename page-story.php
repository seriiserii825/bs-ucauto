<?php
/**
 * Template Name: History
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
                    <div class="bg bg-bg-chrome" style="background-image:url(<?php echo $imageSrc; ?>)"></div>
                </div>
            </div>
            <div class="page-title">
                <h3><?php the_title(); ?></h3>
            </div>
        </div>
        
        <div class="history-page">
            <?php if(have_posts()): ?>
                    <?php the_post(); ?>
                    <?php the_content(); ?>
                <?php else: ?>
            <?php endif; ?>
            
        </div>

<!--        <section class="ac-container">-->
<!--            --><?php //$story = carbon_get_theme_option('crb_history'); ?>
<!--            --><?php //$i = 1; foreach($story as $item): ?>
<!--                <div>-->
<!--                    <input id="ac---><?php //echo $i; ?><!--" name="accordion---><?php //echo $i; ?><!--" type="checkbox" />-->
<!--                    <label for="ac---><?php //echo $i; ?><!--">--><?php //echo $item['title'.get_lang()]; ?><!--</label>-->
<!--                    <article class="ac-small">-->
<!--                        <p>--><?php //echo wpautop($item['text'.get_lang()]); ?><!--</p>-->
<!--                    </article>-->
<!--                </div>-->
<!--            --><?php //$i++; endforeach; ?>
<!--        </section>-->
    </div>
<?php
get_footer();
