<?php
/**
 * Plugin Name:       Wp Omaha Block
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-omaha-block
 *
 * @package           create-block
 */

include_once('class-DynamicBlock.php');

$create_block = new WpOmahaBlock\DynamicBlock('wp_omaha_block','create_block_wp_omaha_block_render_callback');

function create_block_wp_omaha_block_render_callback($attributes, $content, $block){
	$html = '<div '.get_block_wrapper_attributes().'>'.esc_html( 'Hello WP Omaha!', 'wp-omaha-block' ).'<br /><button>Click Me</button></div>';
    return $html;
}