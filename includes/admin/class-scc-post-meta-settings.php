<?php
/**
 * SCC Post Meta settings class
 *
 * This class adds new settings to the Simple Course Creator
 * settings page.
 *
 * It does not use add_settings_section() from WordPress Settings API
 * because it uses the settings section already created by SCC.
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // No accessing this file directly


class SCC_Post_Meta_Settings {


	/**
	 * constructor for SCC_Post_Meta_Settings class
	 */
	public function __construct() {

		// register settings
		add_action( 'admin_init', array( $this, 'register_settings' ), 20, 2 );
	}


	/**
	 * register SCC post meta settings
	 */
	public function register_settings() {

		// add option for hiding the author
		add_settings_field( 'display_author', __( 'Post Meta Author', 'scc_post_meta'), array( $this, 'post_meta_author' ), 'simple_course_creator', 'course_display_settings' );

		// add option for hiding the date
		add_settings_field( 'display_date', __( 'Post Meta Date', 'scc_post_meta'), array( $this, 'post_meta_date' ), 'simple_course_creator', 'course_display_settings' );
	}


	/**
	 * create post meta author option
	 *
	 * @callback_for 'display_author' field
	 */
	public function post_meta_author() {

		// set default option value
		$default = array( 'display_author' => '0' );
		$options = get_option( 'course_display_settings', $default );
		$options = wp_parse_args( $options, $default );
		?>
		<input id="display_post_meta_author" type="checkbox" name="course_display_settings[display_author]" value="1" <?php echo checked( 1, isset( $options['display_author'] ) ? $options['display_author'] : '0', false ); ?>>
		<label for="display_post_meta_author"><?php _e( 'Check this box to hide the list item post meta author.', 'scc_post_meta' ); ?></label>
		<?php
	}


	/**
	 * create post meta date option
	 *
	 * @callback_for 'display_date' field
	 */
	public function post_meta_date() {

		// set default option value
		$default = array( 'display_date' => '0' );
		$options = get_option( 'course_display_settings', $default );
		$options = wp_parse_args( $options, $default );
		?>
		<input id="display_post_meta_date" type="checkbox" name="course_display_settings[display_date]" value="1" <?php echo checked( 1, isset( $options['display_date'] ) ? $options['display_date'] : '0', false ); ?>>
		<label for="display_post_meta_date"><?php _e( 'Check this box to hide the list item post meta date.', 'scc_post_meta' ); ?></label>
		<?php
	}
}
new SCC_Post_Meta_Settings();