<?php

/**
This file was not meant not to replace your functions.php file. 
Just copy and paste the codes below into your own functions.php file.
*/

/**
 * Slightly Modified Options Framework
 */
require_once ('admin/index.php');


function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'posts_to_pages',
        'from' => 'post',
        'to' => 'page'
    ) );
}
add_action( 'p2p_init', 'my_connection_types' );
?>
