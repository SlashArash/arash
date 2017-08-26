<?php
// run my_theme_setup on after-setup-theme hook
add_action( 'after_setup_theme', 'sa_theme_setup' );
// add thumbnail support
add_theme_support('post-thumbnails');
// add navigation support
register_nav_menu( 'primary', 'Primary Menu' );
if ( is_admin() ){
    //
    add_action( 'admin_menu', 'sa_theme_menu' );
    // Register the settings to use on the theme options page
    add_action( 'admin_init', 'sa_register_settings' );
}

/*
 * load text domain for internationalization
 */
function sa_theme_setup(){
    load_theme_textdomain( 'arash', get_template_directory() . '/languages' );
}

/*
 * create a *submenu* for theme options page
 */
function sa_theme_menu() {
	add_theme_page(
        'Theme Option',
        'Theme Options',
        'manage_options',
        'sa_theme_options.php',
        'sa_theme_page'
    );
}

/*
 * Callback function to the sa_theme_menu
 * Will display the theme options page
 */
function sa_theme_page()
{
    ?>
    <div class="wrap">
        <h1>Custom Theme Options</h1>
        <form method="post" action="options.php">
		    <?php
		    settings_fields("sa_theme_options");
            do_settings_sections("sa_theme_options.php");
            ?>

            <?php submit_button(); ?>
        </form>
        <p>Created by <a href="http://www.kadkhdoaei.ir">SlashArash</a>.</p>
    </div>
    <?php
}
/*
 * Function to register the settings
 */
function sa_register_settings() {
    // Register the settings
    register_setting( 'sa_theme_options', 'sa_social_urls' );
    register_setting( 'sa_theme_options', 'sa_copyrights' );


	// Add settings section
	add_settings_section( 'sa_text_section', 'Text box Title', null, 'sa_theme_options.php' );
	// Create textbox field
	$facebook_args = array('type' => 'url','name' => 'facebook', 'option_name' => 'sa_social_urls');
	$twitter_args = array('type' => 'url','name' => 'twitter', 'option_name' => 'sa_social_urls');
	$gplus_args = array('type' => 'url','name' => 'gplus', 'option_name' => 'sa_social_urls');
	$linkedin_args = array('type' => 'url','name' => 'linkedin', 'option_name' => 'sa_social_urls');
	$instagram_args = array('type' => 'url','name' => 'instagram', 'option_name' => 'sa_social_urls');
	$telegram_args = array('type' => 'url','name' => 'telegram', 'option_name' => 'sa_social_urls');
	$github_args = array('type' => 'url','name' => 'github', 'option_name' => 'sa_social_urls');
	$copyrights_note = array('type' => 'textarea','name' => 'sa_copyrights', 'option_name' => 'sa_copyrights');

	add_settings_field( 'facebook_url', 'Facebook Profile Url:', 'sa_display_setting', 'sa_theme_options.php', 'sa_text_section', $facebook_args );
	add_settings_field( 'twitter_url', 'Twitter Profile Url:', 'sa_display_setting', 'sa_theme_options.php', 'sa_text_section', $twitter_args );
	add_settings_field( 'gplus_url', 'Google Plus Profile Url:', 'sa_display_setting', 'sa_theme_options.php', 'sa_text_section', $gplus_args );
	add_settings_field( 'linkedin_url', 'LinkedIn Profile Url:', 'sa_display_setting', 'sa_theme_options.php', 'sa_text_section', $linkedin_args );
	add_settings_field( 'instagram_url', 'Instagram Profile Url:', 'sa_display_setting', 'sa_theme_options.php', 'sa_text_section', $instagram_args );
	add_settings_field( 'telegram_url', 'Telegram Profile Url:', 'sa_display_setting', 'sa_theme_options.php', 'sa_text_section', $telegram_args );
	add_settings_field( 'github_url', 'Github Profile Url:', 'sa_display_setting', 'sa_theme_options.php', 'sa_text_section', $github_args );
	add_settings_field( 'copyrights_note', 'CopyRights Note:', 'sa_display_setting', 'sa_theme_options.php', 'sa_text_section', $copyrights_note );
}
/*
 * Function to display the settings on the page
 * This is setup to be expandable by using a switch on the type variable.
 * In future you can add multiple types to be display from this function,
 * Such as checkboxes, select boxes, file upload boxes etc.
 */
function sa_display_setting($args)
{
	extract( $args );
	$options = get_option( $option_name );
	switch ( $type ) {
		case 'url':
			$options[$name] = stripslashes($options[$name]);
			$options[$name] = esc_attr( $options[$name]);
			echo "<input type='url' id='$name' name='" . $option_name . "[$name]' value='$options[$name]' />";
			break;
		case 'textarea':
			echo "<textarea  id='$name' name='$name' rows='3'>$options</textarea>";
			break;
	}
}