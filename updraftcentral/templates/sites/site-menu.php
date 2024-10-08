<div class="updraft_site_actions btn-group btn-group-sm more-option-container">
	<button id="btn_group_drop" type="button" class="btn btn-primary more-option" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="<?php esc_attr_e('More', 'updraftcentral'); ?>">
		<span class="dashicons dashicons-menu" role="img" aria-label="<?php esc_attr_e('More', 'updraftcentral'); ?>"></span>
		<span class="label hidden invisible"><?php esc_html_e('More', 'updraftcentral'); ?></span>
	</button>
	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btn_group_drop" data-site_id="<?php echo esc_attr($site->site_id); ?>">
	<?php
		if (empty($site->description)) {
	?>
	<a class="dropdown-item" href="#">
	<span class="updraft-dropdown-item updraftcentral_site_adddescription">
	<span class="dashicons dashicons-edit"> </span>
	<span><?php esc_html_e('Site configuration', 'updraftcentral'); ?></span>
	</span>
	</a>
	<?php
		} else {
	?>
	<a class="dropdown-item" href="#">
	<span class="updraft-dropdown-item updraftcentral_site_adddescription updraftcentral_site_editdescription">
	<span class="dashicons dashicons-edit"> </span>
	<span><?php esc_html_e('Site configuration', 'updraftcentral'); ?></span>
	</span>
	</a>
	<?php
		}
	?>
	<a class="dropdown-item" href="#">
		<span class="updraft-dropdown-item updraftcentral_site_delete">
			<span class="dashicons dashicons-no-alt"></span>
			<span><?php esc_html_e('Remove site', 'updraftcentral'); ?></span>
		</span>
	</a>
	<?php

		// Return items/menus should be in the following format: array(array('id' => integer, 'visibility' => 'hidden|visible', 'class' => 'anyclassname', 'dashicon' => 'unlock', 'label' => 'menu label of choice'))
		$extra_site_menus = apply_filters('updraftcentral_extra_site_menus', array(), $site->site_id);
		if (!empty($extra_site_menus)) {
			foreach ($extra_site_menus as $menu) {
				$display = ('hidden' === $menu['visibility']) ? 'none' : 'block';
	?>
			<a id="<?php echo esc_attr($menu['id']); ?>" class="dropdown-item" href="#" style="display:<?php echo esc_attr($display); ?>;">
				<span class="updraft-dropdown-item <?php echo esc_attr($menu['class']); ?>">
					<span class="dashicons dashicons-<?php echo esc_attr($menu['dashicon']); ?>"> </span>
					<span><?php echo esc_html($menu['label']); ?></span>
				</span>
			</a>
	<?php
			}
		}
	?>
</div>
</div>