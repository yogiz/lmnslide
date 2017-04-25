<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'lmnslide-styles', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
}

//custom function
function mailchimp_form($warna,$warna2,$container){
    ?>
    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup" style="background-color: <?php echo $warna;?>;">    
        <form action="//elemenslide.us14.list-manage.com/subscribe/post?u=f5d00fd5c7e92ac0dd2ed8404&amp;id=cdd6698537" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"  class=" validate form-inline" target="_blank" novalidate>

            <div class="<?php echo esc_html( $container ); ?>"  id="mc_embed_signup_scroll">
            <div class=" form-group text-center">
                <div class="mc-group mc-description">DAPATKAN RAHASIA-RAHASIA HEBAT UNTUK PRESENTASI YANG MENGESANKAN</div>
                <div class="mc-group mc-field-group ">
                    <!-- <label for="mce-EMAIL">Email Address </label> -->
                    <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Masukkan alamat E-mail">

                    <input type="submit" value="DAFTAR" name="subscribe" id="mc-embedded-subscribe" class="btn" style="background-color: <?php echo $warna2;?>;color: <?php echo $warna;?>;">
                </div>
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f5d00fd5c7e92ac0dd2ed8404_cdd6698537" tabindex="-1" value=""></div>
            </div>  
            </div>
        </form>
    </div>
    <?php
}


//custom customizer
require __DIR__.'/inc/custom-customizer.php';
require __DIR__.'/inc/customizer-footer.php';
require __DIR__.'/inc/customizer-training.php';

// CPT
require __DIR__.'/inc/testimoni-cpt.php';
require __DIR__.'/inc/klien-cpt.php';
require __DIR__.'/inc/training-cpt.php';


