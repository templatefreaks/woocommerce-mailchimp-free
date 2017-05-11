<?php
/**
 * Plugin Name: Woocommerce categories Mailchimp groups updates
 * Plugin URI: http://www.dreamfoxmedia.com/project/woocommerce-categories-to-mailchimp-groups-plugin-premium/
 * Version: 1.0.5
 * Author: Dreamfox Media
 * Author URI: http://www.dreamfoxmedia.com
 * Description: Connecting your Mailchimp groups to your WooCommerce categories. You will even be able to connect your 
 * Mailchimp group to any of your individual products. This great plugin will help you to stop sending floral discounts
 *  to people who ordered kitchen appliances.
 * Requires at least: 3.7
 * Tested up to: 4.7.4
 * @Developer : Hoang Xuan Hao / Marco van Loghum Slaterus ( Dreamfoxmedia )
 */
/**
 * Check if WooCommerce is active
 */
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins'))))
{
	//includes class file
	include("includes/class_mailchimp_update_file.php");
	//class object call class
	$mailchimp_menu = new mailchimp_update_menu();
	/* ----------------------------------------------------- */
    /**
     * Add mailchimp enqueue
     */
    
    function softsdev_mailchimp_enqueues() {
        wp_enqueue_style( 'softsdev_mailchimp_enqueue', plugin_dir_url( __FILE__ ) . '/css/style.css' );
    }
    /* ----------------------------------------------------- */
	 add_action( 'admin_enqueue_scripts', 'softsdev_mailchimp_enqueues' );

}
?>