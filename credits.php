<?php
/**
 * Plugin Name: Credits
 * Description: Adds a metatag to credit the developer (Trendwerk).
 *
 * Plugin URI: https://github.com/trendwerk/credits
 *
 * Author: Trendwerk
 * Author URI: https://github.com/trendwerk
 *
 * Version: 0.1.1
 */

add_action('wp_head', function () {
    echo '<meta name="web_author" content="Trendwerk, info@trendwerk.nl">' . "\n";
});
