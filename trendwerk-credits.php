<?php
/**
 * Plugin Name: Trendwerk Credits
 * Description: Adds a metatag to credit the developer (Trendwerk).
 *
 * Plugin URI: https://github.com/trendwerk/trendwerk-credits
 *
 * Author: Trendwerk
 * Author URI: https://github.com/trendwerk
 *
 * Version: 0.1.0
 */

add_action('wp_head', function () {
    echo '<meta name="web_author" content="Trendwerk, info@trendwerk.nl">' . "\n";
});
