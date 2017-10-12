<div class="course-type-bg-wrapper">
<div class="top_color_bar">
	<div class="blue"></div>
	<div class="red"></div>
	<div class="yellow"></div>
	<div class="green"></div>
</div>
<nav class="navheader">
	<div class="container">
		<div class="navbar-header">
			<?php if ($logo): ?>
				<a class="logo makerlogo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
				  <img src="http://makeblock.studio/sites/all/themes/makercraft/images/smalllogo.png" alt="<?php print t('Home'); ?>" style="height:60px;width:auto;padding:5px 0;" />
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
			<nav class="insidepage topbarmenu" role="navigation">
			  <?php if (!empty($primary_nav)): ?>
				<?php print render($primary_nav); ?>
			  <?php endif; ?>
			  <?php if (!empty($secondary_nav)): ?>
				<?php print render($secondary_nav); ?>
			  <?php endif; ?>
			  <?php if (!empty($page['navigation'])): ?>
				<?php print render($page['navigation']); ?>
			  <?php endif; ?>
			</nav>
		  </div>
		<?php endif; ?>	
	</div>
</nav>
<div class="container">
	<div class="pandas" style="margin-top: 10px;margin-bottom: -20px;">
	<img src="http://makeblock.studio/sites/all/themes/makercraft/images/pandas.png" style="width:100%;height:auto;">
	</div>
</div>

<div class="insidepage main-container <?php print $container_class; ?>">


  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
		<div class ="main_block left">
			<?php print render($page['sidebar_first']); ?>
		</div>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
	  <div class ="main_block middle">
	  
	  <!-- /# Developing -->
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
	  <!-- /# Developing -->
		  
		  <?php print render($page['content']); ?>
	  </div>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
	    <div class ="main_block right">
			<?php print render($page['sidebar_second']); ?>
		</div>
	  </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>
 
  <footer class="footer">
	<div class="container">	
		<div class="links">
		  	<ul class="link-ul">常见问题
				<li>新手专区</li>
				<li>使用指引</li>
				<li>使用指引</li>
				<li></li>
				<li></li>
			</ul>
		  	<ul class="link-ul">常见问题
				<li>新手专区</li>
				<li>使用指引</li>
				<li>使用指引</li>
				<li></li>
				<li></li>
			</ul>
		  	<ul class="link-ul">常见问题
				<li>新手专区</li>
				<li>使用指引</li>
				<li>使用指引</li>
				<li></li>
				<li></li>
			</ul>
		  	<ul class="link-ul">常见问题
				<li>新手专区</li>
				<li>使用指引</li>
				<li>使用指引</li>
				<li></li>
				<li></li>
			</ul>			
			<div class="clear_fix"></div>
		</div>
		<div class="clear_fix"></div>
		<div class="vip-links">
			<ul>
				<li><a><img class="footer_logo" src="http://makeblock.studio/sites/all/themes/makercraft/images/smallfooterlogo.png"><a/></li>
				<li><a>私人飞机网</a></li>
				<li>-</li>
				<li><a>广告联盟</a></li>
				<li>-</li>
				<li><a>万网代理</a></li>
				<li>-</li>
				<li><a>自主链接</a></li>
				<li>-</li>
				<li><a>广告联盟</a></li>
				<li>-</li>
				<li><a>万网代理</a></li>
				<li>-</li>
				<li><a>自主链接</a></li>
				<li>-</li>
				<li><a>广告联盟</a></li>
				<li>-</li>
				<li><a>万网代理</a></li>
				<li>-</li>
				<li><a>自主链接</a></li>
			</ul>
		</div>
		<hr class="footer-line">
        <div class="footer-bottom">
        <p>© 2015-2017 MakerCraft 版权所有 | 技术支持： <a href="http://www.zmaker.cn"> 郑州创客空间</a></p>
		<p>京公网安备11010802012193号</p>
 	    </div>
	</div>

  </footer>
  </div>