<?php
get_header();
?>
    <div class="full-width main-wrapper">
        <div class="page-title">
            <h3><?php the_title(); ?></h3>
        </div>

        <div class="blog blog-post">
            <div class="container">
                <div class="single-content">
					<?php if (have_posts()): ?>
						<?php the_post(); ?>
						<?php the_content(); ?>

						<?php require_once __DIR__ . '/template-parts/media-gallery.php'; ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
