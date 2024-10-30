<?php
vc_map(array(
	"name" => __("Empty Responsive Space", "ers_addons"),
    "base" => "er_space",
	"content_element" => true,
	"icon" => "icon-wpb-ui-empty_space",
	"category" => __("Content", "ers_addons"),
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"value" => "40px",
			"admin_label" => true,
			"heading" => __("Padding Space", "ers_addons"),
			"param_name" => __("ersheight", "ers_addons"),
			"description" => __("Enter empty space height, Mention Units within input field", "ers_addons"),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"admin_label" => true,
			"heading" => __("Tab Landing Empty Space", "ers_addons"),
			"param_name" => __("erstab_landscape_height", "ers_addons"),
			"description" => __("Enter empty space height, working between 0 to 1199px, Mention Units within input field", "ers_addons"),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"admin_label" => true,
			"heading" => __("Tab Portrait Empty Space", "ers_addons"),
			"param_name" => __("erstab_portrait_height", "ers_addons"),
			"description" => __("Enter empty space height, working between 0 to 1023px, Mention Units within input field", "ers_addons"),
		),
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"admin_label" => true,
			"heading" => __("Mobile Empty Space", "ers_addons"),
			"param_name" => __("ersmobile_height", "ers_addons"),
			"description" => __("Enter empty space height, working between 0 to 767px, Mention Units within input field", "ers_addons"),
		)
	)
));
