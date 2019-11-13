<div class="media-gallery" id="js-media-gallery">
	<?php $gallery = carbon_get_the_post_meta( 'crb_media_gallery' ); ?>
	
	<?php foreach ( $gallery as $item ): ?>
        <div class="media-gallery__item">
            <a href="<?php echo wp_get_attachment_image_src( (int) $item, 'full' )[0]; ?>">
                <img src="<?php echo kama_thumb_src( 'w=200', (int) $item ); ?>" alt="">
            </a>
        </div>
	<?php endforeach; ?>
</div>
