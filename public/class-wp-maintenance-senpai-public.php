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
	 * maintenance mode status.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      bool    $is_activated
	 */
	private $is_activated;

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

		if(get_option('wp_maintenance_senpai_is_activated')){
			$this->is_activated = get_option('wp_maintenance_senpai_is_activated');
		}else{
			update_option('wp_maintenance_senpai_is_activated', 0, true);
			$this->is_activated = false;
		}

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		if($this->is_activated){
			wp_enqueue_style( $this->wp_maintenance_senpai, plugin_dir_url( __FILE__ ) . 'dist/main/wp-maintenance-senpai-main.css', array(), $this->version, 'all' );
		}
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		if($this->is_activated){
			wp_enqueue_script( 'wp_maintenance_senpai_main', plugin_dir_url( __FILE__ ) . 'dist/main/wp-maintenance-senpai-main.js', array('jquery', 'wp-i18n'), $this->version, false );
	
		}
	}

	public function render_maintenance_html(){
		$dir = WP_MAINTENANCE_SENPAI_DIR . '/public/partials/';
		if($this->is_activated){
			if(!current_user_can('administrator')) { 
				ob_start();
				include $dir . 'wp-maintenance-senpai-template-1.php';
				$content = ob_get_clean();
				echo $content;
				die;
			}
		}

	}

	function add_toolbar_items($admin_bar){
		//error_log(print_r($admin_bar,1));
		$admin_link =  esc_url( admin_url( 'tools.php?page=senpai_maintenance_options') );
		if($this->is_activated){
			$admin_bar->add_menu( array(
				'id'    => 'wp-maintenance-senpai-admin-bar-active',
				'title' => '<span class="wp-maintenance-senpai-active">Maintenance Mode is Activated</span>',
				'href'  => $admin_link,
				'target' => '_blank',
				'meta'  => array(
					'title' => __('Maintenance Mode is Activated'),
					'class' => 'wp_maintenance_senpai_menu_item_class'           
				),
			));
		}

		/* $admin_bar->add_menu( array(
			'id'    => 'my-sub-item',
			'parent' => 'my-item',
			'title' => 'My Sub Menu Item',
			'href'  => '#',
			'meta'  => array(
				'title' => __('My Sub Menu Item'),
				'target' => '_blank',
				'class' => 'my_menu_item_class'
			),
		)); */
	}


}
