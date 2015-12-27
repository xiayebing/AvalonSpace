<?php
/**
 * Created by PhpStorm.
 * User: Avalon
 * Date: 2015/12/13
 * Time: 15:02
 */
add_action('admin_menu','wp_hide_nag');
function wp_hide_nag() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}