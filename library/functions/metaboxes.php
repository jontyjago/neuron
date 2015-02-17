<?php

//Course Details
/* Define the custom box */

add_action( 'add_meta_boxes', 'add_neuron_icons' );

// backwards compatible (before WP 3.0)
// add_action( 'admin_init', 'myplugin_add_custom_box', 1 );

/* Do something with the data entered */
add_action( 'save_post', 'save_neuron_icons' );

/* Adds a box to the main column on the Post and Page edit screens */
function add_neuron_icons() {
	$screens = array( 'methodology' );
	foreach ( $screens as $screen ) {
		add_meta_box(
			'neuron_sectionid',
			__( 'Homepage Icon' ),
			'neuron_custom_box',
			$screen
		);
	}
}

/* Prints the box content */
function neuron_custom_box( $post ) {

	// Use nonce for verification
	wp_nonce_field( plugin_basename( __FILE__ ), 'neuron_noncename' );

	// The actual fields for data entry
	// Use get_post_meta to retrieve an existing value from the database and use the value for the form
?>

	<label for="neuron_icon">Icon Code (see full list <a href="http://f.cl.ly/items/2e1b3q3g081M173m070I/FontAwesomeIconsCheatsheet.pdf" target="_blank">here</a>).</label>
	<input type="text" id="neuron_icon" name="neuron_icon" size=20 value="<?php echo esc_attr( get_post_meta( get_the_id(), 'neuron_icon', true ) ); ?>" required>
	<?php
}

/* When the post is saved, saves our custom data */
function save_neuron_icons( $post_id ) {


	// Secondly we need to check if the user intended to change this value.
	if ( ! isset( $_POST['neuron_noncename'] ) || ! wp_verify_nonce( $_POST['neuron_noncename'], plugin_basename( __FILE__ ) ) )
		return;

	// Thirdly we can save the value to the database

	//if saving in a custom table, get post_ID
	$post_ID = $_POST['post_ID'];


	// Do something with $mydata
	// either using
	$neuron_icon = sanitize_text_field( $_POST['neuron_icon'] );
	add_post_meta( $post_ID, 'neuron_icon', $neuron_icon, true ) or
		update_post_meta( $post_id, 'neuron_icon', $neuron_icon );

}