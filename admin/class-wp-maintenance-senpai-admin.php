<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://amine.senpai.codes/
 * @since      1.0.0
 *
 * @package    Wp_Maintenance_Senpai
 * @subpackage Wp_Maintenance_Senpai/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Maintenance_Senpai
 * @subpackage Wp_Maintenance_Senpai/admin
 * @author     Amine Safsafi <amine.safsafi@senpai.codes>
 */
class Wp_Maintenance_Senpai_Admin {

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
	 * @param      string    $wp_maintenance_senpai       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $wp_maintenance_senpai, $version ) {

		$this->wp_maintenance_senpai = $wp_maintenance_senpai;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles($hook) {
		$allowed_pages = array('tools_page_senpai_maintenance_options', 'admin_page_senpai_maintenance_support');
		//if(in_array($hook, $allowed_pages)){
			wp_enqueue_style( 'wp_maintenance_senpai_admin_main_css', plugin_dir_url( __FILE__ ) . 'dist/main/wp-maintenance-senpai-main.css', array(), $this->version, 'all' );
		//}
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts($hook) {
		error_log($hook);
		$allowed_pages = array('tools_page_senpai_maintenance_options', 'admin_page_senpai_maintenance_support');
		if(in_array($hook, $allowed_pages)){
			wp_register_script( 'wp_maintenance_senpai_admin_main_js', plugin_dir_url( __FILE__ ) . 'dist/main/wp-maintenance-senpai-main.js', array('wp-i18n', 'jquery'), $this->version, false );
			wp_localize_script( 'wp_maintenance_senpai_admin_main_js', 'wp_maintenance_senpai_admin_main_params', array(
				'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
				'nonce' => wp_create_nonce('wp-senpai-maintenance-main-nonce')
			) );
			wp_enqueue_script( 'wp_maintenance_senpai_admin_main_js' );
		
		}
	}

	public function add_wp_senpai_maintenance_menu(){
		add_submenu_page(
            'tools.php',
            'WP Maintenance', // page_title
            'WP Maintenance', // menu_title
            'manage_options', // capability
            'senpai_maintenance_options', // menu_slug
            [ $this, 'senpai_maintenance_settings_render'], // function
        );

		add_submenu_page(
            null,
            'WP Maintenance', // page_title
            'WP Maintenance', // menu_title
            'manage_options', // capability
            'senpai_maintenance_support', // menu_slug
            [ $this, 'senpai_maintenance_support_render'], // function
        );

		

	}

	public function senpai_maintenance_settings_render(){
		$option_admin_link =  esc_url( admin_url( 'tools.php?page=senpai_maintenance_options') );
		$support_admin_link =  esc_url( admin_url( 'admin.php?page=senpai_maintenance_support') );

		$dir = WP_MAINTENANCE_SENPAI_DIR . '/admin/partials/';
		include $dir . 'wp-maintenance-senpai-admin-display-options.php';
	}

	public function senpai_maintenance_support_render(){
		$option_admin_link =  esc_url( admin_url( 'tools.php?page=senpai_maintenance_options') );
		$support_admin_link =  esc_url( admin_url( 'admin.php?page=senpai_maintenance_support') );

		$dir = WP_MAINTENANCE_SENPAI_DIR . '/admin/partials/';
		include $dir . 'wp-maintenance-senpai-admin-display-support.php';
	}

	public function senpai_maintenance_settings_handler(){
		$nonce = $_POST['nonce'];
		if ( ! wp_verify_nonce( $nonce, 'wp-senpai-maintenance-main-nonce' ) ){
			$respond = array(
				'success' => 0,
				'error'=>array('something went wrong.'),
				'data'=>array(),
			);
			wp_send_json($respond);
		}
		$active = $_POST['active'];
		error_log(print_r($_POST,1));
		error_log(print_r(get_option('wp_maintenance_senpai_is_activated'),1));

		if($active == 1){
			update_option('wp_maintenance_senpai_is_activated', 1, true);
		}else{
			update_option('wp_maintenance_senpai_is_activated', 0, true);
		}

		$respond = array(
			'success' => 1,
			'error'=>array(),
			'data'=>array(),
		);
		wp_send_json($respond);

	}

}
