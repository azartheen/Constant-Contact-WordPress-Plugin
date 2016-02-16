<div class="inline" style="border: 1px solid #ccc; margin:10px 0; padding: 10px; border-radius:5px; background-color:white; ">
	<h2 class="cc_logo"><a class="cc_logo"><?php _e('Constant Contact', 'constant-contact-api'); ?></a></h2>
	<h3><?php _e('Please upgrade your website\'s PHP Version', 'constant-contact-api'); ?></h3>
	<p><?php _e('Starting with Version 3.2, <strong>the Contstant Contact Plugin requires PHP Version 5.4 or higher</strong>. Please contact your hosting provider support and ask them to upgrade your server.', 'constant-contact-api'); ?></p>
	<h3><?php _e('Can\'t upgrade? Want to go back?', 'constant-contact-api'); ?></h3>
	<p><?php _e('If you would like to revert to the previous version, do this:', 'constant-contact-api'); ?></p>
	<ol>
		<li><a href="http://downloads.wordpress.org/plugin/constant-contact-api.2.4.1.zip"><?php esc_html_e('Download Version 2.4.1', 'constant-contact-api'); ?></a></li>
		<li><?php _e(sprintf('<a href="%s" onclick="return confirm(\'This will hide these instructions; are you sure you know what to do next?\');">De-activate this Plugin</a>',
		    wp_nonce_url(admin_url('plugins.php?action=deactivate&plugin='.plugin_basename( CTCT_FILE )), 'deactivate-plugin_'.plugin_basename( CTCT_FILE ))
		), 'constant-contact-api'); ?></li>
		<li><?php printf( esc_html__('Delete this plugin ("Constant Contact Plugin for WordPress") by clicking the "Delete" link next to the plugin on the %sPlugins Page%s.', 'constant-contact-api'), '<a href="'.admin_url('plugins.php').'">', '</a>' ); ?></li>
		<li><?php _e('Upload the Version 2.4.1 file in Plugins > Add New > Upload', 'constant-contact-api'); ?></li>
	</ol>
</div>