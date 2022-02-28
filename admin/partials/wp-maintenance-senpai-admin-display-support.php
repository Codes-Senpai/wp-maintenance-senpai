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
		<a href="<?php echo $option_admin_link; ?>" class="senpai-maintenance-tab" aria-current="true">Settings</a>

		<a href="<?php echo $support_admin_link; ?>" class="senpai-maintenance-tab active">Support</a>
	</nav>
</div>
<div class="senpai-maintenance-body hide-if-no-js">

</div>