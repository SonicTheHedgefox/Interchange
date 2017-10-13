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
	<div class="blue"></div>
	<div class="red"></div>
	<div class="yellow"></div>
	<div class="green"></div>
</div> -->
<nav class="navheader front">
	<div class="container">
		<div class="navbar-header">
			<?php if ($logo): ?>
				<a class="logo makerlogo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
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

<div class="main-content">
	<div class="wrapper-grey">
 
	</div>
	<div class="wrapper-white">
		<div class="container">	
 
		</div>
	</div>	
	<div class="wrapper-grey">
		<div class="container">
 
		</div>
	</div>
	<div class="wrapper-white">
		<div class="container">	
 
		</div>
	</div>		
</div>
 

  <!-- <footer class="front footer">
	<div class="container">	
		<div class="links">
		  	<ul class="link-ul"><h4>我是学生</h4>
				<li>如何注册</li>
				<li>如何学习</li>
				<li>如何互动</li>
				<li></li>
				<li></li>
			</ul>
		  	<ul class="link-ul"><h4>我是老师</h4>
				<li>建立班级</li>
				<li>发布课程</li>
				<li>使用题库</li>
				<li></li>
				<li></li>
			</ul>
		  	<ul class="link-ul"><h4>我是管理员</h4>
				<li>新手专区</li>
				<li>使用指引</li>
				<li>使用指引</li>
				<li></li>
				<li></li>
			</ul>
		  	<ul class="link-ul"><h4>关于我们</h4>
				<li>魔法学院</li>
				<li>官方微博</li>
				<li>加入我们</li>
				<li></li>
				<li></li>
			</ul>			
			<div class="clear_fix"></div>
		</div>
		<div class="clear_fix"></div>
		<div class="vip-links">
			<ul>
				<li><a><img class="footer_logo" src="http://makeblock.studio/sites/all/themes/makercraft/images/smallfooterlogo.png"><a/></li>
				<li><a>Code.org</a></li>
				<li>-</li>
				<li><a>Arduino</a></li>
				<li>-</li>
				<li><a>Scratch</a></li>
				<li>-</li>
				<li><a>MineCraft</a></li>
				<li>-</li>
				<li><a>Makeblock</a></li>
				<li>-</li>
				<li><a>OpenJsCAD</a></li>
				<li>-</li>
				<li><a>APPInventor</a></li>
				<li>-</li>
				<li><a>StrawberryPie</a></li>
				<li>-</li>
				<li><a>3DBuilder</a></li>
				<li>-</li>
				<li><a>Zmaker</a></li>
			</ul>
		</div>
		<hr class="footer-line">
        <div class="footer-bottom">
        <p>© 2015-2017 MakerCraft 版权所有 | 技术支持： <a href="http://www.zmaker.cn"> 郑州创客空间</a></p>
		<p>京公网安备11010802012193号</p>
 	    </div>
	</div>

  </footer> -->