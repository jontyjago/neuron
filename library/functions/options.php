<?php

// Author: Jonathan Evans

//Start Neuron Options
//***********************
// Options Page Functions

add_action( 'admin_menu', 'neuron_options_menu' );

function neuron_options_menu() {
	add_menu_page( 'Neuron Options', 'Neuron Options', 'manage_options', 'neuron-user-options', 'neuron_options_page', '', 99 );
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
        <h3>Homepage Text</h3>
        <p>This is the text for the homepage company presentation. Keep it short and sweet.</p>
        <textarea name="home-present" id="home-present" cols=60 rows=12><?php esc_attr_e( get_option( 'home-present' ) ); ?></textarea>

        <!-- <p><input type="url" name="option1" id="option1" size="48" value="<?php esc_attr_e( get_option( 'option1' ) ); ?>" required /> Twitter</p> -->
        
        <!-- submit button -->
        <p><input type="submit" name="search" value="Update Options" class="button" /></p>
    </form>
</div>

<?php
}
function neuron_options_update() {
	// this is where validation would go
    // update_option( 'option1', stripslashes($_POST['option1']) );
    update_option( 'home-present', stripslashes($_POST['home-present']) );
}