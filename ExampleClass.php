<?php
/**
 * File Name ExampleClass.php
 * @package WordPress
 * @subpackage ParentTheme
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 2.0
 **/
####################################################################################################





/**
 * ExampleClass
 **/
$ExampleClass = new ExampleClass();
class ExampleClass {






	/**
	 * __construct
	 *
	 * @version 1.2
	 * @updated 06.22.13
	 **/
	function __construct() {

		if ( is_admin() ) {
			$this->initOptions();
			$this->initPostMeta();
		}

	} // end function __construct






	/**
	 * set
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 **/
	function set( $key, $val = false ) {

		if ( isset( $key ) AND ! empty( $key ) ) {
			$this->$key = $val;
		}

	} // end function set






	/**
	 * get
	 *
	 * @version 1.0
	 * @updated 00.00.13
	 **/
	function get( $key ) {

		if ( isset( $key ) AND ! empty( $key ) AND isset( $this->$key ) AND ! empty( $this->$key ) ) {
			return $this->$key;
		} else {
			return false;
		}

	} // end function get






	####################################################################################################
	/**
	 * Functionality
	 **/
	####################################################################################################






	/**
	 * initOptions
	 **/
	function initOptions() {

		$optionsPage = array(
			'version' => '1.0'
			,'option_name' => '_exampleOptions'
			,'option_group' => 'exampleOptions'

			,'add_submenu_page' 	=> array(
				'parent_slug' => 'options-general.php'
				,'page_title' => __( 'Example Options', 'childtheme' )
				,'menu_title' => __( 'Example Options', 'childtheme' )
				,'capability' => 'administrator'
			)

			,'options_page_title' => 'Example Options Page'
			,'options_page_desc' => 'My supper cool example options'
			,'options' => array(

				// MetaBox
				'exampleMetaBox' => array(
					'meta_box' => array(
						'title' => __( 'Example Settings', 'childtheme' )
						,'context' => 'normal'
						,'priority' => 'core'
						,'desc' => __( 'General example settings page.', 'childtheme' )
						,'save_all_settings' => __( 'Save all Settings', 'childtheme' )
					)
					,'settings' => array(
						'paragraph_text' => array(
							'type' => 'paragraph-text'
							,'validation' => 'text'
							,'title' => __( 'paragraph-text', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'This is just a paragraph of copy.', 'childtheme' )
						)
						,'text' => array(
							'type' => 'text'
							,'validation' => 'text'
							,'title' => __( 'text', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'text.', 'childtheme' )
						)
						,'password' => array(
							'type' => 'text_editor'
							,'validation' => 'text_editor'
							,'title' => __( 'text_editor', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'text_editor.', 'childtheme' )
							,'options' => array()
						)
						,'simple_text_editor' => array(
							'type' => 'simple_text_editor'
							,'validation' => 'textarea'
							,'title' => __( 'simple_text_editor', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'simple_text_editor.', 'childtheme' )
							,'options' => array()
						)
						,'textarea' => array(
							'type' => 'textarea'
							,'validation' => 'textarea'
							,'title' => __( 'textarea', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'textarea.', 'childtheme' )
						)
						,'checkbox' => array(
							'type' => 'checkbox'
							,'validation' => 'checkbox'
							,'title' => __( 'checkbox', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'checkbox.', 'childtheme' )
						)
						,'multi_checkbox' => array(
							'type' => 'multi_checkbox'
							,'validation' => 'multi_checkbox'
							,'title' => __( 'multi_checkbox', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'multi_checkbox.', 'childtheme' )
							,'options' => array(
								'yes' => 'Yes'
								,'no' => 'No'
							)
						)
						,'radio' => array(
							'type' => 'radio'
							,'validation' => 'radio'
							,'title' => __( 'radio', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'radio.', 'childtheme' )
							,'options' => array(
								'yes' => 'Yes'
								,'no' => 'No'
							)
						)
						,'select' => array(
							'type' => 'select'
							,'validation' => 'select'
							,'title' => __( 'select', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'select.', 'childtheme' )
							,'options' => array(
								'yes' => 'Yes'
								,'no' => 'No'
							)
						)
						,'select_page' => array(
							'type' => 'select_page'
							,'validation' => 'select'
							,'title' => __( 'select_page', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'select_page.', 'childtheme' )
						)
						,'custom_menu' => array(
							'type' => 'custom_menu'
							,'validation' => 'select'
							,'title' => __( 'custom_menu', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'custom_menu.', 'childtheme' )
						)
						,'select_post' => array(
							'type' => 'select_post'
							,'validation' => 'select'
							,'title' => __( 'select_post', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'select_post.', 'childtheme' )
							,'options' => array(
								'post_type' => 'post'
							)
						)
						,'select_post_type' => array(
							'type' => 'select_post_type'
							,'validation' => 'select'
							,'title' => __( 'select_post_type', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'select_post_type.', 'childtheme' )
						)
						,'select_post_status' => array(
							'type' => 'select_post_status'
							,'validation' => 'select'
							,'title' => __( 'select_post_status', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'select_post_status.', 'childtheme' )
						)
						,'select_comment_status' => array(
							'type' => 'select_comment_status'
							,'validation' => 'select'
							,'title' => __( 'select_comment_status', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'select_comment_status.', 'childtheme' )
						)
						,'select_post_author' => array(
							'type' => 'select_post_author'
							,'validation' => 'select'
							,'title' => __( 'select_post_author', 'childtheme' )
							,'val' => ''
							,'desc' => __( 'select_post_author.', 'childtheme' )
						)
					)
				) // end exampleMetaBox

			) // end options

		); // end $optionsPage


		create__options_page( apply_filters( 'ExampleClass-initOptions', $optionsPage ) );

	} // end function initOptions






	/**
	 * initPostMeta
	 **/
	function initPostMeta() {

		$postTypesArray = array( 'post' );
		$optionsArray = array(
			'id' => 'unique_meta_box_id' // required
			,'title' => 'Testing'
			,'context' => 'normal' // options: normal, side
			,'priority' => 'default' // ('high', 'core', 'default' or 'low')
			,'desc' => 'My metabox desc'
			// ,'callback' => array( &$this, 'custom_meta_box_option' )
			// ,'save_action' => false, // defaults to 'save_post'
			,'post_meta' => array( // array of post_meta fields
				array(
					'type' => 'text'
					,'validation' => 'text'
					,'title' => 'test 1'
					,'name' => '_test_1' // post_meta name and field name
					,'options' => false // used for radio, checkbox, select
					,'val' => false // Default starting value
					,'desc' => 'my cool description'
				),
			),
		);

		$postTypesArray = apply_filters( 'ExampleClass-initPostMeta-postTypesArray', $postTypesArray );
		$optionsArray = apply_filters( 'ExampleClass-initPostMeta-optionsArray', $optionsArray );

		register__postmeta( $postTypesArray, $optionsArray );

		$this->add_actions_for_meta_boxes( 'unique_meta_box_id', $postTypesArray );

	} // end function initPostMeta






	####################################################################################################
	/**
	 * MetaBox filtering
	 **/
	####################################################################################################






	/**
	 * Add Settings Field
	 *
	 * @version	0.0.1
	 * @updated 02.15.12
	 **/
	function add_actions_for_meta_boxes( $id, $post_types ) {

		foreach ( $post_types as $post_type ) {

			add_action( "$id-$post_type-add_settings_field", array( &$this, 'add_settings_field' ), 10, 2 );
			add_action( "$id-$post_type-sanitize-post_meta", array( &$this, 'sanitize_callback' ), 10, 2 );

		}

	} // end function add_actions_for_options






	/**
	 * Add Settings Field
	 *
	 * @version	0.0.1
	 * @updated 02.15.12
	 **/
	function add_settings_field( $field, $metabox ) {

		if ( is_array( $field ) AND ! empty( $field ) ) {
			extract( $field, EXTR_SKIP );
		} else {
			return;
		}

		// Options
		if ( isset( $field['options'] ) AND ! empty( $field['options'] ) ) {
			$options = $field['options'];
		} else {
			$options = false;
		}

		// Desc
		if ( isset( $field['desc'] ) AND ! empty( $field['desc'] ) ) {
			$desc = $field['desc'];
		} else {
			$desc = false;
		}

		// Desc
		if ( isset( $field['val'] ) AND ! empty( $field['val'] ) ) {
			$val = $field['val'];
		} else {
			$val = false;
		}

		switch ( $type ) {

			case "blank" :
				echo "<input type=\"text\" name=\"$name\" value=\"$val\" id=\"$id\" class=\"large-text\">";
				if ( $desc ) echo "<p class=\"description\">$desc</p>";
				break;

		}

	} // end function add_settings_field






	/**
	 * Sanitize Callback
	 *
	 * @version	0.0.1
	 * @updated 02.15.12
	 **/
	function sanitize_callback( $new_instance, $post_meta ) {

		switch ( $post_meta['validation'] ) {

			case "blank" :
				$new_instance = "$new_instance-blank";
				break;

		}

		return $new_instance;

	} // end function sanitize_callback






	/**
	 * Create Post meta form, Meta box content
	 *
	 * @version	0.0.1
	 * @updated 02.15.12
	 **/
	function custom_meta_box_option( $options, $metabox ) {

		echo "options<br />";
		print_r($options);

		echo "<br /><br />metabox<br />";
		print_r($metabox);

	} // end function custom_meta_box



} // end class ExampleClass
