<?php
/*
  Plugin Name: CV Options
  Plugin URI:
  Description: asdasdas
  Author: NumeleMeu
  Author URI: http://www.onthegosystems.com
  Version: 0.1
 */
/** Step 2 (from text above). */
add_action('admin_menu', 'cv_options_menu');

/** Step 1. */
function cv_options_menu()
{
    add_options_page('Cv Options', 'Cv Options', 'manage_options', 'cv-options', 'cv_plugin_options');
}


/** Step 3. */
function cv_plugin_options()
{
    if (isset($_POST['sent'])) {
        update_option( 'cv-nume', $_POST['name'] );
        update_option( 'cv-functie', $_POST['functie'] );
        update_option( 'cv-email', $_POST['email'] );
        update_option( 'cv-phone', $_POST['phone'] );
        update_option( 'cv-web', $_POST['web'] );
    }
    /**
     * @todo Complete values for each field to display saved option
     */
    echo '<div class="wrap">';
    echo '
        <form name="options" action="" method="POST">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" value=" ' . get_option('cv-nume') .  '">
            <br/>
            <label for="functie">Function</label>
            <input id="functie" type="text" name="functie" value=" ' . get_option('cv-functie') .  '">
<br/>
            <label for="email">E-mail:</label>
            <input id="email" type="email" name="email" value=" ' . get_option('cv-email') .  '">
<br/>
            <label for="phone">Phone</label>
            <input id="phone" type="tel" name="phone" value=" ' . get_option('cv-phone') .  '">
<br/>
            <label for="web">Address</label>
            <input id="web" type="url" name="web" value=" ' . get_option('cv-web') .  '">
<br/>
            <input type="submit" name="sent" value="SAVE" >
        </form>
     ';
    echo '</div>';
}
