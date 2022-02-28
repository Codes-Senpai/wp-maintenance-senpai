<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://amine.senpai.codes/
 * @since      1.0.0
 *
 * @package    Wp_Maintenance_Senpai
 * @subpackage Wp_Maintenance_Senpai/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="senpai-maintenance-header">
	<div class="senpai-maintenance-title-section">
		<h1>WP Maintenance</h1>
	</div>
	<nav class="senpai-maintenance-tabs-wrapper hide-if-no-js" aria-label="Secondary menu">
		<a href="<?php echo $option_admin_link; ?>" class="senpai-maintenance-tab active" aria-current="true">Settings</a>

		<a href="<?php echo $support_admin_link; ?>" class="senpai-maintenance-tab">Support</a>
	</nav>
</div>
<div class="senpai-maintenance-body hide-if-no-js">
	<h2>WP Maintenance Settings</h2>
	<p>As a website owner, you may need to do regular maintenance where this plugin come in handy to disable the front-end side of your website and make it accesible only for logged-in admins.</p>
	<hr>
		<table class="form-table tools-privacy-policy-page" role="presentation">
			<tbody>
				<tr>
					<th scope="row">
						<label for="page_for_privacy_policy">Maintenance mode</label>
					</th>
					<td>
						<?php echo '<input type="checkbox" id="wp_maintenance_senpai_is_activated_toggle" name="wp_maintenance_senpai_is_activated" value="1" ' . checked( 1, get_option('wp_maintenance_senpai_is_activated') , false ) . ' />'; ?>
						<label >Enable/Disable</label>
					</td>
				</tr>
				<tr class="senpai-maintenance-hidden">
					<th scope="row">
						<label for="page_for_privacy_policy">Change template</label>
					</th>
					<td>
						<select name="page_for_privacy_policy" id="page_for_privacy_policy">
							<option value="0">— Select —</option>
							<option class="level-0" value="3" selected="selected">Privacy Policy</option>
							<option class="level-0" value="2">Sample Page</option>
						</select>
						<button id="set-page" class="button button-primary">Save</button>
					</td>
				</tr>
			</tbody>
		</table>
</div>