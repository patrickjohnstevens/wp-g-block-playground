<?php
/**
 * Plugin Name:       Example Plugin
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       example-plugin
 *
 * @package           create-block
 */

include_once('class-DynamicBlock.php');

$create_block = new ExamplePlugin\DynamicBlock('example_plugin','create_block_example_plugin_render_callback');

function create_block_example_plugin_render_callback($attributes, $content, $block){
	$html = '<div '.get_block_wrapper_attributes().'>'.esc_html( 'Dynamic Block Example', 'example-plugin' ).'</div>';
    return $html;
}