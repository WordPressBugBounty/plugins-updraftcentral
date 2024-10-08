<?php if (!defined('UD_CENTRAL_DIR')) die('No direct access allowed'); ?>

<div id="updraftcentral_panel_events" class="updraftcentral-show-in-tab-events updraftcentral-hide-in-other-tabs">
	<h2><?php esc_html_e('Event capture', 'updraftcentral'); ?><span class="uc-btn-refresh-list"><button id="uc-btn-refresh-list" class="btn btn-primary"><?php esc_html_e('Refresh List', 'updraftcentral'); ?></button></span></h2>
	<p><?php echo __('UpdraftCentral captures events to make it easier for you to check the status and the raw response coming from the remote site.', 'updraftcentral').' '.__('This is helpful, especially when an error has occurred while executing or processing a certain UpdraftCentral action.', 'updraftcentral'); ?></p>
	<br/>
	<table id="updraftcentral_events_table" class="display row-border stripe" width="100%">
		<thead>
			<tr>
				<td><?php esc_html_e('Event', 'updraftcentral'); ?></td>
				<td><?php esc_html_e('Website', 'updraftcentral'); ?></td>
				<td><?php esc_html_e('Status', 'updraftcentral'); ?></td>
				<td><?php esc_html_e('Event date', 'updraftcentral'); ?></td>
				<td nowrap><?php esc_html_e('Result data', 'updraftcentral'); ?></td>
			</tr>
		</thead>
	</table> 
</div>
