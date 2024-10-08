<?php if (!defined('UD_CENTRAL_DIR')) die('No direct access allowed'); ?>

<div class="updraft-ad-container updated">
	<div class="updraft_notice_container">
		<div class="updraft_advert_content_left">
			<img src="<?php echo esc_attr(UD_CENTRAL_URL.'/images/'.$image);?>" width="60" height="60" alt="<?php esc_attr_e('notice image', 'updraftcentral');?>" />
		</div>
		<div class="updraft_advert_content_right">
			<h3 class="updraft_advert_heading">
				<?php
					if (!empty($prefix)) echo esc_html($prefix).' ';
					echo esc_html($title);
				?>
				<div class="updraft-advert-dismiss">
				<?php if (!empty($dismiss_time)) { ?>
					<a href="#" onclick="jQuery(this).parents('.updraftcentral_notice').clearQueue().slideUp(); jQuery.post(udclion.ajaxurl, {action: 'updraftcentral_dashboard_ajax', subaction: '<?php echo esc_attr($dismiss_time);?>', nonce: '<?php echo esc_attr(wp_create_nonce('updraftcentral_dashboard_nonce'));?>', component: 'dashboard' });"><button type="button" class="updraftcentral_notice_dismiss" aria-label="<?php esc_attr_e('Close', 'updraftcentral'); ?>"></button></a>
				<?php } else { ?>
					<a href="#" onclick="jQuery(this).parents('.updraftcentral_notice').clearQueue().slideUp();"><button type="button" class="updraftcentral_notice_dismiss" aria-label="<?php esc_attr_e('Close', 'updraftcentral'); ?>"></button></a>
				<?php } ?>
				</div>
			</h3>
			<p>
				<?php
					echo wp_kses($text, wp_kses_allowed_html('post'));

					if (isset($discount_code)) echo ' <b>' . esc_html($discount_code) . '</b>';

					if (!empty($button_link) && !empty($button_meta)) {
					?>
						<a class="updraft_notice_link" href="<?php esc_attr_e(apply_filters('updraftcentral_com_link', $button_link));?>"><?php
								if ('updraftcentral' == $button_meta) {
									esc_html_e('Upgrade now', 'updraftcentral');
								} elseif ('review' == $button_meta) {
									esc_html_e('Review UpdraftCentral', 'updraftcentral');
								} elseif ('updraftplus' == $button_meta) {
									esc_html_e('Get UpdraftPlus Premium', 'updraftcentral');
								} elseif ('signup' == $button_meta) {
									esc_html_e('Sign up', 'updraftcentral');
								} elseif ('go_there' == $button_meta) {
									esc_html_e('Go there', 'updraftcentral');
								}
							?></a>
					<?php } ?>
			</p>
		</div>
	</div>
	<div class="clear"></div>
</div>
