<?php 

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	"name" => esc_html__("Full Width Section", "salient-core"),
	"base" => "full_width_section",
	"class" => "wpb_vc_row",
	"is_container" => true,
	"icon" => "icon-wpb-row",
	"show_settings_on_create" => false,
	"category" => esc_html__('Nectar Elements', 'salient-core'),
	'js_view' => 'VcRowView',
	"content_element" => false,
	'default_content' => '[vc_column width="1/1"]%content%[/vc_column]',
	'params' => array( 
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => "Type",
			"param_name" => "type",
			"value" => array(
				"Full Width Background" => "full_width_background",
				"Full Width Content" => "full_width_content",	
				"In Container" => "in_container"
			)
		),
		array(
			"type" => "checkbox",
			"class" => "",
			'edit_field_class' => 'vc_col-xs-12 salient-fancy-checkbox',
			"heading" => esc_html__("Vetical Align Columns", "salient-core"),
			"value" => array("Make all columns in this row vertically aligned?" => "true" ),
			"param_name" => "vertically_center_columns",
			"description" => "",
			"dependency" => Array('element' => "type", 'value' => array('full_width_content'))
		),
		array(
			"type" => "fws_image",
			"class" => "",
			"heading" => esc_html__("Background Image", "salient-core"),
			"param_name" => "image_url",
			"value" => "",
			"description" => ""
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Background Position", "salient-core"),
			"param_name" => "bg_pos",
			"value" => array(
				"Left Top" => "Left Top",
				"Left Center" => "Left Center",
				"Left Bottom" => "Left Bottom",
				"Center Top" => "Center Top",
				"Center Center" => "Center Center",
				"Center Bottom" => "Center Bottom",
				"Right Top" => "Right Top",
				"Right Center" => "Right Center",
				"Right Bottom" => "Right Bottom"
			),
			"dependency" => Array('element' => "image_url", 'not_empty' => true)
		), 
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Background Repeat", "salient-core"),
			"param_name" => "bg_repeat",
			"value" => array(
				"No Repeat" => "No-Repeat",
				"Repeat" => "Repeat"
			),
			"dependency" => Array('element' => "image_url", 'not_empty' => true)
		),
		array(
			"type" => "checkbox",
			"class" => "",
			'edit_field_class' => 'vc_col-xs-12 salient-fancy-checkbox',
			"heading" => esc_html__("Parallax Background", "salient-core"),
			"value" => array("Enable Parallax Background?" => "true" ),
			"param_name" => "parallax_bg",
			"description" => "",
			"dependency" => Array('element' => "image_url", 'not_empty' => true)
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Background Color", "salient-core"),
			"param_name" => "background_color",
			"value" => "",
			"description" => ""
		),
		array(
			"type" => "checkbox",
			"class" => "",
			'edit_field_class' => 'vc_col-xs-12 salient-fancy-checkbox',
			"heading" => esc_html__("Video Background", "salient-core"),
			"value" => array("Enable Video Background?" => "use_video" ),
			"param_name" => "video_bg",
			"description" => ""
		),
		array(
			"type" => "checkbox",
			"class" => "",
			'edit_field_class' => 'vc_col-xs-12 salient-fancy-checkbox',
			"heading" => esc_html__("Video Color Overlay", "salient-core"),
			"value" => array("Enable a color overlay ontop of your video?" => "true" ),
			"param_name" => "enable_video_color_overlay",
			"description" => "",
			"dependency" => Array('element' => "video_bg", 'value' => array('use_video'))
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Overlay Color", "salient-core"),
			"param_name" => "video_overlay_color",
			"value" => "",
			"description" => "",
			"dependency" => Array('element' => "enable_video_color_overlay", 'value' => array('true'))
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("WebM File URL", "salient-core"),
			"value" => "",
			"param_name" => "video_webm",
			"description" => esc_html__("You must include this format & the mp4 format to render your video with cross browser compatibility. OGV is optional.
			Video must be in a 16:9 aspect ratio.", "salient-core"),
			"dependency" => Array('element' => "video_bg", 'value' => array('use_video'))
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("MP4 File URL", "salient-core"),
			"value" => "",
			"param_name" => "video_mp4",
			"description" => esc_html__("Enter the URL for your mp4 video file here", "salient-core"),
			"dependency" => Array('element' => "video_bg", 'value' => array('use_video'))
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("OGV File URL", "salient-core"),
			"value" => "",
			"param_name" => "video_ogv",
			"description" => esc_html__("Enter the URL for your ogv video file here", "salient-core"),
			"dependency" => Array('element' => "video_bg", 'value' => array('use_video'))
		),
		array(
			"type" => "attach_image",
			"class" => "",
			"heading" => esc_html__("Video Preview Image", "salient-core"),
			"value" => "",
			"param_name" => "video_image",
			"description" => "",
			"dependency" => Array('element' => "video_bg", 'value' => array('use_video'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			'save_always' => true,
			"heading" => esc_html__("Text Color", "salient-core"),
			"param_name" => "text_color",
			"value" => array(
				"Light" => "light",
				"Dark" => "dark",
				"Custom" => "custom"
			)
		),
		array(
			"type" => "colorpicker",
			"class" => "",
			"heading" => esc_html__("Custom Text Color", "salient-core"),
			"param_name" => "custom_text_color",
			"value" => "",
			"description" => "",
			"dependency" => Array('element' => "text_color", 'value' => array('custom'))
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => esc_html__("Text Alignment", "salient-core"),
			"param_name" => "text_align",
			"value" => array(
				"Left" => "left",
				"Center" => "center",
				"Right" => "right"
			)
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Padding Top", "salient-core"),
			"value" => "",
			"param_name" => "top_padding",
			"description" => ""
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Padding Bottom", "salient-core"),
			"value" => "",
			"param_name" => "bottom_padding",
			"description" => ""
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => esc_html__("Extra Class Name", "salient-core"),
			"param_name" => "class",
			"value" => ""
		)
		
	)
);

?>