<?php
/**
* Plugin Name: Footer Auto Update Year
* Plugin URI: https://www.atlasseniorliving.com/
* Description: This plugin updates year automatically.
* Version: 0.0.1
* Author: Gabriel Rosales
* Author URI: https://www.atlasseniorliving.com/developers/gabriel-rosales
**/
?>

<?php

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

?>


