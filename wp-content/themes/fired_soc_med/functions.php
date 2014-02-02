<?php
	/*========= ENQUEUE STYLES ==========*/
	function fired_socmed_styles() {
		wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css', array());
		wp_enqueue_style('open-sans-font', 'http://fonts.googleapis.com/css?family=Open+Sans', array());
	}
	add_action('wp_enqueue_scripts', 'fired_socmed_styles');

	//========= REMOVE MAIN POST EDITOR ==========
	function remove_editor() {
  		remove_post_type_support('post', 'editor');
	}
	add_action('admin_init', 'remove_editor');

	//========= REMOVE UNNECESSARY META BOXES ==========
	function remove_meta_boxes() {
		remove_meta_box('categorydiv', 'post', 'normal');
		remove_meta_box('tagsdiv-post_tag', 'post', 'normal');
		remove_meta_box('wp-content-wrap', 'post', 'normal');
		remove_meta_box('ed-toolbar', 'post', 'normal');
	}
	add_action('admin_menu', 'remove_meta_boxes');

	//========= REMOVE UNNECESSARY MENU PAGE OPTIONS ==========
	function remove_menus() {
		remove_menu_page('upload.php');
		remove_menu_page('edit.php?post_type=page');
		remove_menu_page('edit-comments.php');
		remove_menu_page('tools.php');
		remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
		remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
	}
	add_action('admin_menu', 'remove_menus');
	

	//========= ADD DATE METABOX ==========
	function date_meta_box() {
		add_meta_box(
			'date', 
			__('Add date of firing here'),  
			'date_inner_custom_box', 
			'post', 
			'normal', 
			'high'
		);
	}
	
	add_action('add_meta_boxes', 'date_meta_box');

	function date_inner_custom_box($post) { 
		wp_nonce_field('date_inner_custom_box', 'date_box_nonce' );
		$value = get_post_meta($post->ID, 'date_meta_value_key', true ); 
			echo '<label for="date">';
       			_e( "", 'date_textdomain');
  			echo '</label><br>';
 			echo '<input type="text" id="date" name="date" value="' . esc_attr($value) . '" class="large-text ui-autocomplete-input" />';
	}

	function save_date($post_id, $post) {
		if (!isset($_POST['date_box_nonce']))
			return $post_id;
		$nonce = $_POST['date_box_nonce'];
		if (!wp_verify_nonce($nonce, 'date_inner_custom_box'))
      		return $post_id;
      	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
      		return $post_id;
      	if ('page' == $_POST['post_type']) {
		    if (!current_user_can('edit_page', $post_id))
        		return $post_id;
  		} else {
    		if (!current_user_can('edit_post', $post_id))
        		return $post_id;
  		}
  		$mydata = sanitize_text_field($_POST['date']);
  		update_post_meta($post_id, 'date_meta_value_key', $mydata);
	}
	
	add_action('save_post', 'save_date');

	/*========= ADD COMPANY METABOX ==========*/
	function company_meta_box() {
		add_meta_box(
			'company', 
			__('Add company name here'),  
			'company_inner_custom_box', 
			'post', 
			'normal', 
			'high'
		);
	}
	
	add_action('add_meta_boxes', 'company_meta_box');

	function company_inner_custom_box($post) { 
		wp_nonce_field('company_inner_custom_box', 'company_box_nonce' );
		$value = get_post_meta($post->ID, 'company_meta_value_key', true ); 
			echo '<label for="company">';
       			_e( "", 'company_textdomain');
  			echo '</label><br>';
 			echo '<input type="text" id="company" name="company" value="' . esc_attr($value) . '" class="large-text ui-autocomplete-input" />';
	}

	function save_company($post_id, $post) {
		if (!isset($_POST['company_box_nonce']))
			return $post_id;
		$nonce = $_POST['company_box_nonce'];
		if (!wp_verify_nonce($nonce, 'company_inner_custom_box'))
      		return $post_id;
      	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
      		return $post_id;
      	if ('page' == $_POST['post_type']) {
		    if (!current_user_can('edit_page', $post_id))
        		return $post_id;
  		} else {
    		if (!current_user_can('edit_post', $post_id))
        		return $post_id;
  		}
  		$mydata = sanitize_text_field($_POST['company']);
  		update_post_meta($post_id, 'company_meta_value_key', $mydata);
	}
	
	add_action('save_post', 'save_company');

	/*========= ADD OFFENDED PARTY METABOX ==========*/
	function offended_meta_box() {
		add_meta_box(
			'offended', 
			__('Add offended party name here'),  
			'offended_inner_custom_box', 
			'post', 
			'normal', 
			'high'
		);
	}
	
	add_action('add_meta_boxes', 'offended_meta_box');

	function offended_inner_custom_box($post) { 
		wp_nonce_field('offended_inner_custom_box', 'offended_box_nonce' );
		$value = get_post_meta($post->ID, 'offended_meta_value_key', true ); 
			echo '<label for="offended">';
       			_e( "", 'offended_textdomain');
  			echo '</label><br>';
 			echo '<input type="text" id="offended" name="offended" value="' . esc_attr($value) . '" class="large-text ui-autocomplete-input" />';
	}

	function save_offended($post_id, $post) {
		if (!isset($_POST['offended_box_nonce']))
			return $post_id;
		$nonce = $_POST['offended_box_nonce'];
		if (!wp_verify_nonce($nonce, 'offended_inner_custom_box'))
      		return $post_id;
      	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
      		return $post_id;
      	if ('page' == $_POST['post_type']) {
		    if (!current_user_can('edit_page', $post_id))
        		return $post_id;
  		} else {
    		if (!current_user_can('edit_post', $post_id))
        		return $post_id;
  		}
  		$mydata = sanitize_text_field($_POST['offended']);
  		update_post_meta($post_id, 'offended_meta_value_key', $mydata);
	}
	
	add_action('save_post', 'save_offended');

	/*========= ADD STORY LINK METABOX ==========*/
	function link_meta_box() {
		add_meta_box(
			'link', 
			__('Add link to story here'),  
			'link_inner_custom_box', 
			'post', 
			'normal', 
			'high'
		);
	}
	
	add_action('add_meta_boxes', 'link_meta_box');

	function link_inner_custom_box($post) { 
		wp_nonce_field('link_inner_custom_box', 'link_box_nonce' );
		$value = get_post_meta($post->ID, 'link_meta_value_key', true ); 
			echo '<label for="link">';
       			_e( "", 'link_textdomain');
  			echo '</label><br>';
 			echo '<input type="text" id="link" name="link" value="' . esc_attr($value) . '" class="large-text ui-autocomplete-input" />';
	}

	function save_link($post_id, $post) {
		if (!isset($_POST['link_box_nonce']))
			return $post_id;
		$nonce = $_POST['link_box_nonce'];
		if (!wp_verify_nonce($nonce, 'link_inner_custom_box'))
      		return $post_id;
      	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
      		return $post_id;
      	if ('page' == $_POST['post_type']) {
		    if (!current_user_can('edit_page', $post_id))
        		return $post_id;
  		} else {
    		if (!current_user_can('edit_post', $post_id))
        		return $post_id;
  		}
  		$mydata = sanitize_text_field($_POST['link']);
  		update_post_meta($post_id, 'link_meta_value_key', $mydata);
	}
	
	add_action('save_post', 'save_link');
?>