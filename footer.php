<footer>
    <div class="cities">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="state">
                        <?php
                            $cities = new WP_Query([
                                'post_type' => 'city',
                                'posts_per_page' => -1,
                                'order' => 'ASC'
                            ]);
                        ?>
                        
                        <h3><?php echo carbon_get_theme_option( 'crb_cities_title' . get_lang() ); ?></h3>
                        <div class="state-list">
                            <ul class="menu-cities">
                                <?php if($cities->have_posts()): ?>
                                    <?php while($cities->have_posts()): ?>
                                        <?php $cities->the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                    <?php else: ?>
                                <?php endif; ?>
                            </ul>
<!--							--><?php //wp_nav_menu( [
//								'theme_location'  => 'menu-cities',
//								'menu'            => '',
//								'container'       => '',
//								'container_class' => '',
//								'container_id'    => '',
//								'menu_class'      => '',
//								'menu_id'         => '',
//								'echo'            => true,
//								'fallback_cb'     => 'wp_page_menu',
//								'before'          => '',
//								'after'           => '',
//								'link_before'     => '',
//								'link_after'      => '',
//								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//								'depth'           => 0,
//								'walker'          => '',
//							] ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-link">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="about-footer-link">
                        <h6 class="footer__title"><?php echo carbon_get_theme_option('crb_footer_menu_title'.get_lang()) ?></h6>
	                    <?php wp_nav_menu( [
		                    'theme_location'  => 'menu-top',
		                    'menu'            => '',
		                    'container'       => '',
		                    'container_class' => '',
		                    'container_id'    => '',
		                    'menu_class'      => 'footer-menu',
		                    'menu_id'         => '',
		                    'echo'            => true,
		                    'fallback_cb'     => 'wp_page_menu',
		                    'before'          => '',
		                    'after'           => '',
		                    'link_before'     => '',
		                    'link_after'      => '',
		                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		                    'depth'           => 0,
		                    'walker'          => '',
	                    ] ); ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4 col-xs-12">
                    <div class="useful-footer-link">
                        <h6 class="footer__title"><?php echo carbon_get_theme_option('crb_footer_map_title'.get_lang()); ?></h6>
                        <div class="map">
	                        <?php if(get_lang() === '_ro'): ?>
                                <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.0141959&long=28.84067586&address=str.Ismail 19, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău str.Ismail 19&showZoom=true&showStreetView=true&showMapType=true"></iframe>
	                        <?php elseif(get_lang() === '_ru'): ?>
                                <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.2967.0/node_modules/wix-santa/static/external/googleMap.html?language=ru&amp;lat=47.04084899999999&amp;long=28.891227999999956&amp;address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&amp;addressInfo=Р. Молдова, мун. Кишинев, блв. Мирча чел Бэтрын 8/1&amp;showZoom=true&amp;showStreetView=true&amp;showMapType=true"></iframe>
	                        <?php else: ?>
                                <iframe width="100%" height="300" frameborder="0" allowfullscreen="" scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/wix-bolt/1.3069.0/node_modules/wix-santa/static/external/googleMap.html?language=en&lat=47.04084899999999&long=28.891227999999956&address=Bulevardul Mircea cel Bătrîn 8/1, Chișinău, Moldova&addressInfo=R. Moldova, mun.Chişinău bd.Mircea cel Bătrîn 8/1&showZoom=true&showStreetView=true&showMapType=true"></iframe>
	                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="adress-footer-link">
                        <?php
                            $phone = carbon_get_theme_option('crb_phone_1');
                            $mail = carbon_get_theme_option('crb_mail');
                            $address = carbon_get_theme_option('crb_address'.get_lang());
                        ?>

                        <h6 class="footer__title"><?php echo carbon_get_theme_option('crb_footer_contacts_title'.get_lang()); ?></h6>
                        <ul class="adress-data">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_icon_1.png" alt="icon"><a href="tel:<?php echo clear_phone($phone); ?>"><?php echo $phone; ?></a></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_icon_2.png" alt="icon"><a href="mailto:<?php echo $mail; ?>" class="footer-mail"><?php echo $mail; ?></a></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_icon_3.png" alt="icon"><?php echo $address; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <span>Copyright 2019 &copy; UCAUTO</span>
                        <div class="footer-follow">
                            <a href="" class="fa fa-facebook"></a>
                            <a href="" class="fa fa-twitter"></a>
                            <a href="" class="fa fa-instagram"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
