<?php // add the admin options page
add_action('admin_menu', 'wpvideos_admin_add_page');
function wpvideos_admin_add_page() {
add_options_page('WordPress Video Embeds', 'WP Video Embeds', 'manage_options', 'wpvideos', 'wpvideos_options_page');
}

add_action('admin_init', 'wpvideos_admin_init');
function wpvideos_admin_init(){
register_setting( 'wpvideos_settings', 'wpvideowidth' );
register_setting( 'wpvideos_settings', 'wpvideoheight' );
}

function wpvideos_options_page() {
?>

<div class="wrap">
<h2>WP Videos Settings</h2>
<div style="padding-bottom:10px;">
<img src="<?php echo WP_PLUGIN_URL; ?>/wp-video-embeds/images/logo.png">
</div>

<div style="float:left;width:600px;margin:0 20px 0 10px;">

<div  class="postbox">
<h3 class="hndle" style="padding:5px 0 5px 10px;"><span>WP Video Embeds Notes</span></h3>
<p style="padding-left:10px;"><strong>Please note:</strong> This plugin is still under developement. If you find any bug with it, please contact me <a href="http://www.itsabhik.com/contact/">here</a> with as many details as possible.</p>
<p style="padding-left:10px;"><strong>To Do List</strong><br/>&nbsp;&nbsp;* Placement Selection</p>
</div>

<div class="postbox">
<h3 class="hndle" style="padding:5px 0 5px 10px;"><span>Video Size (Width & Height)</span></h3>
<p style="padding-left:10px;">Please enter the width and height of the video. For best result, choose 16:9 (width/height) aspect ratio.<br/><em>For example, 500/281, 550/309, 600/337 etc.</em></p>
<form method="post" action="options.php">
    <?php settings_fields( 'wpvideos_settings' ); ?>
    <?php do_settings_sections( 'wpvideos_settings' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Video Width (in Pixels)</th>
        <td><input type="text" name="wpvideowidth" value="<?php echo get_option('wpvideowidth'); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Video Height (in Pixels)</th>
        <td><input type="text" name="wpvideoheight" value="<?php echo get_option('wpvideoheight'); ?>" /></td>
        </tr>
        

    <tr valign="top">
        <th scope="row"></th>
    <td><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></td>
	</tr>
</table>
</form>
</div>

<div  class="postbox">
<h3 class="hndle" style="padding:5px 0 5px 10px;"><span>Support & Donation</span></h3>
<p style="padding-left:10px;text-align:center;">
Please donate to support the development of the plugin.</p>
<div align="center">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="W69TPQWHZW5Y6">
<table>
<tr><td>
<input type="image" src="<?php echo WP_PLUGIN_URL; ?>/wp-video-embeds/images/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online."></td>
</tr>
</table>
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
</div>

</div>
<div style="width:300px;float:left;">

<div class="postbox">
<h3 class="hndle" style="padding:5px 0 5px 10px;"><span>Share This Plugin</span></h3>
<p style="padding-left:10px"><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.itsabhik.com/wp-plugins/wordpress-video-embeds-the-wordpress-video-plugin.html" data-text="Check out the best Plugin to embed videos on WordPress" data-count="horizontal" data-via="itsabhik" data-related="itsabhik">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></p>
<p style="padding-left:10px"><iframe src="http://www.facebook.com/plugins/like.php?app_id=166444890101145&amp;href=http%3A%2F%2Fwww.itsabhik.com%2Fwp-plugins%2Fwordpress-video-embeds-the-wordpress-video-plugin.html&amp;send=false&amp;layout=button_count&amp;width=110&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px;" allowTransparency="true"></iframe></p>
<p style="padding-left:10px"><script type="text/javascript">
(function() {
var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
s.type = 'text/javascript';
s.async = true;
s.src = 'http://widgets.digg.com/buttons.js';
s1.parentNode.insertBefore(s, s1);
})();
</script><a class="DiggThisButton DiggCompact"></a></p>
<p style="padding-left:10px"><!-- Place this tag where you want the +1 button to render -->
<g:plusone size="medium" href="http://www.itsabhik.com/wp-plugins/wordpress-video-embeds-the-wordpress-video-plugin.html"></g:plusone>

<!-- Place this render call where appropriate -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></p>
</div>

<div class="postbox">
<h3 class="hndle" style="padding:5px 0 5px 10px;"><span>My Other Plugins</span></h3>
<p style="padding-left:10px"><a title="Gravatar Hovercard" target="_blank" href="http://www.itsabhik.com/wp-plugins/gravatar-hovercards-wordpress-plugin.html">Gravatar Hovercard</a></p>
<p style="padding-left:10px"><a title="Advanced Author Bio" target="_blank" href="http://www.itsabhik.com/wp-plugins/gravatar-hovercards-wordpress-plugin.html">Advanced Author Bio</a></p>
<p style="padding-left:10px"><a title="WordPress Server Load" target="_blank" href="http://www.itsabhik.com/wp-plugins/wordpress-server-load-plugin.html">WordPress Server Load</a></p>
<p style="padding-left:10px"><a title="HTML in Author Bio" target="_blank" href="http://www.itsabhik.com/wp-plugins/allow-html-in-wordpress-author-bio.html">HTML in Author Bio</a></p>
</div>

</div>
<div class="clear"></div>
</div>

<?php }
?>