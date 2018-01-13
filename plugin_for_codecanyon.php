<?php
/**
Plugin Name: SAIFUL PLUGIN FOR CODECANYON
Plugin URI: https://codecanyon.net/item/woo-product-table-pro/20676867
Description: Plugin Description
Author: Saiful Islam
Author URI: https://codecanyon.net/user/codersaiful
Tags: Your Plugins tag with comma
Version: 1.0.3
 */

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
* Including Plugin file for security
* Include_once
* 
* @since 1.0.0
*/
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$My_SPFC_OBJ = SPFC_OBJ::getInstance();

/**
 * Main Manager Class for WOO Product Table Plugin.
 * All Important file included here.
 * Set Path and Constant also set SPFC_OBJ Class
 * Already set $_instance, So no need again call
 */
class SPFC_OBJ{
	/**
    * Get the instane Property of SPFC_OBJ
    *
    * @return self
    */
   private static $_instance;
   
    /**
    * Get the instane of SPFC_OBJ
    *
    * @return self
    */
   public static function getInstance() {
           if ( ! ( self::$_instance instanceof self ) ) {
                   self::$_instance = new self();
           }

           return self::$_instance;
   }
   
   
   public function __construct() {

   }
   /**
    * Plugin install Static Method
    * 
    * @since 1.0.0
    */
   public static function install() {
       //What to do
   }
   
   /**
    * Plugin Uninsall Activation Hook 
    * Static Method
    * 
    * @since 1.0.0
    */
   public function uninstall() {
       //Nothing for now
   }

}


/**
* Plugin Install and Uninstall
*/
register_activation_hook(__FILE__, array( 'SPFC_OBJ','install' ) );
register_deactivation_hook( __FILE__, array( 'SPFC_OBJ','uninstall' ) );
