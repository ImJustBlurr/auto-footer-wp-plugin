<style>
<?php include 'style.css'; ?> /* getting our styles */
</style>

<?php
/*
Plugin Name:  Auto Footer
Description:  Automatically places a customizable footer at the bottom of your post that will redirect users to your socials.
Version:      1.0
Author:       Tariq Mohamed
Author URI:   https://blurr.info/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

require_once "logic.php"; // importing our logic

// Hook our function to WordPress the_content filter
add_filter('the_content', 'autoFooter'); 
?>