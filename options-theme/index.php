<?php
/**
 * The main template file.
 *
 * This theme is purely for the purpose of testing theme options in Options Framework plugin.
 *
 * @package WordPress
 * @subpackage Options Framework Theme
 */

get_header(); ?>

	<article>

		<header class="entry-header">
			<h1>Options Framework Theme</h1>
			<p>This is how a basic example of how the above option would be called inside your theme.</p>
            <code>global $data; //fetch options stored in $data<br/>
echo $data['media_upload']; //get $data['id'] then echo the value</code>
		</header><!-- .entry-header -->

		<div class="entry-content">
       <?php global $data; 
	   echo $data ['media_upload_35']; ?>
        </div>

		<!-- .entry-content -->
	</article><!-- #post-0 -->

<?php get_footer(); ?>