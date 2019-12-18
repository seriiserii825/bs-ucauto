<?php get_header(); ?>
<?php /**
 *
 * Template Name: Contacts
 */
 ?>

<div class="full-width main-wrapper">
    <div class="page-title">
        <h3><?php the_title(); ?></h3>
    </div>

    <div class="join-us-block contacts-page">
		<div class="container">
			<div class="row">
				<div class="team-descript">
					<h4><?php echo carbon_get_theme_option('crb_contacts_title'.get_lang()); ?> <span class="grey-color"><?php echo bloginfo('name'); ?></span></h4>
					<p><?php echo carbon_get_theme_option('crb_contacts_text'.get_lang()); ?></p>
				</div>
				<!--<form action="/" class="contact-us-form">-->
				<!--	<div class="contact-us-input">-->
				<!--		<input type="text" placeholder="First Name" required>-->
				<!--	</div>-->
				<!--	<div class="contact-us-input">-->
				<!--		<input type="text" placeholder="Last Name">-->
				<!--	</div>-->
				<!--	<div class="contact-us-input">-->
				<!--		<input type="email" placeholder="Email Address" required>-->
				<!--	</div>-->
				<!--	<div class="contact-us-textarea">-->
				<!--		<textarea placeholder="Message"></textarea>-->
				<!--	</div>-->
                <!--    <input class="btn-submit" type="submit" value="Отправить">-->
				<!--</form>-->
                <?php echo do_shortcode('[simple_contact_form]'); ?>

                <form id="add_feedback">
                    <input type="text" name="art_name" id="art_name" class="required art_name" placeholder="Ваше имя" value=""/>

                    <input type="email" name="art_email" id="art_email" class="required art_email" placeholder="Ваш E-Mail" value=""/>

                    <input type="text" name="art_subject" id="art_subject" class="art_subject" placeholder="Тема сообщения" value=""/>

                    <textarea name="art_comments" id="art_comments" placeholder="Сообщение" rows="10" cols="30" class="required art_comments"></textarea>

                    <input type="checkbox" name="art_anticheck" id="art_anticheck" class="art_anticheck" style="display: none !important;" value="true" checked="checked"/>

                    <input type="text" name="art_submitted" id="art_submitted" value="" style="display: none !important;"/>

                    <input type="submit" id="submit-feedback" class="button btn-submit" value="Отправить сообщение"/>
                </form>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
