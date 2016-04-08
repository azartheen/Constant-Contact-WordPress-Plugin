<div class="inline" style="border: 1px solid #ccc; margin:10px 0; padding: 10px; border-radius:5px; background-color:white; ">
	<h2 class="cc_logo"><a class="cc_logo"><?php _e('Constant Contact', 'constant-contact-api'); ?></a></h2>
	<h3><?php _e('Please upgrade your website\'s PHP Version', 'constant-contact-api'); ?></h3>
	<h4><?php printf( 'You are running PHP %s. This plugin requires PHP 5.4 or higher.', phpversion() ); ?></h4>
	<p><?php _e('Starting with Version 4.0, <strong>the Constant Contact Plugin requires PHP Version 5.4 or higher</strong>. Please contact your hosting provider support and ask them to upgrade your server.', 'constant-contact-api'); ?></p>
	<p><strong><?php _e('We apologize for the inconvenience, but technical requirements changed.', 'constant-contact-api'); ?></strong><?php echo esc_html( sprintf( __('The good news? Once you upgrade your PHP version, your site will be faster %sand more secure%s.'), '<a href="http://php.net/supported-versions.php">', '</a>' ) ); ?></p>
	<h3><?php esc_html_e('Here\'s how to upgrade your PHP version for popular web hosts:'); ?></h3>
	<ul class="ul-disc">
		<li><a href="http://www.inmotionhosting.com/support/website/php/how-to-change-the-php-version-your-account-uses">InMotion Hosting</a></li>
		<li><a href="http://support.hostgator.com/articles/cpanel/php-configuration-plugin">HostGator</a></li>
		<li><a href="https://my.bluehost.com/cgi/help/447">Bluehost</a></li>
		<li><a href="https://www.godaddy.com/help/view-or-change-your-php-version-16090">GoDaddy</a></li>
		<li><a href="https://www.siteground.com/kb/how_to_have_different_php__mysql_versions/">SiteGround</a></li>
		<li><?php esc_html_e('Running a local installation?'); ?>
			<ul>
				<li><a href="http://wphosting.tv/how-to-switch-between-several-php-versions-in-mamp-2-x/">MAMP</a> (Mac)</li>
				<li><a href="https://john-dugan.com/upgrade-php-wamp/">WAMP</a> (Windows)</li>
			</ul>
		</li>
	</ul>
	<h3>If you can't upgrade your PHP version</h3>
	<p>You can use <a href="http://support2.constantcontact.com/articles/SupportFAQ/5367">Constant Contact's Sign-up Form</a> and add the code to a widget or a page. This will allow your visitors to sign up for your newsletters.</p>
</div>