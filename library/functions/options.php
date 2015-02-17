<?php

// Author: Jonathan Evans

//Start Neuron Options
//***********************
// Options Page Functions

add_action( 'admin_menu', 'neuron_options_menu' );

function neuron_options_menu() {
	add_options_page( 'Neuron Options', 'Neuron Options', 'manage_options', 'neuron-user-options', 'neuron_options_page', '', 99 );
}

function neuron_options_page() {
	//if we got here with a POST, update the database with the new options
	if (isset($_POST['update_neuron_options'])) {
        if ( $_POST['update_neuron_options'] == 'true' ) { neuron_options_update(); }
    }
	// here's the main function that will generate our options page
?>

<!--Options Markup-->
<div class="wrap">
    <div id="icon-themes" class="icon32"><br />
    </div>
    <h2>Neuron Options</h2>
    <form method="POST" action="">
        <input type="hidden" name="update_neuron_options" value="true" />
        <h3>Page IDs</h3>
        <p>Used to show the content on the home page. <strong><em>Do not</em></strong> change these unless you know what you're doing.</p>
        <h3>Presentation</h3>
        <input type="number" name="present_id" id="present_id" size="8" value="<?php esc_attr_e( get_option( 'present_id' ) ); ?>" required />
        <h3>Contact</h3>
        <input type="number" name="contact_id" id="contact_id" size="8" value="<?php esc_attr_e( get_option( 'contact_id' ) ); ?>" required />
        <h3>About</h3>
        <input type="number" name="about_id" id="about_id" size="8" value="<?php esc_attr_e( get_option( 'about_id' ) ); ?>" required />
        <h3>Research</h3>
        <input type="number" name="research_id" id="research_id" size="8" value="<?php esc_attr_e( get_option( 'research_id' ) ); ?>" required />

        <!-- submit button -->
        <p><input type="submit" name="search" value="Update Options" class="button" /></p>
    </form>
</div>

<?php
}
function neuron_options_update() {
	// this is where validation would go
    // update_option( 'option1', stripslashes($_POST['option1']) );
    update_option( 'present_id', stripslashes($_POST['present_id']) );
    update_option( 'contact_id', stripslashes($_POST['contact_id']) );
    update_option( 'about_id', stripslashes($_POST['about_id']) );
    update_option( 'research_id', stripslashes($_POST['research_id']) );
}