<?php
/*

Plugin Name: Current User Meta Shortcode

Description: Shortcode to pull in the current user's meta data.
[usermeta key="key"]

Version: 1.0.0

Author: Jeffery Karbowski

Author URI: http://jefferykarbowski.com

License: GPLv2 or later

*/

// [usermeta key="key"]
function usermeta_shortcode( $atts ) {
    extract( shortcode_atts( array(
        'key' => '',
    ), $atts ) );

    $user_id = get_current_user_id();

    $user_meta = get_user_meta( $user_id, $key, true );

    return $user_meta;
}
add_shortcode( 'usermeta', 'usermeta_shortcode' );