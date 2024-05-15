<?php

	$modern_furniture_store_tp_theme_css = "";

//body-layout
$modern_furniture_store_theme_lay = get_theme_mod( 'modern_furniture_store_tp_body_layout_settings','Full');
if($modern_furniture_store_theme_lay == 'Container'){
$modern_furniture_store_tp_theme_css .='body{';
   $modern_furniture_store_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$modern_furniture_store_tp_theme_css .='}';
$modern_furniture_store_tp_theme_css .='@media screen and (max-width:575px){';
$modern_furniture_store_tp_theme_css .='body{';
	$modern_furniture_store_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
$modern_furniture_store_tp_theme_css .='} }';
$modern_furniture_store_tp_theme_css .='.page-template-front-page .menubar{';
	$modern_furniture_store_tp_theme_css .='position: static;';
$modern_furniture_store_tp_theme_css .='}';
$modern_furniture_store_tp_theme_css .='.scrolled{';
	$modern_furniture_store_tp_theme_css .='width: auto; left:0; right:0;';
$modern_furniture_store_tp_theme_css .='}';
}else if($modern_furniture_store_theme_lay == 'Container Fluid'){
$modern_furniture_store_tp_theme_css .='body{';
	$modern_furniture_store_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$modern_furniture_store_tp_theme_css .='}';
$modern_furniture_store_tp_theme_css .='.page-template-front-page .menubar{';
	$modern_furniture_store_tp_theme_css .='width: 99%';
$modern_furniture_store_tp_theme_css .='}';
$modern_furniture_store_tp_theme_css .='@media screen and (max-width:575px){';
$modern_furniture_store_tp_theme_css .='body{';
	$modern_furniture_store_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
$modern_furniture_store_tp_theme_css .='} }';
$modern_furniture_store_tp_theme_css .='.scrolled{';
	$modern_furniture_store_tp_theme_css .='width: auto; left:0; right:0;';
$modern_furniture_store_tp_theme_css .='}';
}else if($modern_furniture_store_theme_lay == 'Full'){
$modern_furniture_store_tp_theme_css .='body{';
	$modern_furniture_store_tp_theme_css .='max-width: 100%;';
$modern_furniture_store_tp_theme_css .='}';
}

//scrol-top
$modern_furniture_store_scroll_position = get_theme_mod( 'modern_furniture_store_scroll_top_position','Right');
if($modern_furniture_store_scroll_position == 'Right'){
$modern_furniture_store_tp_theme_css .='#return-to-top{';
    $modern_furniture_store_tp_theme_css .='right: 20px;';
$modern_furniture_store_tp_theme_css .='}';
}else if($modern_furniture_store_scroll_position == 'Left'){
$modern_furniture_store_tp_theme_css .='#return-to-top{';
    $modern_furniture_store_tp_theme_css .='left: 20px;';
$modern_furniture_store_tp_theme_css .='}';
}else if($modern_furniture_store_scroll_position == 'Center'){
$modern_furniture_store_tp_theme_css .='#return-to-top{';
    $modern_furniture_store_tp_theme_css .='right: 50%;left: 50%;';
$modern_furniture_store_tp_theme_css .='}';
}

//Social icon Font size
$modern_furniture_store_social_icon_fontsize = get_theme_mod('modern_furniture_store_social_icon_fontsize');
	$modern_furniture_store_tp_theme_css .='.social-media i {';
$modern_furniture_store_tp_theme_css .='font-size: '.esc_attr($modern_furniture_store_social_icon_fontsize).'px;';
$modern_furniture_store_tp_theme_css .='}';

// site title font size option
$modern_furniture_store_site_title_font_size = get_theme_mod('modern_furniture_store_site_title_font_size', 25);{
$modern_furniture_store_tp_theme_css .='.logo h1 , .logo p a{';
	$modern_furniture_store_tp_theme_css .='font-size: '.esc_attr($modern_furniture_store_site_title_font_size).'px;';
$modern_furniture_store_tp_theme_css .='}';
}

//site tagline font size option
$modern_furniture_store_site_tagline_font_size = get_theme_mod('modern_furniture_store_site_tagline_font_size', 15);{
$modern_furniture_store_tp_theme_css .='.logo p{';
	$modern_furniture_store_tp_theme_css .='font-size: '.esc_attr($modern_furniture_store_site_tagline_font_size).'px;';
$modern_furniture_store_tp_theme_css .='}';
}

//return to header mobile				
$modern_furniture_store_return_to_header_mob = get_theme_mod( 'modern_furniture_store_return_to_header_mob',false);
if($modern_furniture_store_return_to_header_mob == true && get_theme_mod( 'modern_furniture_store_return_to_header',true) != true){
$modern_furniture_store_tp_theme_css .='.return-to-header{';
	$modern_furniture_store_tp_theme_css .='display:none;';
$modern_furniture_store_tp_theme_css .='} ';
}
if($modern_furniture_store_return_to_header_mob == true){
$modern_furniture_store_tp_theme_css .='@media screen and (max-width:575px) {';
$modern_furniture_store_tp_theme_css .='.return-to-header{';
	$modern_furniture_store_tp_theme_css .='display:block;';
$modern_furniture_store_tp_theme_css .='} }';
}else if($modern_furniture_store_return_to_header_mob == false){
$modern_furniture_store_tp_theme_css .='@media screen and (max-width:575px){';
$modern_furniture_store_tp_theme_css .='.return-to-header{';
	$modern_furniture_store_tp_theme_css .='display:none;';
$modern_furniture_store_tp_theme_css .='} }';
}

//slider mobile	
$modern_furniture_store_slider_buttom_mob = get_theme_mod( 'modern_furniture_store_slider_buttom_mob',true);
if($modern_furniture_store_slider_buttom_mob == true && get_theme_mod( 'modern_furniture_store_slider_button',true) != true){
$modern_furniture_store_tp_theme_css .='#slider .home-btn{';
	$modern_furniture_store_tp_theme_css .='display:none;';
$modern_furniture_store_tp_theme_css .='} ';
}
if($modern_furniture_store_slider_buttom_mob == true){
$modern_furniture_store_tp_theme_css .='@media screen and (max-width:575px) {';
$modern_furniture_store_tp_theme_css .='#slider .home-btn{';
	$modern_furniture_store_tp_theme_css .='display:block;';
$modern_furniture_store_tp_theme_css .='} }';
}else if($modern_furniture_store_slider_buttom_mob == false){
$modern_furniture_store_tp_theme_css .='@media screen and (max-width:575px){';
$modern_furniture_store_tp_theme_css .='#slider .home-btn{';
	$modern_furniture_store_tp_theme_css .='display:none;';
$modern_furniture_store_tp_theme_css .='} }';
}

//footer image
$modern_furniture_store_footer_widget_image = get_theme_mod('modern_furniture_store_footer_widget_image');
if($modern_furniture_store_footer_widget_image != false){
$modern_furniture_store_tp_theme_css .='#footer{';
	$modern_furniture_store_tp_theme_css .='background: url('.esc_attr($modern_furniture_store_footer_widget_image).');';
$modern_furniture_store_tp_theme_css .='}';
}

// related product
$modern_furniture_store_related_product = get_theme_mod('modern_furniture_store_related_product',true);
if($modern_furniture_store_related_product == false){
$modern_furniture_store_tp_theme_css .='.related.products{';
	$modern_furniture_store_tp_theme_css .='display: none;';
$modern_furniture_store_tp_theme_css .='}';
}

//menu font size
$modern_furniture_store_menu_font_size = get_theme_mod('modern_furniture_store_menu_font_size', 15);{
$modern_furniture_store_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after, .main-navigation li.menu-item-has-children:after{';
	$modern_furniture_store_tp_theme_css .='font-size: '.esc_attr($modern_furniture_store_menu_font_size).'px;';
$modern_furniture_store_tp_theme_css .='}';
}

// menu text tranform
$modern_furniture_store_menu_text_tranform = get_theme_mod( 'modern_furniture_store_menu_text_tranform','Capitalize');
if($modern_furniture_store_menu_text_tranform == 'Uppercase'){
$modern_furniture_store_tp_theme_css .='.main-navigation a {';
	$modern_furniture_store_tp_theme_css .='text-transform: uppercase;';
$modern_furniture_store_tp_theme_css .='}';
}else if($modern_furniture_store_menu_text_tranform == 'Lowercase'){
$modern_furniture_store_tp_theme_css .='.main-navigation a {';
	$modern_furniture_store_tp_theme_css .='text-transform: lowercase;';
$modern_furniture_store_tp_theme_css .='}';
}
else if($modern_furniture_store_menu_text_tranform == 'Capitalize'){
$modern_furniture_store_tp_theme_css .='.main-navigation a {';
	$modern_furniture_store_tp_theme_css .='text-transform: capitalize;';
$modern_furniture_store_tp_theme_css .='}';
}