<?php

// remove elements
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_button");
vc_remove_element("vc_flickr");
vc_remove_element("vc_gallery");
vc_remove_element("vc_images_carousel");

/*vc_remove_element("product");
vc_remove_element("top_rated_products");
vc_remove_element("recent_products");
vc_remove_element("featured_products");
vc_remove_element("products");
vc_remove_element("product_category");
vc_remove_element("sale_products");
vc_remove_element("best_selling_products");
vc_remove_element("product_attribute");
vc_remove_element("add_to_cart");
vc_remove_element("add_to_cart_url");
vc_remove_element("product_page");*/






// [vc_row]
vc_remove_param("vc_row", "full_width");

vc_add_param("vc_row", array(
	"type"			=> "colorpicker",
	"holder"		=> "div",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading"		=> "Font Color",
	"param_name"	=> "font_color",
	"value"			=> "#000",
));

vc_add_param("vc_row", array(
	"type" 			=> "dropdown",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> "Row Width",
	"param_name" 	=> "type",
	"value" 		=> array(
		"Full" 		=> "full_width",
		"Boxed" 	=> "boxed"
	)
));

vc_add_param("vc_row", array(
	"type" 			=> "dropdown",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> "Row Height",
	"param_name" 	=> "row_height",
	"value" 		=> array(
		"Normal" 	=> "normal",
		"Manual" 	=> "manual_height"
	)
));

vc_add_param("vc_row", array(
	"type" 			=> "textfield",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> __("Height"),
	"param_name" 	=> "height",
	"value" 		=> "",
	"description" 	=> "",
	"dependency" 	=> Array('element' => "row_height", 'value' => array('manual_height'))
));

vc_add_param("vc_row", array(
	"type" 			=> "dropdown",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> "Columns Height",
	"param_name" 	=> "columns_height",
	"value" 		=> array(
		"Normal" 				=> "normal_height",
		"Fit Columns Height" 	=> "adjust_cols_height"
	),
	"dependency" 	=> Array('element' => "row_height", 'value' => array('manual_height'))
));





// [vc_row_inner]
vc_add_param("vc_row_inner", array(
	"type" 			=> "dropdown",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> "Row Type",
	"param_name" 	=> "type",
	"value" => array(
		"Full Width" 	=> "full_width",
		"Boxed" 		=> "boxed"
	)
));







// [vc_separator]
vc_remove_param("vc_separator", "color");




// [vc_text_separator]
vc_remove_param("vc_text_separator", "color");

vc_add_param("vc_text_separator", array(
	"type" 			=> "textfield",
	"holder" 		=> "div",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> __("Subtitle"),
	"param_name" 	=> "subtitle",
	"value" 		=> "",
	"description" 	=> ""
));

vc_add_param("vc_text_separator", array(
	"type" 			=> "dropdown",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> "Title Size",
	"param_name" 	=> "title_size",
	"value" => array(
		"H1" => "h1",
		"H2" => "h2",
		"H3" => "h3",
		"H4" => "h4",
		"H5" => "h5",
		"H6" => "h6",
		"Paragraph" => "div"
	)
));

vc_add_param("vc_text_separator", array(
	"type" 			=> "dropdown",
	"class"			=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> "Subtitle Size",
	"param_name" 	=> "subtitle_size",
	"value" => array(
		"H5" => "h5",
		"H1" => "h1",
		"H2" => "h2",
		"H3" => "h3",
		"H4" => "h4",
		"H6" => "h6",
		"Paragraph" => "div"
	)
));




// [vc_button2]
$setting = array (
  'name' => 'Button',
  'category' => 'Content',
);
//vc_map_update('vc_button2', $setting);

vc_remove_param("vc_button2", "style");

vc_add_param("vc_button2", array(
	"type" 			=> "dropdown",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> "Style",
	"param_name"	=> "style",
	"value" => array(
		"Square" 	=> "square",
		"Square Outlined" => "square_outlined"
	)
));

vc_add_param("vc_button2", array(
	"type" 			=> "dropdown",
	"class" 		=> "hide_in_vc_editor",
	"admin_label" 	=> true,
	"heading" 		=> "Align",
	"param_name" 	=> "align",
	"value" => array(
		"Left" 		=> "left",
		"Center" 	=> "center",
		"Right" 	=> "right"
	)
));




// [vc_widget_sidebar]
$setting = array (
  'category' => 'Content'
);
//vc_map_update('vc_widget_sidebar', $setting);

vc_remove_param("vc_widget_sidebar", "title");




// [vc_raw_html]
$setting = array (
  'category' => 'Content'
);
//vc_map_update('vc_raw_html', $setting);




// [vc_raw_js]
$setting = array (
  'category' => 'Content'
);
//vc_map_update('vc_raw_js', $setting);




// [vc_single_image]
vc_remove_param("vc_single_image", "title");




// [vc_gallery]
/*vc_remove_param("vc_gallery", "title");
vc_remove_param("vc_gallery", "type");
vc_remove_param("vc_gallery", "interval");*/




// [vc_message]
vc_remove_param("vc_message", "style");





// [vc_gmaps]
vc_remove_param("vc_gmaps", "title");




// [vc_accordion]
vc_remove_param("vc_accordion", "title");




// [vc_progress_bar]
vc_remove_param("vc_progress_bar", "title");
vc_remove_param("vc_progress_bar", "options");



// [vc_pie]
vc_remove_param("vc_pie", "title");



// [vc_tabs]
vc_remove_param("vc_tabs", "title");




// [contact-form-7]
if (function_exists('wpcf7')) {
	vc_remove_param("contact-form-7", "title");
}



// [rev_slider_vc]
if (function_exists('rev_slider_shortcode')) {
	vc_remove_param("rev_slider_vc", "title");
}