<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://amine.senpai.codes/
 * @since      1.0.0
 *
 * @package    Wp_Maintenance_Senpai
 * @subpackage Wp_Maintenance_Senpai/public/partials
 */
?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo get_bloginfo( 'name' ); ?> under Maintenance</title>
  <meta name="keywords" content="Maintenance Mode" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="index, follow" />
  <style>
    body {
        color: #1b1f23;
        font-family: monospace;
    }
    .wrap {
        width: 600px;
        margin: 200px auto 0;
        text-align: center;
    }
    .wrap h1 {
        font-size: 50px;
        font-weight: 700;
        margin: 0 0 90px;
    }
    .wrap h2 {
        font-size: 34px;
        font-weight: 400;
        line-height: 1.6;
        margin: 0 0 80px;
    }
  </style>
  <?php //wp_head(); ?>
</head>

<body>
  <div class="wrap">
    <h1>Maintenance mode</h1>
    <h2><p>Sorry for the inconvenience.<br />Our website is currently undergoing scheduled maintenance.<br /><br /></p></h2>
    <p>Thank you for your understanding.</p>
  </div>
  <?php //wp_footer(); ?>
</body>

</html>
