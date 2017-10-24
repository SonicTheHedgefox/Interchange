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
<!-- <div class="top_color_bar">
	<div class="color_bar"></div>
</div> -->
<nav class="navheader innerpage">
	<div class="header_container innerpage">
		<div class="navbar-header">
			<?php if ($logo): ?>
				<a class="logo icelogo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
				  <img src="http://120.55.41.227:82/sites/default/files/innerlogo.png" alt="<?php print t('Home'); ?>" />
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
			<nav class="topbarmenu innerpage" role="navigation">
			  <?php if (!empty($primary_nav)): ?>
				<?php print render($primary_nav); ?>
			  <?php endif; ?>
			  <?php if (!empty($page['navigation'])): ?>

				<a href="#" class=" umenuicon" data-toggle="modal" data-target=".nav-modal"><i class="fa fa-user" ></i></a>

				<div class="modal nav-modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
				  <div class="modal-dialog modal-navigation" role="document">
				    <div class="modal-navigation-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
						</div>
						<div class="modal-body">
							<?php print render ($page['navigation']); ?>
						</div>

				    </div>
				  </div>
				</div>

			  <?php endif; ?>
			</nav>
		  </div>
		<?php endif; ?>	
	</div>
</nav>

 
<div class="topbanner debatepage">


<div style="background-color: #2f363d;">
  <!--// SPOTLIGHTS //-->
  <div class="container-xl d-md-flex clearfix p-md-2" style="max-width: 1440px;">
    <article class="col-md-4 col-lg-3 m-3 m-md-2 anim-fade-in">
      <a href="https://octoverse.github.com/" class="hover-grow no-underline d-flex flex-column flex-justify-end position-relative height-full overflow-hidden rounded-1 box-shadow-medium" style="background-color: #1a1f21;">
        <div class="position-absolute top-0 right-0 bottom-0 left-0 overflow-hidden text-center">
          <img src="https://assets-cdn.github.com/images/modules/explore/spotlight/octoverse-bg.png" alt="Octoverse" class="width-fit mx-auto mt-2">
        </div>
        <div class="Spotlight position-relative">
          <div class="Spotlight-text position-relative p-4 p-lg-5">
            <div class="h6 text-white text-uppercase">Report</div>
            <h1 class="h2 text-white lh-condensed mb-1">The State of the Octoverse</h1>
            <p class="f5 text-white mb-0">In 2017, our community grew to 24 million developers. Let’s celebrate  the projects, people, and teams of 2017.</p>
          </div>
          <div class="Spotlight-blur position-absolute top-0 right-0 bottom-0 left-0 rounded-1" style="background-color: #1a1f21;"></div>
        </div>
      </a>
    </article>

    <article class="col-md-4 col-lg-6 m-3 m-md-2 anim-fade-in">
      <a href="/developer-stories/alicia" class="js-video-hover hover-grow no-underline d-flex flex-column flex-justify-end position-relative height-full width-full overflow-hidden rounded-1 box-shadow-medium" style="background-color: #1a1f21;">
        <div class="position-absolute top-0 right-0 bottom-0 left-0 overflow-hidden text-center">
          <video src="https://assets-cdn.github.com/images/modules/explore/spotlight/devstories-aliciacarr-bg.mp4" preload="none" muted="true" playsinline="true" poster="https://assets-cdn.github.com/images/modules/explore/spotlight/devstories-aliciacarr-bg.png" class="js-video-element position-absolute rounded-1" style="left: 50%; width: 700px; margin-left: -350px;"></video>
        <div id="vidown_float_panel_div" style="display: none; left: 1309.98px; top: 50px;"><a id="vidown_float_panel_download" title="用【维棠】下载视频">维棠下载</a><span id="vidown_float_panel_sep">|</span><input type="button" value=" " id="vidown_float_panel_close" title="关闭"></div></div>
        <div class="Spotlight-blur position-relative text-left text-md-center text-white p-4 p-lg-5" style="background-color: rgba(0,0,0,.6);">
          <div class="col-lg-10 mx-auto">
            <h1 class="h1 lh-condensed mb-1">Alicia Carr is a mentor, grandma, and developer.</h1>
            <p class="f3 lh-condensed mb-0">Meet Alicia <svg aria-hidden="true" class="octicon octicon-chevron-right ml-1 v-align-middle" height="16" version="1.1" viewBox="0 0 8 16" width="8"><path fill-rule="evenodd" d="M7.5 8l-5 5L1 11.5 4.75 8 1 4.5 2.5 3z"></path></svg></p>
          </div>
        </div>
      </a>
    </article>

    <article class="col-md-4 col-lg-3 m-3 m-md-2 anim-fade-in">
      <a href="/collections/machine-learning" class="hover-grow no-underline d-flex flex-column flex-justify-end position-relative height-full overflow-hidden rounded-1 box-shadow-medium" style="background-color: #c4d3e4;">
        <div class="position-absolute top-0 right-0 bottom-0 left-0 overflow-hidden text-center">
          <img src="https://assets-cdn.github.com/images/modules/explore/spotlight/machinelearning-bg.png" alt="Getting started with machine learning" class="width-fit mx-auto mt-2">
        </div>
        <div class="Spotlight position-relative">
          <div class="Spotlight-text position-relative p-4 p-lg-5">
            <div class="h6 text-gray-dark text-uppercase">Collection</div>
            <h1 class="h2 text-gray-dark lh-condensed mb-1">Getting started with machine learning</h1>
            <p class="f5 text-gray-dark mb-0">Algorithms that make predictions from data have a new audience and a new set of possibilities.</p>
          </div>
          <div class="Spotlight-blur position-absolute top-0 right-0 bottom-0 left-0 rounded-1" style="background-color: #c4d3e4;"></div>
        </div>
      </a>
    </article>
  </div>
</div>



</div>
 
 
<div class="main container">
 	<div class="row">
	    <div class="main-content">
	    <section<?php print $content_column_class; ?>>
	          <?php if (!empty($tabs)): ?>
	          <?php print render($tabs); ?>
	          <?php endif; ?>
	          <?php print render($page['content_banner']); ?>
	          <?php print render($page['content']); ?>
	          
	    </section>

	    <?php if (!empty($page['sidebar_first'])): ?>
	      <aside class="col-sm-3" role="complementary">
	        <?php print render($page['sidebar_first']); ?>
	      </aside>  <!-- /#sidebar-second -->
	    <?php endif; ?>
	  </div>
 	</div>
</div>

 
 <div class="footer">
 	
 </div>