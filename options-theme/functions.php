<?php

/**
This file was not meant not to replace your functions.php file. 
Just copy and paste the codes below into your own functions.php file.
*/

/**
 * Slightly Modified Options Framework
 */
require_once ('admin/index.php');



add_action('init', 'theme_post_types');
/**
* Reqister Post-Types
*
* @return void
*/
function theme_post_types()
{
//example #1:
$videos = new JesGS_PostType();
 
$videos
->set_name('mytheme_videos')
->set_singlename('Video')
->set_pluralname('Videos')
->set_arguments()
->init();
 
// example #2:
// init() method is called automatically
$books = new JesGS_PostType(array(
'name' => 'mytheme_books',
'singlename' => 'Book',
'pluralname' => 'Books',
'arguments' => array(
'supports' => array(
'title',
'editor',
),
'has_archive' => true,
'rewrite' => array(
'slug' => 'books',
),
),
));
}