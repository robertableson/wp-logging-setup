<?php

/*
 * WP DEBUGGING
 * To activate debugging, add the following in wp-config.php:
 *  define( 'WP_DEBUG', true );
 *  define( 'WP_DEBUG_DISPLAY', false );
 *	define( 'WP_DEBUG_LOG', true );
 * To debug simply, SFTP into website and check log file 
 *  /logs/apache_wordpress-619001-2715337.cloudwaysapps.com.error.log
 * */

if ( ! function_exists('write_log')) {
    function write_log ( $log )  {
       if ( is_array( $log ) || is_object( $log ) ) {
          error_log( print_r( $log, true ) );
       } else {
          error_log( $log );
       }
    }
 }