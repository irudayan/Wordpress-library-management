<?php
//about theme info
add_action( 'admin_menu', 'vw_education_lite_gettingstarted' );
function vw_education_lite_gettingstarted() {
	add_theme_page( esc_html__('About VW Education Theme', 'vw-education-lite'), esc_html__('About VW Education Theme', 'vw-education-lite'), 'edit_theme_options', 'vw_education_lite_guide', 'vw_education_lite_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function vw_education_lite_admin_theme_style() {
   wp_enqueue_style('vw-education-lite-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
   wp_enqueue_script('vw-education-lite-tabs', esc_url(get_template_directory_uri()) . '/inc/getting-started/js/tab.js');
   wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'vw_education_lite_admin_theme_style');

//guidline for about theme
function vw_education_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-education-lite' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Education Theme', 'vw-education-lite' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-education-lite'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Education at 20% Discount','vw-education-lite'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','vw-education-lite'); ?> ( <span><?php esc_html_e('vwpro20','vw-education-lite'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( VW_EDUCATION_LITE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'vw-education-lite' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_education_lite_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-education-lite' ); ?></button>
			<button class="tablinks" onclick="vw_education_lite_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'vw-education-lite' ); ?></button>
			<button class="tablinks" onclick="vw_education_lite_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-education-lite' ); ?></button>
		  	<button class="tablinks" onclick="vw_education_lite_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'vw-education-lite' ); ?></button>
		  	<button class="tablinks" onclick="vw_education_lite_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'vw-education-lite' ); ?></button>
		  	<button class="tablinks" onclick="vw_education_lite_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'vw-education-lite' ); ?></button>
		</div>

		<?php
			$vw_education_lite_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_education_lite_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Education_Lite_Plugin_Activation_Settings::get_instance();
				$vw_education_lite_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-education-lite-recommended-plugins">
				    <div class="vw-education-lite-action-list">
				        <?php if ($vw_education_lite_actions): foreach ($vw_education_lite_actions as $key => $vw_education_lite_actionValue): ?>
				                <div class="vw-education-lite-action" id="<?php echo esc_attr($vw_education_lite_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_education_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_education_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_education_lite_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-education-lite'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_education_lite_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-education-lite' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('VW Education Lite Theme is a responsive multi-purpose education WordPress theme which is ideal for educational and academic institutions websites. It is best suited for college, school, university, LMS, Training Center, Academy, Primary School, High school and Kindergarten, and other educational websites including tuition classes, coaching classes, personal, blogging and any small business.This theme is user-friendly and best suits the latest version of WordPress. With the help of this theme, you can produce an informative, appealing and at the same time engaging corporate and various other types of websites. VW Education Lite Theme is cross browser compatible performing well with any browser. Also, for non-coders it is very easy to use because of its secure and clean code. This translation ready theme has an ultimate design with best options that makes it beautiful and unique from others. Having optimized codes, this SEO friendly theme helps your website to rank high on Google and other search engines.This theme is useful for multiple educational websites and blogs. It nicely showcases the different sections such as testimonial section, social media integration and also has banner with Call to Action Button(CTA). Moreover, its various personalization options and features helps you in easy customization. Reap the benefits of this versatile and flexible theme as it is rigorously tested for you to develop flawless professional websites.','vw-education-lite'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-education-lite' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-education-lite' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_EDUCATION_LITE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-education-lite' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-education-lite'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-education-lite'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-education-lite'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-education-lite'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-education-lite'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_EDUCATION_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-education-lite'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-education-lite'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-education-lite'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_EDUCATION_LITE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-education-lite'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-education-lite' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-education-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','vw-education-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-education-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_our_courses') ); ?>" target="_blank"><?php esc_html_e('Our Featured Courses','vw-education-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-education-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-education-lite'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-education-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-education-lite'); ?></a>
								</div> 
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-education-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-education-lite'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-education-lite'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-education-lite'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-education-lite'); ?></span><?php esc_html_e(' Go to ','vw-education-lite'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-education-lite'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-education-lite'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-education-lite'); ?></span><?php esc_html_e(' Go to ','vw-education-lite'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-education-lite'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-education-lite'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-education-lite'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-education-lite/" target="_blank"><?php esc_html_e('Documentation','vw-education-lite'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Education_Lite_Plugin_Activation_Settings::get_instance();
			$vw_education_lite_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-education-lite-recommended-plugins">
				    <div class="vw-education-lite-action-list">
				        <?php if ($vw_education_lite_actions): foreach ($vw_education_lite_actions as $key => $vw_education_lite_actionValue): ?>
				                <div class="vw-education-lite-action" id="<?php echo esc_attr($vw_education_lite_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_education_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_education_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_education_lite_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','vw-education-lite'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($vw_education_lite_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'vw-education-lite' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','vw-education-lite'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon >> Click Pattern Tab >> Click on homepage sections >> Publish.','vw-education-lite'); ?></span></b></p>
	              	<div class="vw-education-lite-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','vw-education-lite'); ?></a>
				    </div>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/block-pattern.png" alt="" />
	            </div>

	            <div class="block-pattern-link-customizer">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-education-lite' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-education-lite'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-image-rotate-left"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_responsive_media') ); ?>" target="_blank"><?php esc_html_e('Responsive Settings','vw-education-lite'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-education-lite'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-education-lite'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-education-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-education-lite'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-education-lite'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-education-lite'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
	        </div>
		</div>

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Education_Lite_Plugin_Activation_Settings::get_instance();
			$vw_education_lite_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-education-lite-recommended-plugins">
				    <div class="vw-education-lite-action-list">
				        <?php if ($vw_education_lite_actions): foreach ($vw_education_lite_actions as $key => $vw_education_lite_actionValue): ?>
				                <div class="vw-education-lite-action" id="<?php echo esc_attr($vw_education_lite_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_education_lite_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_education_lite_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_education_lite_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-education-lite' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-education-lite-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-education-lite'); ?></a>
			    </div>

			     <div class="link-customizer-with-guternberg-ibtana">
					<h3><?php esc_html_e( 'Link to customizer', 'vw-education-lite' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-education-lite'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-image-rotate-left"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_responsive_media') ); ?>" target="_blank"><?php esc_html_e('Responsive Settings','vw-education-lite'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-education-lite'); ?></a>
							</div>
							
							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-education-lite'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-education-lite'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-education-lite'); ?></a>
							</div> 
						</div>
						
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_education_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-education-lite'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-education-lite'); ?></a>
							</div> 
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent product_woo_tab">
			<?php if(!is_plugin_active('ibtana-ecommerce-product-addons/plugin.php')){ 
				$plugin_ins = VW_Education_Lite_Plugin_Activation_Woo_Products::get_instance();
				$vw_education_lite_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-education-lite-recommended-plugins">
			    	<div class="vw-education-lite-action-list">
                	<div class="vw-education-lite-action" id="<?php echo esc_attr($vw_education_lite_actions['id']);?>">
                     <div class="action-inner plugin-activation-redirect">
                        <h3 class="action-title"><?php echo esc_html($vw_education_lite_actions['title']); ?></h3>
                        <div class="action-desc"><?php echo esc_html($vw_education_lite_actions['desc']); ?>
                        </div>
                        <?php echo wp_kses_post($vw_education_lite_actions['link']); ?>
                     </div>
                	</div>
			    	</div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'vw-education-lite' ); ?></h3>
				<hr class="h3hr">
              	<div class="vw-education-lite-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates&woo=true' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','vw-education-lite'); ?></a>
			    	</div>
			<?php } ?>
		</div>

		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-education-lite' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Do you run an education based firm? You would require a premium education WordPress theme to go along with it. Well you know? Our best Education WordPress theme for schools and colleges is perfect for you. We have made this theme with the intent to revamp your website and make it look astonishing. You would need a theme that can beautifully showcase your campus and everything else that you have to offer. Our premium education WordPress theme is fully responsive and multipurpose, It is made to be insanely fast across all platforms and browsers. This ensures quality performance, which will lead to your viewers never having a bad experience with our theme.','vw-education-lite'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_EDUCATION_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-education-lite'); ?></a>
					<a href="<?php echo esc_url( VW_EDUCATION_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-education-lite'); ?></a>
					<a href="<?php echo esc_url( VW_EDUCATION_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-education-lite'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/vw-education-theme.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-education-lite' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-education-lite'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-education-lite'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-education-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-education-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-education-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-education-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-education-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-education-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-education-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-education-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-education-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-education-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-education-lite'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'vw-education-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-education-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-education-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-education-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-education-lite'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-education-lite'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-education-lite'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-education-lite'); ?></td>
								<td class="table-img"><i class="fas fa-times"></i></td>
								<td class="table-img"><i class="fas fa-check"></i></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_EDUCATION_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-education-lite'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'vw-education-lite'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'vw-education-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_EDUCATION_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'vw-education-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'vw-education-lite'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'vw-education-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_EDUCATION_LITE_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'vw-education-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'vw-education-lite'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'vw-education-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_EDUCATION_LITE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'vw-education-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'vw-education-lite'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'vw-education-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_EDUCATION_LITE_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','vw-education-lite'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Post-purchase Queries', 'vw-education-lite'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'vw-education-lite'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( VW_EDUCATION_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'vw-education-lite'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>