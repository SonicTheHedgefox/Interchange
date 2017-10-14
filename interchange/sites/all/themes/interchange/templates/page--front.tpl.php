<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 */
?>
<div class="top_color_bar">
	<div class="color_bar"></div>
</div>
<nav class="navheader front">
	<div class="header_container">
		<div class="navbar-header">
			<?php if ($logo): ?>
				<a class="logo icelogo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
				  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
				</a>
			<?php endif; ?>
		
		  <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			  <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
		  <?php endif; ?>
		</div>
		<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
		  <div class="navbar-collapse collapse">
			<nav class="topbarmenu" role="navigation">
			  <?php if (!empty($primary_nav)): ?>
				<?php print render($primary_nav); ?>
			  <?php endif; ?>
			  <?php if (!empty($secondary_nav)): ?>
				<?php print render($secondary_nav); ?>
			  <?php endif; ?>
			  <?php if (!empty($page['navigation'])): ?>
				<?php print render ($page['navigation']); ?>
			  <?php endif; ?>
			</nav>
		  </div>
		<?php endif; ?>	
	</div>
</nav>
<div class="slideshow">
	<?php 
	$block = module_invoke('views', 'block_view', 'slideshow-block');
    print render($block); 
	?>     
</div>
<div class="main container">
 	<div class="row"> 	

	 	<div class="topbanner">
	 		<div class="col-md-6">
	 			 
	 				<?php 
						$block = module_invoke('views', 'block_view', 'top_banner-block');
				    	print render($block); 
					?>	
	 		</div>	 

	 		<div class="col-md-6">
	 			 
	 				<?php 
						$block = module_invoke('views', 'block_view', 'top_banner-block_1');
				    	print render($block); 
					?>	 				
	 			 
	 		</div>
	 		<div style="clear:both;"></div>
	 	</div>
	 	<div style="clear:both"></div>
		
		<div class="section-title">
			<div class="inner"><a href="/latest">Latest »</a></div>
		</div>
	 	
	 	<div class="main-content">
				<div class="content-list col-md-9">
					 
						<?php 
						$block = module_invoke('views', 'block_view', 'article_list-block');
					    print render($block); 
						?>	
				</div>

				<div class="sidebar front col-md-3">
	 

						<?php 
						$block = module_invoke('views', 'block_view', 'recommend_box-block');
					    print render($block); 
						?>		

						<?php 
						$block = module_invoke('views', 'block_view', 'recommend_box-block_1');
					    print render($block); 
						?>	

						<?php 
						$block = module_invoke('views', 'block_view', 'recommend_box-block_2');
					    print render($block); 
						?>	
	 
				</div>	
	 	</div>
 	</div>
</div>

 
 <div class="footer">
 	
 </div>