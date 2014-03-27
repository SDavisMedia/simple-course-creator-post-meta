<?php
/**
 * SCC_Post_Meta_Hook class
 *
 * @since 1.0.0
 */
class SCC_Post_Meta_Hook {

		
	/**
	 * constructor for SCC_Post_Meta_Hook class
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
	
		// load customizer functionality
		add_action( 'scc_after_list_item', array( $this, 'after_item_post_meta' ) );
		
		// load post meta css
		add_action( 'wp_enqueue_scripts', array( $this, 'frontend_styles' ) );
	}
	
	
	/**
	 * output content below post titles
	 *
	 * The information output in this method is applied to *each* article listed
	 * in the course container.
	 *
	 * @since 1.0.0
	 */
	public function after_item_post_meta( $post_id ) {
		$show_author = get_option( 'display_author' );
		$show_date = get_option( 'display_date' );
		
		// grab the author of the post
		$author_name = get_post_field( 'post_author', $post_id );
		
		// show post meta data based on settings
		if ( $show_author != 1 || $show_date != 1 ) {
			$pm_open = '<p class="scc-post-meta">';
			$pm_close = '</p>';
		} else {
			$pm_open = '';
			$pm_close = '';
		}
		echo $pm_open;
		if ( $show_author != 1 ) {
			echo __( 'written by ', 'scc_post_meta' ) . get_the_author_meta( 'display_name', $author_name );
		}
		if ( $show_date != 1 ) {
			if ( $show_author != 1 ) {
				echo __( ' on ', 'scc_post_meta' );
			}
			echo get_the_time( 'F j, Y', $post_id );
		}
		echo $pm_close;
	}
	

	/**
	 * load stylesheet for post meta output
	 * 
	 * @since 1.0.0
	 */
	public function frontend_styles() {
		
		// register and enqueue post meta css
		if ( is_single() ) {
			wp_enqueue_style( 'scc-post-meta-css', SCCPM_URL . 'assets/css/scc-post-meta.css' );
		}
	}
}
new SCC_Post_Meta_Hook();