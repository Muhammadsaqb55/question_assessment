<?php

$modern_furniture_store_tp_theme_css = '';

//preloader

$modern_furniture_store_tp_preloader_color1_option = get_theme_mod('modern_furniture_store_tp_preloader_color1_option');
$modern_furniture_store_tp_preloader_color2_option = get_theme_mod('modern_furniture_store_tp_preloader_color2_option');
$modern_furniture_store_tp_preloader_bg_color_option = get_theme_mod('modern_furniture_store_tp_preloader_bg_color_option');

if($modern_furniture_store_tp_preloader_color1_option != false){
$modern_furniture_store_tp_theme_css .='.center1{';
	$modern_furniture_store_tp_theme_css .='border-color: '.esc_attr($modern_furniture_store_tp_preloader_color1_option).' !important;';
$modern_furniture_store_tp_theme_css .='}';
}
if($modern_furniture_store_tp_preloader_color1_option != false){
$modern_furniture_store_tp_theme_css .='.center1 .ring::before{';
	$modern_furniture_store_tp_theme_css .='background: '.esc_attr($modern_furniture_store_tp_preloader_color1_option).' !important;';
$modern_furniture_store_tp_theme_css .='}';
}
if($modern_furniture_store_tp_preloader_color2_option != false){
$modern_furniture_store_tp_theme_css .='.center2{';
	$modern_furniture_store_tp_theme_css .='border-color: '.esc_attr($modern_furniture_store_tp_preloader_color2_option).' !important;';
$modern_furniture_store_tp_theme_css .='}';
}
if($modern_furniture_store_tp_preloader_color2_option != false){
$modern_furniture_store_tp_theme_css .='.center2 .ring::before{';
	$modern_furniture_store_tp_theme_css .='background: '.esc_attr($modern_furniture_store_tp_preloader_color2_option).' !important;';
$modern_furniture_store_tp_theme_css .='}';
}
if($modern_furniture_store_tp_preloader_bg_color_option != false){
$modern_furniture_store_tp_theme_css .='.loader{';
	$modern_furniture_store_tp_theme_css .='background: '.esc_attr($modern_furniture_store_tp_preloader_bg_color_option).';';
$modern_furniture_store_tp_theme_css .='}';
}

// footer-bg-color
$modern_furniture_store_tp_footer_bg_color_option = get_theme_mod('modern_furniture_store_tp_footer_bg_color_option');

if($modern_furniture_store_tp_footer_bg_color_option != false){
$modern_furniture_store_tp_theme_css .='#footer{';
	$modern_furniture_store_tp_theme_css .='background: '.esc_attr($modern_furniture_store_tp_footer_bg_color_option).' !important;';
$modern_furniture_store_tp_theme_css .='}';
}