<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_filter( 'cmb_meta_boxes', 'stunnig_headers_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */

function stunnig_headers_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'stunnig_headers_';
	
	$meta_boxes[] = array(
		'id'         => 'dfd-header_img_metabox',
		'title'      => __('Stunning header options', 'dfd'),
		'pages'      => array('page','post','my-product','product','gallery'),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
	            'name' => 'Background image',
	            //'desc' => __('Select image pattern for stunning header background', 'dfd'),
                    'tooltip_text' => esc_html__('Select image pattern for stunning header background', 'dfd'),
	            'id'   => $prefix . 'bg_img',
                'type' => 'file',
                'save_id' => false, // save ID using true
				'std'  => '',
	        ),
			array(
				'name' => 'Background image position',
				'desc' => __('', 'dfd'),
                                'tooltip_text' => esc_html__('The background position sets the starting position of a background image', 'dfd'),
				'id' => $prefix . 'bg_img_position',
				'type' => 'select',
				'options' => dfd_get_bgposition_redux(),
				'std'  => '',
			),
			array(
				'name' => 'Background size',
				'desc' => '',
				'tooltip_text' => esc_html__('Adjust the background image displaying', 'dfd'),
				'id' => 'stun_header_bg_size',
				'type' => 'select',
				'options' => dfd_get_bgsize('metaboxes'),
				'std'  => '',
			),
			array(
                'name' => 'Background color',
                //'desc' => __('Select color for header background', 'dfd'),
                'tooltip_text' => esc_html__('The background color will be shown if the image is not set for the stunning header', 'dfd'),
                'id'   => $prefix . 'bg_color',
                'type' => 'colorpicker',
                'save_id' => false, // save ID using true
                'std'  => '',
            ),
            array(
                'name'	=> __('Page subtitle', 'dfd'),
                'desc'	=> '',
                'tooltip_text'	=> esc_html__('Enter page subtitle text to be displayed in stunning header', 'dfd'),
                'id'	=> $prefix . 'subtitle',
                'type'	=> 'text',
            ),
			array(
				'name' => __('Breadcrumbs','dfd'),
				'desc' => '',
				'tooltip_text'	=> esc_html__('Allows you to show or hide the navigation links in stunning header. If you choose theme default the displaying will correspond to the theme options settings', 'dfd'),
				'id' => 'stan_header_breadcrumbs',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Inherit from theme options', 'dfd'), 'value' => '', ),
					array( 'name' => __('On', 'dfd'), 'value' => '1', ),
					array( 'name' => __('Off', 'dfd'), 'value' => 'off', ),
				),
				'std'  => '',
			),
			array(
				'name' => __('Breadcrumbs style','dfd'),
				'desc' => '',
				'tooltip_text'	=> esc_html__('Choose the style of the breadcrumbs. If you choose theme default the style will correspond to the theme options settings', 'dfd'),
				'id' => 'stan_header_breadcrumbs_style',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Inherit from theme options', 'dfd'), 'value' => '', ),
					array( 'name' => __('Theme default', 'dfd'), 'value' => 'simple', ),
					array( 'name' => __('Transparent background', 'dfd'), 'value' => 'transparent-bg', ),
				),
				'std'  => '',
				'dep_option'    => 'stan_header_breadcrumbs',
				'dep_values'    => '1',
			),
            array(
                'name'	=> __('Stunning header height in px', 'dfd'),
                'desc'	=> '',
                'tooltip_text'	=> esc_html__('Allows you to set the stunning header height', 'dfd'),
                'id'	=> $prefix . 'custom_height',
                'type'	=> 'text',
            ),
			array(
				'name' => 'Text alignment',
				'desc' => __('', 'dfd'),
				'tooltip_text'	=> esc_html__('Choose the text position in stunning header. If you choose theme default the displaying will correspond to the theme options settings', 'dfd'),
				'id' => $prefix . 'text_alignment',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Theme default', 'dfd'), 'value' => '', ),
					array( 'name' => __('Center', 'dfd'), 'value' => 'text-center', ),
					array( 'name' => __('Left', 'dfd'), 'value' => 'text-left', ),
					array( 'name' => __('Right', 'dfd'), 'value' => 'text-right', ),
				),
				'std'  => '',
			),
			array(
				'name'	=> __('Fixed background position', 'dfd'),
				'desc'	=> '',
				'tooltip_text'	=> esc_html__('This option allows you to enable or disable the fixed image position for the stunning header background', 'dfd'),
				'id'	=> $prefix . 'stan_header_fixed',
				'type'	=> 'radio_inline',
				'options' => array(
					array( 'name' => __('On', 'dfd'), 'value' => '1', ),
					array( 'name' => __('Off', 'dfd'), 'value' => 'off', ),
				),
			),
			array(
				'name'	=> __('Background scheme', 'dfd'),
				'desc'	=> '',
				'tooltip_text'	=> esc_html__('According to the color scheme you choose the text colors will be changed to make it more readable', 'dfd'),
				'id'	=> $prefix . 'stan_header_bgcheck',
				'type'	=> 'radio_inline',
				'options' => array(
					array( 'name' => __('Light', 'dfd'), 'value' => 'off', ),
					array( 'name' => __('Dark', 'dfd'), 'value' => '1', ),
				),
			),
			array(
				'name' => __('Stunning header video','dfd'),
				'desc' => __('', 'dfd'),
				'tooltip_text'	=> esc_html__('Allows you to set video background for the stunning header.', 'dfd'),
				'id' => 'dfd_stun_video_enable',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Disable', 'dfd'), 'value' => '', ),
					array( 'name' => __('Enable', 'dfd'), 'value' => 'enable', ),
				),
				'std'  => '',
			),
			array(
				'name' => __('Stunning header video source','dfd'),
				'desc' => '',
				'id' => 'dfd_stun_video_style',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('None', 'dfd'), 'value' => '', ),
					array( 'name' => __('Self-hosted video', 'dfd'), 'value' => 'self-hosted', ),
					array( 'name' => __('oEmbed Youtube video', 'dfd'), 'value' => 'youtube', ),
					array( 'name' => __('oEmbed Vimeo video', 'dfd'), 'value' => 'vimeo', ),
				),
				'std'  => '',
				'dep_option'    => 'dfd_stun_video_enable',
				'dep_values'    => 'enable',
			),
			array(
				'name' => __('Stunning header background video style','dfd'),
				'desc' => '',
				'id' => 'dfd_stun_video_type',
				'type' => 'select',
				'options' => array(
					array( 'name' => __('Background', 'dfd'), 'value' => 'bacground-video', ),
					array( 'name' => __('Full screen video', 'dfd'), 'value' => 'full-screen-video', ),
				),
				'std'  => '',
				'dep_option'    => 'dfd_stun_video_style',
				'dep_values'    => 'youtube,vimeo',
			),
			array(
                'name'	=> __('Youtube video ID', 'dfd'),
                'desc'	=> '',
                'tooltip_text'	=> esc_html__('Look at the URL of that page, and at the end of it, you should see a combination of numbers and letters after an equal sign (=).', 'dfd'),
                'id'	=> 'dfd_stun_bg_youtube_id',
                'type'	=> 'text',
				'dep_option'    => 'dfd_stun_video_style',
				'dep_values'    => 'youtube',
            ),
			array(
                'name'	=> __('Vimeo video ID', 'dfd'),
                'desc'	=> '',
                'tooltip_text'	=> esc_html__('Copy the numeric code that appears at the end of its URL at the top of your browser window', 'dfd'),
                'id'	=> 'dfd_stun_bg_vimeo_id',
                'type'	=> 'text',
				'dep_option'    => 'dfd_stun_video_style',
				'dep_values'    => 'vimeo',
            ),
            array(
                'name' =>  __('Self hosted video in mp4 format', 'dfd'),
                'desc'	=> '',
                'id'	=> 'dfd_stun_header_self_hosted_mp4',
                'type'	=> 'file',
				'dep_option'    => 'dfd_stun_video_style',
				'dep_values'    => 'self-hosted',
            ),
            array(
                'name' =>  __('Self hosted video file in webM format', 'dfd'),
                'desc'	=> '',
                'id'	=> 'dfd_stun_header_self_hosted_webm',
                'type'	=> 'file',
				'dep_option'    => 'dfd_stun_video_style',
				'dep_values'    => 'self-hosted',
            ),
			array(
				'name'	=> __('Loop video', 'dfd'),
				'desc'	=> '',
				'id'	=> 'dfd_stun_header_video_loop',
				'type'	=> 'radio_inline',
				'options' => array(
					array( 'name' => __('Disable', 'dfd'), 'value' => 'off', ),
					array( 'name' => __('Enable', 'dfd'), 'value' => '1', ),
				),
				'std' => '1',
				'dep_option'    => 'dfd_stun_video_enable',
				'dep_values'    => 'enable',
			),
			array(
				'name'	=> __('Mute video', 'dfd'),
				'desc'	=> '',
				'id'	=> 'dfd_stun_header_video_mute',
				'type'	=> 'radio_inline',
				'options' => array(
					array( 'name' => __('Disable', 'dfd'), 'value' => 'off', ),
					array( 'name' => __('Enable', 'dfd'), 'value' => '1', ),
				),
				'std' => '1',
				'dep_option'    => 'dfd_stun_video_enable',
				'dep_values'    => 'enable',
			),
		),
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}
