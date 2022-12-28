<?php

	/*---------------------------Width Layout -------------------*/
	$learnpress_coaching_theme_lay = get_theme_mod( 'learnpress_coaching_width_layout_options','Default');
    if($learnpress_coaching_theme_lay == 'Default'){
		$learnpress_coaching_custom_css .='body{';
			$learnpress_coaching_custom_css .='max-width: 100%;';
		$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == 'Container Layout'){
		$learnpress_coaching_custom_css .='body{';
			$learnpress_coaching_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == 'Box Layout'){
		$learnpress_coaching_custom_css .='body{';
			$learnpress_coaching_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$learnpress_coaching_custom_css .='}';
		$learnpress_coaching_custom_css .='.search-box input[type="search"]{';
			$learnpress_coaching_custom_css .='width: 75%;';
		$learnpress_coaching_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$learnpress_coaching_theme_lay = get_theme_mod( 'learnpress_coaching_slider_content_layout','Left');
    if($learnpress_coaching_theme_lay == 'Left'){
		$learnpress_coaching_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$learnpress_coaching_custom_css .='text-align:left; left:15%; right:50%;';
		$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == 'Center'){
		$learnpress_coaching_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn{';
			$learnpress_coaching_custom_css .='text-align:center; left:30%; right:30%;';
		$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == 'Right'){
		$learnpress_coaching_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .more-btn {';
			$learnpress_coaching_custom_css .='text-align:right; left:50%; right:15%;';
		$learnpress_coaching_custom_css .='}';
	}

	// slider condition
	$learnpress_coaching_slider_hide = get_theme_mod( 'learnpress_coaching_slider_hide', false);
	if($learnpress_coaching_slider_hide == false){
		$learnpress_coaching_custom_css .='#site-navigation li a{';
			$learnpress_coaching_custom_css .='color:#fff;';
		$learnpress_coaching_custom_css .='} ';
		$learnpress_coaching_custom_css .='.primary-navigation ul ul a{';
			$learnpress_coaching_custom_css .='color:#fff !important;';
		$learnpress_coaching_custom_css .='} ';
	}

	/*------------ Slider Opacity -------------------*/
	$learnpress_coaching_theme_lay = get_theme_mod( 'learnpress_coaching_slider_opacity','0.7');
	if($learnpress_coaching_theme_lay == '0'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0';
	$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == '0.1'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0.1';
	$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == '0.2'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0.2';
	$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == '0.3'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0.3';
	$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == '0.4'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0.4';
	$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == '0.5'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0.5';
	$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == '0.6'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0.6';
	$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == '0.7'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0.7';
	$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == '0.8'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0.8';
	$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == '0.9'){
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='opacity:0.9';
	$learnpress_coaching_custom_css .='}';
	}

	/*-------------- Footer Text -------------------*/
	$learnpress_coaching_footer_text_align = get_theme_mod('learnpress_coaching_footer_text_align');
	$learnpress_coaching_custom_css .='.copyright-wrapper{';
		$learnpress_coaching_custom_css .='text-align: '.esc_attr($learnpress_coaching_footer_text_align).';';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_footer_text_padding = get_theme_mod('learnpress_coaching_footer_text_padding');
	$learnpress_coaching_custom_css .='.copyright-wrapper{';
		$learnpress_coaching_custom_css .='padding-top: '.esc_attr($learnpress_coaching_footer_text_padding).'px !important; padding-bottom: '.esc_attr($learnpress_coaching_footer_text_padding).'px !important;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_footer_bg_color = get_theme_mod('learnpress_coaching_footer_bg_color');
	$learnpress_coaching_custom_css .='.footer-wp{';
		$learnpress_coaching_custom_css .='background-color: '.esc_attr($learnpress_coaching_footer_bg_color).';';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_footer_bg_image = get_theme_mod('learnpress_coaching_footer_bg_image');
	if($learnpress_coaching_footer_bg_image != false){
		$learnpress_coaching_custom_css .='.footer-wp{';
			$learnpress_coaching_custom_css .='background: url('.esc_attr($learnpress_coaching_footer_bg_image).');';
		$learnpress_coaching_custom_css .='}';
	}

	$learnpress_coaching_copyright_text_font_size = get_theme_mod('learnpress_coaching_copyright_text_font_size', 15);
	$learnpress_coaching_custom_css .='.copyright-wrapper p, .copyright-wrapper a{';
		$learnpress_coaching_custom_css .='font-size: '.esc_attr($learnpress_coaching_copyright_text_font_size).'px;';
	$learnpress_coaching_custom_css .='}';

	/*------------- Back to Top  -------------------*/
	$learnpress_coaching_back_to_top_border_radius = get_theme_mod('learnpress_coaching_back_to_top_border_radius');
	$learnpress_coaching_custom_css .='#scrollbutton i{';
		$learnpress_coaching_custom_css .='border-radius: '.esc_attr($learnpress_coaching_back_to_top_border_radius).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_scroll_icon_font_size = get_theme_mod('learnpress_coaching_scroll_icon_font_size', 22);
	$learnpress_coaching_custom_css .='#scrollbutton i{';
		$learnpress_coaching_custom_css .='font-size: '.esc_attr($learnpress_coaching_scroll_icon_font_size).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_top_bottom_scroll_padding = get_theme_mod('learnpress_coaching_top_bottom_scroll_padding', 12);
	$learnpress_coaching_custom_css .='#scrollbutton i{';
		$learnpress_coaching_custom_css .='padding-top: '.esc_attr($learnpress_coaching_top_bottom_scroll_padding).'px; padding-bottom: '.esc_attr($learnpress_coaching_top_bottom_scroll_padding).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_left_right_scroll_padding = get_theme_mod('learnpress_coaching_left_right_scroll_padding', 17);
	$learnpress_coaching_custom_css .='#scrollbutton i{';
		$learnpress_coaching_custom_css .='padding-left: '.esc_attr($learnpress_coaching_left_right_scroll_padding).'px; padding-right: '.esc_attr($learnpress_coaching_left_right_scroll_padding).'px;';
	$learnpress_coaching_custom_css .='}';

	/*-------------- Post Button  -------------------*/
	$learnpress_coaching_post_button_padding_top = get_theme_mod('learnpress_coaching_post_button_padding_top');
	$learnpress_coaching_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$learnpress_coaching_custom_css .='padding-top: '.esc_attr($learnpress_coaching_post_button_padding_top).'px; padding-bottom: '.esc_attr($learnpress_coaching_post_button_padding_top).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_post_button_padding_right = get_theme_mod('learnpress_coaching_post_button_padding_right');
	$learnpress_coaching_custom_css .='.postbtn a, #comments input[type="submit"].submit{';
		$learnpress_coaching_custom_css .='padding-left: '.esc_attr($learnpress_coaching_post_button_padding_right).'px; padding-right: '.esc_attr($learnpress_coaching_post_button_padding_right).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_post_button_border_radius = get_theme_mod('learnpress_coaching_post_button_border_radius');
	$learnpress_coaching_custom_css .='.postbtn a, #comments input[type="submit"].submit,.postbtn a:hover{';
		$learnpress_coaching_custom_css .='border-radius: '.esc_attr($learnpress_coaching_post_button_border_radius).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_post_comment_enable = get_theme_mod('learnpress_coaching_post_comment_enable',true);
	if($learnpress_coaching_post_comment_enable == false){
		$learnpress_coaching_custom_css .='#comments{';
			$learnpress_coaching_custom_css .='display: none;';
		$learnpress_coaching_custom_css .='}';
	}

	/*----------- Preloader Color Option  ----------------*/
	$learnpress_coaching_preloader_bg_color_option = get_theme_mod('learnpress_coaching_preloader_bg_color_option');
	$learnpress_coaching_preloader_icon_color_option = get_theme_mod('learnpress_coaching_preloader_icon_color_option');
	$learnpress_coaching_custom_css .='.frame{';
		$learnpress_coaching_custom_css .='background-color: '.esc_attr($learnpress_coaching_preloader_bg_color_option).';';
	$learnpress_coaching_custom_css .='}';
	$learnpress_coaching_custom_css .='.dot-1,.dot-2,.dot-3{';
		$learnpress_coaching_custom_css .='background-color: '.esc_attr($learnpress_coaching_preloader_icon_color_option).';';
	$learnpress_coaching_custom_css .='}';

	// preloader type
	$learnpress_coaching_theme_lay = get_theme_mod( 'learnpress_coaching_preloader_type','First Preloader Type');
    if($learnpress_coaching_theme_lay == 'First Preloader Type'){
		$learnpress_coaching_custom_css .='.dot-1, .dot-2, .dot-3{';
			$learnpress_coaching_custom_css .='';
		$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == 'Second Preloader Type'){
		$learnpress_coaching_custom_css .='.dot-1, .dot-2, .dot-3{';
			$learnpress_coaching_custom_css .='border-radius:0;';
		$learnpress_coaching_custom_css .='}';
	}

	/*------------------ Skin Option  -------------------*/
	$learnpress_coaching_theme_lay = get_theme_mod( 'learnpress_coaching_background_skin','Without Background');
    if($learnpress_coaching_theme_lay == 'With Background'){
		$learnpress_coaching_custom_css .='.inner-service,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
			$learnpress_coaching_custom_css .='background-color: #fff; padding:20px;';
		$learnpress_coaching_custom_css .='}';
		$learnpress_coaching_custom_css .='.login-box a{';
			$learnpress_coaching_custom_css .='background-color: #fff;';
		$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == 'Without Background'){
		$learnpress_coaching_custom_css .='{';
			$learnpress_coaching_custom_css .='background-color: transparent;';
		$learnpress_coaching_custom_css .='}';
	}

	/*-------------- Woocommerce Button  -------------------*/
	$learnpress_coaching_woocommerce_button_padding_top = get_theme_mod('learnpress_coaching_woocommerce_button_padding_top',15);
	$learnpress_coaching_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$learnpress_coaching_custom_css .='padding-top: '.esc_attr($learnpress_coaching_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($learnpress_coaching_woocommerce_button_padding_top).'px;';
	$learnpress_coaching_custom_css .='}';
	

	$learnpress_coaching_woocommerce_button_padding_right = get_theme_mod('learnpress_coaching_woocommerce_button_padding_right',15);
	$learnpress_coaching_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$learnpress_coaching_custom_css .='padding-left: '.esc_attr($learnpress_coaching_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($learnpress_coaching_woocommerce_button_padding_right).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_woocommerce_button_border_radius = get_theme_mod('learnpress_coaching_woocommerce_button_border_radius',6);
	$learnpress_coaching_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
		$learnpress_coaching_custom_css .='border-radius: '.esc_attr($learnpress_coaching_woocommerce_button_border_radius).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_related_product_enable = get_theme_mod('learnpress_coaching_related_product_enable',true);
	if($learnpress_coaching_related_product_enable == false){
		$learnpress_coaching_custom_css .='.related.products{';
			$learnpress_coaching_custom_css .='display: none;';
		$learnpress_coaching_custom_css .='}';
	}

	$learnpress_coaching_woocommerce_product_border_enable = get_theme_mod('learnpress_coaching_woocommerce_product_border_enable',true);
	if($learnpress_coaching_woocommerce_product_border_enable == false){
		$learnpress_coaching_custom_css .='.products li{';
			$learnpress_coaching_custom_css .='border: none;';
		$learnpress_coaching_custom_css .='}';
	}

	$learnpress_coaching_woocommerce_product_padding_top = get_theme_mod('learnpress_coaching_woocommerce_product_padding_top',10);
	$learnpress_coaching_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$learnpress_coaching_custom_css .='padding-top: '.esc_attr($learnpress_coaching_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($learnpress_coaching_woocommerce_product_padding_top).'px !important;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_woocommerce_product_padding_right = get_theme_mod('learnpress_coaching_woocommerce_product_padding_right',10);
	$learnpress_coaching_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$learnpress_coaching_custom_css .='padding-left: '.esc_attr($learnpress_coaching_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($learnpress_coaching_woocommerce_product_padding_right).'px !important;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_woocommerce_product_border_radius = get_theme_mod('learnpress_coaching_woocommerce_product_border_radius',3);
	$learnpress_coaching_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$learnpress_coaching_custom_css .='border-radius: '.esc_attr($learnpress_coaching_woocommerce_product_border_radius).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_woocommerce_product_box_shadow = get_theme_mod('learnpress_coaching_woocommerce_product_box_shadow', 5);
	$learnpress_coaching_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$learnpress_coaching_custom_css .='box-shadow: '.esc_attr($learnpress_coaching_woocommerce_product_box_shadow).'px '.esc_attr($learnpress_coaching_woocommerce_product_box_shadow).'px '.esc_attr($learnpress_coaching_woocommerce_product_box_shadow).'px #eee;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_woo_product_sale_top_bottom_padding = get_theme_mod('learnpress_coaching_woo_product_sale_top_bottom_padding', 0);
	$learnpress_coaching_woo_product_sale_left_right_padding = get_theme_mod('learnpress_coaching_woo_product_sale_left_right_padding', 0);
	$learnpress_coaching_custom_css .='.woocommerce span.onsale{';
		$learnpress_coaching_custom_css .='padding-top: '.esc_attr($learnpress_coaching_woo_product_sale_top_bottom_padding).'px; padding-bottom: '.esc_attr($learnpress_coaching_woo_product_sale_top_bottom_padding).'px; padding-left: '.esc_attr($learnpress_coaching_woo_product_sale_left_right_padding).'px; padding-right: '.esc_attr($learnpress_coaching_woo_product_sale_left_right_padding).'px; display:inline-block;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_woo_product_sale_border_radius = get_theme_mod('learnpress_coaching_woo_product_sale_border_radius',6);
	$learnpress_coaching_custom_css .='.woocommerce span.onsale {';
		$learnpress_coaching_custom_css .='border-radius: '.esc_attr($learnpress_coaching_woo_product_sale_border_radius).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_woo_product_sale_position = get_theme_mod('learnpress_coaching_woo_product_sale_position', 'Right');
	if($learnpress_coaching_woo_product_sale_position == 'Right' ){
		$learnpress_coaching_custom_css .='.woocommerce ul.products li.product .onsale{';
			$learnpress_coaching_custom_css .=' left:auto; right:0;';
		$learnpress_coaching_custom_css .='}';
	}elseif($learnpress_coaching_woo_product_sale_position == 'Left' ){
		$learnpress_coaching_custom_css .='.woocommerce ul.products li.product .onsale{';
			$learnpress_coaching_custom_css .=' left:0; right:auto;';
		$learnpress_coaching_custom_css .='}';
	}

	$learnpress_coaching_wooproduct_sale_font_size = get_theme_mod('learnpress_coaching_wooproduct_sale_font_size',14);
	$learnpress_coaching_custom_css .='.woocommerce span.onsale{';
		$learnpress_coaching_custom_css .='font-size: '.esc_attr($learnpress_coaching_wooproduct_sale_font_size).'px;';
	$learnpress_coaching_custom_css .='}';

	// Responsive Media
	$learnpress_coaching_post_date = get_theme_mod( 'learnpress_coaching_display_post_date',true);
	if($learnpress_coaching_post_date == true && get_theme_mod( 'learnpress_coaching_metafields_date',true) != true){
    	$learnpress_coaching_custom_css .='.metabox .entry-date{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} ';
	}
    if($learnpress_coaching_post_date == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='.metabox .entry-date{';
			$learnpress_coaching_custom_css .='display:inline-block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_post_date == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px){';
		$learnpress_coaching_custom_css .='.metabox .entry-date{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_post_author = get_theme_mod( 'learnpress_coaching_display_post_author',true);
	if($learnpress_coaching_post_author == true && get_theme_mod( 'learnpress_coaching_metafields_author',true) != true){
    	$learnpress_coaching_custom_css .='.metabox .entry-author{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} ';
	}
    if($learnpress_coaching_post_author == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='.metabox .entry-author{';
			$learnpress_coaching_custom_css .='display:inline-block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_post_author == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px){';
		$learnpress_coaching_custom_css .='.metabox .entry-author{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_post_comment = get_theme_mod( 'learnpress_coaching_display_post_comment',true);
	if($learnpress_coaching_post_comment == true && get_theme_mod( 'learnpress_coaching_metafields_comment',true) != true){
    	$learnpress_coaching_custom_css .='.metabox .entry-comments{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} ';
	}
    if($learnpress_coaching_post_comment == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='.metabox .entry-comments{';
			$learnpress_coaching_custom_css .='display:inline-block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_post_comment == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px){';
		$learnpress_coaching_custom_css .='.metabox .entry-comments{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_post_time = get_theme_mod( 'learnpress_coaching_display_post_time',false);
	if($learnpress_coaching_post_time == true && get_theme_mod( 'learnpress_coaching_metafields_time',false) != true){
    	$learnpress_coaching_custom_css .='.metabox .entry-time{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} ';
	}
    if($learnpress_coaching_post_time == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='.metabox .entry-time{';
			$learnpress_coaching_custom_css .='display:inline-block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_post_time == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px){';
		$learnpress_coaching_custom_css .='.metabox .entry-time{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	if($learnpress_coaching_post_date == false && $learnpress_coaching_post_author == false && $learnpress_coaching_post_comment == false && $learnpress_coaching_post_time == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
    	$learnpress_coaching_custom_css .='.metabox {';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_metafields_date = get_theme_mod( 'learnpress_coaching_metafields_date',true);
	$learnpress_coaching_metafields_author = get_theme_mod( 'learnpress_coaching_metafields_author',true);
	$learnpress_coaching_metafields_comment = get_theme_mod( 'learnpress_coaching_metafields_comment',true);
	$learnpress_coaching_metafields_time = get_theme_mod( 'learnpress_coaching_metafields_time',true);
	if($learnpress_coaching_metafields_date == false && $learnpress_coaching_metafields_author == false && $learnpress_coaching_metafields_comment == false && $learnpress_coaching_metafields_time == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width: 1440px) and (min-width:576px) {';
    	$learnpress_coaching_custom_css .='.metabox {';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_slider = get_theme_mod( 'learnpress_coaching_display_slider',false);
	if($learnpress_coaching_slider == true && get_theme_mod( 'learnpress_coaching_slider_hide', false) == false){
    	$learnpress_coaching_custom_css .='#slider{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} ';
	}
    if($learnpress_coaching_slider == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='#slider{';
			$learnpress_coaching_custom_css .='display:block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_slider == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px){';
		$learnpress_coaching_custom_css .='#slider{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_sidebar = get_theme_mod( 'learnpress_coaching_display_sidebar',true);
    if($learnpress_coaching_sidebar == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='#sidebar{';
			$learnpress_coaching_custom_css .='display:block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_sidebar == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='#sidebar{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_scroll = get_theme_mod( 'learnpress_coaching_display_scrolltop',true);
	if($learnpress_coaching_scroll == true && get_theme_mod( 'learnpress_coaching_hide_show_scroll',true) != true){
    	$learnpress_coaching_custom_css .='#scrollbutton i{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} ';
	}
    if($learnpress_coaching_scroll == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='#scrollbutton i{';
			$learnpress_coaching_custom_css .='display:block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_scroll == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px){';
		$learnpress_coaching_custom_css .='#scrollbutton i{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_preloader = get_theme_mod( 'learnpress_coaching_display_preloader',false);
	if($learnpress_coaching_preloader == true && get_theme_mod( 'learnpress_coaching_preloader',false) != true){
    	$learnpress_coaching_custom_css .='.frame{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} ';
	}
    if($learnpress_coaching_preloader == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='.frame{';
			$learnpress_coaching_custom_css .='display:block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_preloader == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px){';
		$learnpress_coaching_custom_css .='.frame{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_search = get_theme_mod( 'learnpress_coaching_display_search_category',true);
	if($learnpress_coaching_search == true && get_theme_mod( 'learnpress_coaching_search_enable_disable',true) != true){
    	$learnpress_coaching_custom_css .='.search-cat-box{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} ';
	}
    if($learnpress_coaching_search == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='.search-cat-box{';
			$learnpress_coaching_custom_css .='display:block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_search == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px){';
		$learnpress_coaching_custom_css .='.search-cat-box{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	$learnpress_coaching_myaccount = get_theme_mod( 'learnpress_coaching_display_myaccount',true);
	if($learnpress_coaching_myaccount == true && get_theme_mod( 'learnpress_coaching_myaccount_enable_disable',true) != true){
    	$learnpress_coaching_custom_css .='.login-box{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} ';
	}
    if($learnpress_coaching_myaccount == true){
    	$learnpress_coaching_custom_css .='@media screen and (max-width:575px) {';
		$learnpress_coaching_custom_css .='.login-box{';
			$learnpress_coaching_custom_css .='display:block;';
		$learnpress_coaching_custom_css .='} }';
	}else if($learnpress_coaching_myaccount == false){
		$learnpress_coaching_custom_css .='@media screen and (max-width:575px){';
		$learnpress_coaching_custom_css .='.login-box{';
			$learnpress_coaching_custom_css .='display:none;';
		$learnpress_coaching_custom_css .='} }';
	}

	// menu settings
	$learnpress_coaching_menu_font_size_option = get_theme_mod('learnpress_coaching_menu_font_size_option',14);
	$learnpress_coaching_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
		$learnpress_coaching_custom_css .='font-size: '.esc_attr($learnpress_coaching_menu_font_size_option).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_menu_padding = get_theme_mod('learnpress_coaching_menu_padding');
	$learnpress_coaching_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
		$learnpress_coaching_custom_css .='padding: '.esc_attr($learnpress_coaching_menu_padding).'px;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_theme_lay = get_theme_mod( 'learnpress_coaching_text_tranform_menu','Capitalize');
    if($learnpress_coaching_theme_lay == 'Uppercase'){
		$learnpress_coaching_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
			$learnpress_coaching_custom_css .='';
		$learnpress_coaching_custom_css .='}';
	}else if($learnpress_coaching_theme_lay == 'Lowercase'){
		$learnpress_coaching_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
			$learnpress_coaching_custom_css .='text-transform: lowercase;';
		$learnpress_coaching_custom_css .='}';
	}
	else if($learnpress_coaching_theme_lay == 'Capitalize'){
		$learnpress_coaching_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
			$learnpress_coaching_custom_css .='text-transform: Capitalize;';
		$learnpress_coaching_custom_css .='}';
	}

	// menu font weight
	$learnpress_coaching_font_weight_option_menu = get_theme_mod( 'learnpress_coaching_font_weight_option_menu','500');
	if($learnpress_coaching_font_weight_option_menu != ''){
		$learnpress_coaching_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
			$learnpress_coaching_custom_css .='font-weight: '.esc_attr($learnpress_coaching_font_weight_option_menu).';';
		$learnpress_coaching_custom_css .='}';
	}

	// slider height
	$learnpress_coaching_option_slider_height = get_theme_mod('learnpress_coaching_option_slider_height');
	$learnpress_coaching_custom_css .='#slider img{';
		$learnpress_coaching_custom_css .='height: '.esc_attr($learnpress_coaching_option_slider_height).'px;';
	$learnpress_coaching_custom_css .='}';

	// slider content spacing
	$learnpress_coaching_slider_content_top_padding = get_theme_mod('learnpress_coaching_slider_content_top_padding');
	$learnpress_coaching_slider_content_left_padding = get_theme_mod('learnpress_coaching_slider_content_left_padding');
	$learnpress_coaching_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$learnpress_coaching_custom_css .='top: '.esc_attr($learnpress_coaching_slider_content_top_padding).'%; bottom: '.esc_attr($learnpress_coaching_slider_content_top_padding).'%;left: '.esc_attr($learnpress_coaching_slider_content_left_padding).'%;right: '.esc_attr($learnpress_coaching_slider_content_left_padding).'%;';
	$learnpress_coaching_custom_css .='}';

	// slider overlay
	$learnpress_coaching_enable_slider_overlay = get_theme_mod('learnpress_coaching_enable_slider_overlay', true);
	if($learnpress_coaching_enable_slider_overlay == false){
		$learnpress_coaching_custom_css .='#slider image{';
			$learnpress_coaching_custom_css .='opacity:1;';
		$learnpress_coaching_custom_css .='}';
	} 
	$learnpress_coaching_slider_overlay_color = get_theme_mod('learnpress_coaching_slider_overlay_color', true);
	if($learnpress_coaching_enable_slider_overlay != false){
		$learnpress_coaching_custom_css .='#slider{';
			$learnpress_coaching_custom_css .='background-color: '.esc_attr($learnpress_coaching_slider_overlay_color).';';
		$learnpress_coaching_custom_css .='}';
	}

	//  comment form width
	$learnpress_coaching_comment_form_width = get_theme_mod( 'learnpress_coaching_comment_form_width');
	$learnpress_coaching_custom_css .='#comments textarea{';
		$learnpress_coaching_custom_css .='width: '.esc_attr($learnpress_coaching_comment_form_width).'%;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_title_comment_form = get_theme_mod('learnpress_coaching_title_comment_form', 'Leave a Reply');
	if($learnpress_coaching_title_comment_form == ''){
		$learnpress_coaching_custom_css .='#comments h2#reply-title {';
			$learnpress_coaching_custom_css .='display: none;';
		$learnpress_coaching_custom_css .='}';
	}

	$learnpress_coaching_comment_form_button_content = get_theme_mod('learnpress_coaching_comment_form_button_content', 'Post Comment');
	if($learnpress_coaching_comment_form_button_content == ''){
		$learnpress_coaching_custom_css .='#comments p.form-submit {';
			$learnpress_coaching_custom_css .='display: none;';
		$learnpress_coaching_custom_css .='}';
	}

	// featured image setting
	$learnpress_coaching_image_border_radius = get_theme_mod('learnpress_coaching_image_border_radius', 0);
	$learnpress_coaching_custom_css .='.box-image img, .content_box img{';
		$learnpress_coaching_custom_css .='border-radius: '.esc_attr($learnpress_coaching_image_border_radius).'%;';
	$learnpress_coaching_custom_css .='}';

	$learnpress_coaching_image_box_shadow = get_theme_mod('learnpress_coaching_image_box_shadow',0);
	$learnpress_coaching_custom_css .='.box-image img, .content_box img{';
		$learnpress_coaching_custom_css .='box-shadow: '.esc_attr($learnpress_coaching_image_box_shadow).'px '.esc_attr($learnpress_coaching_image_box_shadow).'px '.esc_attr($learnpress_coaching_image_box_shadow).'px #b5b5b5;';
	$learnpress_coaching_custom_css .='}';

	// Post Block
	$learnpress_coaching_post_block_option = get_theme_mod( 'learnpress_coaching_post_block_option','By Block');
    if($learnpress_coaching_post_block_option == 'By Without Block'){
		$learnpress_coaching_custom_css .='.gridbox .inner-service, .related-inner-box, .mainbox-post, .layout2, .layout1, .post_format-post-format-video,.post_format-post-format-image,.post_format-post-format-audio, .post_format-post-format-gallery, .mainbox{';
			$learnpress_coaching_custom_css .='border:none; margin:30px 0;';
		$learnpress_coaching_custom_css .='}';
	}

	// post image 
	$learnpress_coaching_post_featured_color = get_theme_mod('learnpress_coaching_post_featured_color', '#8b6aff');
	$learnpress_coaching_post_featured_image = get_theme_mod('learnpress_coaching_post_featured_image','Image');
	if($learnpress_coaching_post_featured_image == 'Color'){
		$learnpress_coaching_custom_css .='.post-color{';
			$learnpress_coaching_custom_css .='background-color: '.esc_attr($learnpress_coaching_post_featured_color).';';
		$learnpress_coaching_custom_css .='}';
	}

	// featured image dimention
	$learnpress_coaching_post_featured_image_dimention = get_theme_mod('learnpress_coaching_post_featured_image_dimention', 'Default');
	$learnpress_coaching_post_featured_image_custom_width = get_theme_mod('learnpress_coaching_post_featured_image_custom_width');
	$learnpress_coaching_post_featured_image_custom_height = get_theme_mod('learnpress_coaching_post_featured_image_custom_height');
	if($learnpress_coaching_post_featured_image_dimention == 'Custom'){
		$learnpress_coaching_custom_css .='.box-image img{';
			$learnpress_coaching_custom_css .='width: '.esc_attr($learnpress_coaching_post_featured_image_custom_width).'px; height: '.esc_attr($learnpress_coaching_post_featured_image_custom_height).'px;';
		$learnpress_coaching_custom_css .='}';
	}

	// featured image dimention
	$learnpress_coaching_custom_post_color_width = get_theme_mod('learnpress_coaching_custom_post_color_width');
	$learnpress_coaching_custom_post_color_height = get_theme_mod('learnpress_coaching_custom_post_color_height');
	if($learnpress_coaching_post_featured_image == 'Color'){
		$learnpress_coaching_custom_css .='.post-color{';
			$learnpress_coaching_custom_css .='width: '.esc_attr($learnpress_coaching_custom_post_color_width).'px; height: '.esc_attr($learnpress_coaching_custom_post_color_height).'px;';
		$learnpress_coaching_custom_css .='}';
	}

	// site title font size
	$learnpress_coaching_site_title_font_size = get_theme_mod('learnpress_coaching_site_title_font_size', 30);
	$learnpress_coaching_custom_css .='.logo h1, .site-title a, .logo .site-title a{';
	$learnpress_coaching_custom_css .='font-size: '.esc_attr($learnpress_coaching_site_title_font_size).'px;';
	$learnpress_coaching_custom_css .='}';

	// site tagline font size
	$learnpress_coaching_site_tagline_font_size = get_theme_mod('learnpress_coaching_site_tagline_font_size', 15);
	$learnpress_coaching_custom_css .='p.site-description{';
	$learnpress_coaching_custom_css .='font-size: '.esc_attr($learnpress_coaching_site_tagline_font_size).'px;';
	$learnpress_coaching_custom_css .='}';

	// site logo padding 
	$learnpress_coaching_logo_padding = get_theme_mod('learnpress_coaching_logo_padding', '');
	$learnpress_coaching_custom_css .='.logo{';
	$learnpress_coaching_custom_css .='padding: '.esc_attr($learnpress_coaching_logo_padding).'px !important;';
	$learnpress_coaching_custom_css .='}';

	// woocommerce Product Navigation
	$learnpress_coaching_wooproducts_nav = get_theme_mod('learnpress_coaching_wooproducts_nav', 'Yes');
	if($learnpress_coaching_wooproducts_nav == 'No'){
		$learnpress_coaching_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$learnpress_coaching_custom_css .='display: none;';
		$learnpress_coaching_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$learnpress_coaching_footer_text_bg_color = get_theme_mod('learnpress_coaching_footer_text_bg_color');
	if($learnpress_coaching_footer_text_bg_color != false){
		$learnpress_coaching_custom_css .='.copyright-wrapper{';
			$learnpress_coaching_custom_css .='background-color: '.esc_attr($learnpress_coaching_footer_text_bg_color).';';
		$learnpress_coaching_custom_css .='}';
	}

	// social icons font size
	$learnpress_coaching_social_icons_size = get_theme_mod('learnpress_coaching_social_icons_size', 13);
	$learnpress_coaching_custom_css .='.social-icons i{';
		$learnpress_coaching_custom_css .='font-size: '.esc_attr($learnpress_coaching_social_icons_size).'px;';
	$learnpress_coaching_custom_css .='}';

	// site toggle button color
	$learnpress_coaching_toggle_button_color = get_theme_mod('learnpress_coaching_toggle_button_color');
	$learnpress_coaching_custom_css .='.toggle-menu i{';
		$learnpress_coaching_custom_css .='color: '.esc_attr($learnpress_coaching_toggle_button_color).' !important;';
	$learnpress_coaching_custom_css .='}';

	// menu color
	$learnpress_coaching_menu_color = get_theme_mod('learnpress_coaching_menu_color');

	$learnpress_coaching_custom_css .='.primary-navigation a, .primary-navigation ul li a{';
			$learnpress_coaching_custom_css .='color: '.esc_attr($learnpress_coaching_menu_color).' !important;';
	$learnpress_coaching_custom_css .='}';

// Sub menu color
	$learnpress_coaching_sub_menu_color = get_theme_mod('learnpress_coaching_sub_menu_color');

	$learnpress_coaching_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a{';
			$learnpress_coaching_custom_css .='color: '.esc_attr($learnpress_coaching_sub_menu_color).' !important;';
	$learnpress_coaching_custom_css .='}';

// menu hover color
	$learnpress_coaching_menu_hover_color = get_theme_mod('learnpress_coaching_menu_hover_color');

	$learnpress_coaching_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover{';
			$learnpress_coaching_custom_css .='color: '.esc_attr($learnpress_coaching_menu_hover_color).' !important;';
	$learnpress_coaching_custom_css .='}';

	// site title color
	$learnpress_coaching_site_title_color = get_theme_mod('learnpress_coaching_site_title_color');
	$learnpress_coaching_custom_css .='.logo h1 a, .logo p.site-title a{';
		$learnpress_coaching_custom_css .='color: '.esc_attr($learnpress_coaching_site_title_color).' !important;';
	$learnpress_coaching_custom_css .='}';

	// site tagline color
	$learnpress_coaching_site_tagline_color = get_theme_mod('learnpress_coaching_site_tagline_color');
	$learnpress_coaching_custom_css .='.logo p.site-description{';
		$learnpress_coaching_custom_css .='color: '.esc_attr($learnpress_coaching_site_tagline_color).' !important;';
	$learnpress_coaching_custom_css .='}';

	// site logo margin 
	$learnpress_coaching_logo_margin = get_theme_mod('learnpress_coaching_logo_margin', '');
	$learnpress_coaching_custom_css .='.logo{';
	$learnpress_coaching_custom_css .='margin: '.esc_attr($learnpress_coaching_logo_margin).'px ;';
	$learnpress_coaching_custom_css .='}';



	

