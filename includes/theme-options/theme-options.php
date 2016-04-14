<?php

function kim_create_menu() {
    add_menu_page('Theme Options', 'Theme Options', 'administrator', __FILE__, 'kim_options_page' , plugins_url('/images/icon.png', __FILE__) );
    add_action( 'admin_init', 'kim_register_options' );
}
add_action('admin_menu', 'kim_create_menu');

function kim_register_options() {
    register_setting( 'kim_options_fields', 'kim_email' );
    register_setting( 'kim_options_fields', 'kim_linkedin' );
    register_setting( 'kim_options_fields', 'kim_twitter' );
    register_setting( 'kim_options_fields', 'kim_github' );
    register_setting( 'kim_options_fields', 'kim_skills' );
    register_setting( 'kim_options_fields', 'kim_experience' );
    register_setting( 'kim_options_fields', 'kim_outreach' );
}

function kim_options_page() {
    ?>
    <div class="wrap">

        <form method="post" action="options.php">
            <?php settings_fields('kim_options_fields'); ?>
            <?php do_settings_sections('kim_options_fields'); ?>

            <table class="form-table">
                <tr><h2>Social</h2></tr>
                <tr valign="top">
                    <th scope="row">Email</th>
                    <td><input type="text" class="large-text" name="kim_email" id="kim_email" value="<?php echo esc_attr( get_option('kim_email') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">LinkedIn</th>
                    <td><input type="text" class="large-text" name="kim_linkedin" id="kim_linkedin"value="<?php echo esc_attr( get_option('kim_linkedin') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Twitter</th>
                    <td><input type="text" class="large-text" name="kim_twitter" id="kim_twitter" value="<?php echo esc_attr( get_option('kim_twitter') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Github</th>
                    <td><input type="text" class="large-text" name="kim_github" id="kim_github" value="<?php echo esc_attr( get_option('kim_github') ); ?>" /></td>
                </tr>
                <tr><h2>Resume</h2></tr>
                <tr valign="top">
                    <th scope="row">Skills</th>
                    <td><input type="text" class="large-text" name="kim_skills" id="kim_skills" value="<?php echo esc_attr( get_option('kim_skills') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Experience</th>
                    <td><input type="text" class="large-text" name="kim_experience" id="kim_experience" value="<?php echo esc_attr( get_option('kim_experience') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Outreach</th>
                    <td><input type="text" class="large-text" name="kim_outreach" id="kim_outreach" value="<?php echo esc_attr( get_option('kim_outreach') ); ?>" /></td>
                </tr>
            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?php }
