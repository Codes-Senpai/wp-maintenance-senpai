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
<h2>WP Maintenance Dev Support</h2>
	<p>Your feedback is valuable to me, and I'm always looking for ways to improve this plugin. If you have any suggestions or ideas for how to make it better, please don't hesitate to contact me at <u><b><a href="mailto:support@senpai.codes?subject=<?php echo $subject; ?>&body=<?php echo $body; ?>">support@senpai.codes</a></b></u>. Alternatively, you can also reach me by clicking on the links provided below. I appreciate your support and look forward to hearing from you.</p>
	<br />
	<hr />
	<br />
	<p align="center">
		<a href="https://twitter.com/senpai_codes" target="_blank" style="display: inline-block;margin: 0 10px;"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/twitter.svg" alt="aminosafsafi" height="30" width="40" /></a>
		<a href="https://www.linkedin.com/company/senpai-codes/" target="_blank" style="display: inline-block;margin: 0 10px;"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/linked-in-alt.svg" alt="amine-safsafi" height="30" width="40" /></a>
		<a href="https://www.facebook.com/SenpaiCodes" target="_blank" style="display: inline-block;margin: 0 10px;"><img align="center" src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/facebook.svg" height="30" width="40" /></a>
	</p>
</div>