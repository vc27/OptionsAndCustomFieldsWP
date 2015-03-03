<?php
/**
 * File Name initiate.php
 * @package ProjectName
 * @license GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version 1.0.0
 **/
#################################################################################################### */


/**
 * sanitize__value --> Wrapper Function
 *
 * @version 1.0
 * @updated	05.08.13
 **/
if ( ! function_exists( 'sanitize__value' ) ) {
function sanitize__value( $type, $value, $filter = false, $args = false ) {

	$output = false;
	if ( ! class_exists( 'SanitizeValueWP' ) ) {
		require_once( 'SanitizeValueWP.php' );
	}

	if ( class_exists( 'SanitizeValueWP' ) ) {

		$SanitizeValueWP = new SanitizeValueWP();
		$output = $SanitizeValueWP->sanitize( $type, $value, $filter, $args );

	}

	return $output;

} // end function sanitize__value
}






/**
 * form__field --> Wrapper Function
 *
 * @version 1.0
 * @updated	05.15.13
 **/
if ( ! function_exists( 'form__field' ) ) {
function form__field( $type, $name, $val, $id = false, $class = false, $desc = false, $options = false, $action = false, $args = false ) {

	$output = false;
	if ( ! class_exists( 'FormFieldsWP' ) ) {
		require_once( 'FormFieldsWP.php' );
	}

	if ( class_exists( 'FormFieldsWP' ) ) {

		$FormFieldsWP = new FormFieldsWP();
		$output = $FormFieldsWP->field( $type, $name, $val, $id, $class, $desc, $options, $action, $args );

	}

	return $output;

} // end function form__field
}






/**
 * create__options_page --> Wrapper Function
 *
 * @version 1.0
 * @updated	05.23.13
 *
 * Note:
 * This function MUST be ran before admin_menu
 * is only ran if is_admin()
 **/
if ( ! function_exists( 'create__options_page' ) ) {
function create__options_page( $option_page ) {

	if ( ! is_admin() ) {
		return;
	}

	$output = false;
	if ( ! class_exists( 'OptionPageWP' ) ) {
		require_once( 'OptionPageWP.php' );
	}

	if ( class_exists( 'OptionPageWP' ) ) {

		$OptionPageWP = new OptionPageWP();
		$output = $OptionPageWP->create_page( $option_page );

	}

	return $output;

} // end function create__options_page
}






/**
 * register__postmeta --> Wrapper Function
 *
 * @version 1.2
 * @updated	05.07.13
 **/
if ( ! function_exists( 'register__postmeta' ) ) {
function register__postmeta( $post_types, $options ) {

	if ( ! is_admin() ) {
		return false;
	}

	$output = false;
	if ( ! class_exists( 'PostMetaWP' ) ) {
		require_once( 'PostMetaWP.php' );
	}

	if ( class_exists( 'PostMetaWP' ) ) {

		$PostMetaWP = new PostMetaWP();
		$output = $PostMetaWP->register__post_meta( $post_types, $options );

	}

	return $output;

} // end function register__postmeta
}
