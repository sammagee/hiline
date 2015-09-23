<?php
/**
 * Define custom post types
 *
 * See: https://codex.wordpress.org/Post_Types#Custom_Post_Types
 *
 * @package WordPress
 * @subpackage Hi-Line
 * @since Hi-Line 1.0
 */

function hiline_post_types() {
	register_post_type( 'videos', array(
		'labels'                 => array(
			'name'               => 'Videos',
			'singular_name'      => 'Video',
			'add_new'            => 'Add New Video',
			'add_new_item'       => 'Add New Video',
			'edit_item'          => 'Edit Video',
			'new_item'           => 'Add New Video',
			'view_item'          => 'View Video',
			'search_items'       => 'Search Video',
			'not_found'          => 'No videos found',
			'not_found_in_trash' => 'No videos found in trash'
		),
		'public'                 => true,
		'has_archive'            => true,
		'supports'               => ['title', 'editor', 'thumbnail', 'comments'],
		'capability_type'        => 'post',
		'rewrite'                => ['slug' => 'videos'],
		'menu_position'          => 5,
		'register_meta_box_cb'   => 'add_videos_metaboxes'
	));
}
add_action( 'init', 'hiline_post_types' );

/**
 * Changes default custom post type sidebar icons.
 *
 * @since Hi-Line 1.0
 */
function add_menu_icons_styles() {
	?>

	<style>
		#adminmenu #menu-posts-videos div.wp-menu-image:before {
			content: '\f236';
		}
	</style>

	<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );

/**
 * Adds meta boxes to custom post types.
 *
 * @since 1.0
 */
function add_videos_metaboxes() {
	add_meta_box(
		'hiline_video_embed',
		'Video Embed',
		'hiline_video_embed',
		'videos',
		'side',
		'default'
	);
}

/**
 * Shows meta box inputs.
 *
 * @since 1.0
 */
function hiline_video_embed() {
	global $post;

	echo '<input type="hidden" name="videometa_noncename" id="videometa_noncename" value="' . wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	$embed = get_post_meta($post->ID, '_embed', true);

	echo "<input type='text' name='_embed' value='" . $embed . "' class='widefat' />";
}

/**
 * Saves meta box data.
 *
 * @since 1.0
 */
function hiline_save_videos_meta($post_id, $post) {
	if ( ! wp_verify_nonce( $_POST['videometa_noncename'], plugin_basename(__FILE__) )) {
		return $post->ID;
	}

	if ( ! current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	$videos_meta['_embed'] = $_POST['_embed'];

	foreach ( $videos_meta as $key => $value ) {
		if ( $post->post_type == 'revision' ) return;

		$value = implode( ',', (array)$value);

		if ( get_post_meta($post->ID, $key, FALSE) ) {
			update_post_meta($post->ID, $key, $value);
		} else {
			add_post_meta($post->ID, $key, $value);
		}

		if ( ! $value ) delete_post_meta($post->ID, $key);
	}
}
add_action( 'save_post', 'hiline_save_videos_meta', 1, 2 );