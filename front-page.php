<?php get_header(); ?>
<!-- ============MAIN BANER============= -->
<div class="full-width main-baner">
    <div class="main-slider" id="js-main-slider">
		<?php $main_slider = new WP_Query( [
			'post_type'      => 'slider',
			'posts_per_page' => - 1
		] ); ?>

		<?php if ( $main_slider->have_posts() ): ?>
			<?php while ( $main_slider->have_posts() ): ?>
				<?php $main_slider->the_post(); ?>
                <div class="home-img">
                    <?php $slide_bg = kama_thumb_src('w=1920'); ?>
                    <div class="bg-bg" style="background-image:url(<?php echo $slide_bg; ?>)"></div>
                    <h1><?php the_title(); ?></h1>
                </div>

			<?php endwhile; ?>
		<?php else: ?>
		<?php endif; ?>
    </div>
</div>

<div class="our-offers">
    <div class="container">
        <div class="offers__content">
			<?php $offers = carbon_get_theme_option( 'crb_slider' ); ?>
			<?php foreach ( $offers as $offer ): ?>
                <div class="offers__item">
                    <div class="our-offers-block">
						<?php echo $offer['crb_our_offers_svg_icon']; ?>
                        <div class="our-offers__content">
                            <h2><?php echo $offer[ 'crb_our_offers_title' . get_lang() ]; ?></h2>
                            <p><?php echo $offer[ 'crb_our_offers_text' . get_lang() ]; ?></p>
                        </div>
                    </div>
                    <span class="separator separ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/separator.png" alt="separator">
                </span>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</div>

<div class="category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="category-wraper">
                    <h4 class="category__title"><?php echo carbon_get_theme_option( 'crb_categories_title' . get_lang() ); ?></h4>
                    <p class="category__text"><?php echo carbon_get_theme_option( 'crb_categories_text' . get_lang() ); ?></p>
                    <div class="swiper-container category-baner">
                        <div class="swiper-wrapper">
							<?php $category = carbon_get_theme_option( 'crb_categories_slider' ); ?>

							<?php foreach ( $category as $item ): ?>
                                <div class="swiper-slide category-slide">
									<?php echo $item['crb_svg_image']; ?>
                                    <div class="category-text">
                                        <img src="<?php echo $item['crb_img_real']; ?>"
                                             alt="car">
                                        <h4><?php echo $item[ 'crb_title' . get_lang() ]; ?></h4>
<!--                                        <h5 class="slide_cat_t">--><?php //echo $item[ 'crb_cat_name' . get_lang() ]; ?><!--</h5>-->
<!--                                        <p class="slide_cat_t_text">--><?php //echo $item[ 'crb_cat_description' . get_lang() ]; ?><!--</p>-->
                                        <h5 class="slide_subcat"><?php echo $item[ 'crb_sub_cat_name' . get_lang() ]; ?></h5>
                                        <p class="slide_subcat_text"><?php echo $item[ 'crb_sub_cat_description' . get_lang() ]; ?></p>
                                    </div>
                                </div>
							<?php endforeach; ?>
                        </div>
                    </div>
                    <div class="slide-next"><span class="fa fa-chevron-right"></span></div>
                    <div class="slide-prev"><span class="fa fa-chevron-left"></span></div>
                    <div class="category-desc">
                        <div class="image-desc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moped-small.jpg" alt="car"
                                 class="avto">
                        </div>
                        <div class="text-desc">
                            <h5 class="subcat"><?php echo $category[0][ 'crb_sub_cat_name' . get_lang() ]; ?></h5>
                            <p class="subcat_text"><?php echo $category[0][ 'crb_sub_cat_description' . get_lang() ]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-grey-wrap join-us-grey-block">
    <h2 class="section-title"><?php echo carbon_get_theme_option( 'crb_our_services_title' . get_lang() ); ?></h2>
    <div class="container">
        <div class="join-us__content">
			<?php $services = new WP_Query( [
				'category_name'  => 'services',
				'posts_per_page' => - 1
			] ); ?>

			<?php if ( $services->have_posts() ): ?>
				<?php while ( $services->have_posts() ): ?>
					<?php $services->the_post(); ?>
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
    </div>
</div>
<?php get_footer(); ?>
<!--=========================================== FOOTER =============================================-->

<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-md-7 col-md-offset-5 col-sm-12">-->
<!--            <div class="home-contact-form">-->
<!--                <div class="home-contact-form-wrap">-->
<!--                    <h1>--><?php //echo carbon_get_theme_option( 'title' . get_lang() ); ?><!-- <span class="blue-color">--><?php //echo carbon_get_theme_option( 'after_title' . get_lang() ); ?><!--</span></h1>-->
<!--                    <div class="contact-form">-->
<!--                        <div class="form-header">-->
<!--                            <h3>get prices & book online today</h3>-->
<!--                        </div>-->
<!--                        <form action="/">-->
<!--                            <div class="form">-->
<!--                                <input type="text" placeholder="Your Name">-->
<!--                                <input type="email" placeholder="Your Email" required>-->
<!--                                <input type="text" placeholder="Your Phone Number">-->
<!--                                <div class="date-wrap">-->
<!--                                    <input type="text" placeholder="Your Birth Date" class="datepicker">-->
<!--                                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/calendar.png"-->
<!--                                         alt="calendar">-->
<!--                                </div>-->
<!--                                <div class="drop">-->
<!--                                    <b>Select Your Course</b>-->
<!--                                    <a href="#" class="drop-list"><i class="fa fa-caret-down"></i></a>-->
<!--                                    <span class="filter-button">-->
<!--                                                     <a href="">Select Your Course</a>-->
<!--                                                     <a href="">Course A</a>-->
<!--                                                     <a href="">Course B</a>-->
<!--                                                     <a href="">Course C</a>-->
<!--                                                     <a href="">Course D</a>-->
<!--                                                     <a href="">Course E</a>-->
<!--                                                </span>-->
<!--                                </div>-->
<!--                                <input type="checkbox">-->
<!--                                <span class="agree">I agree with the Terms & Conditions.</span>-->
<!--                            </div>-->
<!--                            <div class="send-button">-->
<!--                                <input type="submit" value="Contact us today!">-->
<!--                            </div>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
