<?php
get_header();
/**
 * Template name: Inscriere
 */
?>
<div class="full-width main-wrapper">
    <div class="page-title">
        <h3><?php the_title(); ?></h3>
    </div>

    <div class="blog blog-post">
        <div class="container">
            <div class="single-content">
                <div class="write-content">
                    <?php echo do_shortcode('[contact-form-7 id="451" title="Контактная форма 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>
