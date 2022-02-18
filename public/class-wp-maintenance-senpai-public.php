<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://amine.senpai.codes/
 * @since      1.0.0
 *
 * @package    Wp_Maintenance_Senpai
 * @subpackage Wp_Maintenance_Senpai/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Maintenance_Senpai
 * @subpackage Wp_Maintenance_Senpai/public
 * @author     Amine Safsafi <amine.safsafi@senpai.codes>
 */
class Wp_Maintenance_Senpai_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $wp_maintenance_senpai    The ID of this plugin.
	 */
	private $wp_maintenance_senpai;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $wp_maintenance_senpai       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wp_maintenance_senpai, $version ) {

		$this->wp_maintenance_senpai = $wp_maintenance_senpai;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Maintenance_Senpai_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Maintenance_Senpai_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->wp_maintenance_senpai, plugin_dir_url( __FILE__ ) . 'dist/main/wp-maintenance-senpai-loader.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Maintenance_Senpai_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Maintenance_Senpai_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( 'wp_maintenance_senpai_loader', plugin_dir_url( __FILE__ ) . 'dist/main/wp-maintenance-senpai-loader.js', array('wp-i18n'), $this->version, false );
		wp_enqueue_script( 'wp_maintenance_senpai_setting', plugin_dir_url( __FILE__ ) . 'dist/main/wp-maintenance-senpai-setting.js', array('plugin_name_loader'), $this->version, false );


	}

}
