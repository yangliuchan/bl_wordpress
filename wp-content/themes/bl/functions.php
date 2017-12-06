<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-12-06
 * Time: 14:03
 */

function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />';
}
add_action('wp_head', 'favicon_link');

?>