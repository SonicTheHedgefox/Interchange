<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<div class="course-header"> 
	<div class="course-header-img"> 
		<?php print $fields['field_course_cover']->content ?>
	</div> 
	<div class="course-header-info">
		<h2><?php print $fields['name']->content ?></h2>
	</div>
	<div class="course-operation hidden-xs"> 
		<div class="course-view-num"> 
			<p><i class="fa fa-user-plus" aria-hidden="true"></i><?php print $fields['totalcount']->content ?>人</p> 
		</div> 
	   <ul class="course-share">
			<li><p><i class="fa fa-bookmark-o" aria-hidden="true"></i></p><p>收藏</p></li>	   
			<li><p><i class="fa fa-share-square-o" aria-hidden="true"></i></p><p>分享</p></li>
	   </ul> 
	   <div class="joinbt-wrapper"><button type="button" class="btn btn-success">加入课程</button></div>
  </div>
	
</div>
 <div class="course-lessons container"> 
   <div class="lessons-detail row"> 
    <div class="lessons-info col-lg-9 col-md-8">
	<div class="lesson-info-tabs">
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">课时列表</a></li>
		<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">评论</a></li>
		<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">相关课程</a></li>
		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane fade in active" id="home">
				<div class="lesson-list">
				<?php $block = module_invoke('views', 'block_view', 'course-block_1');
				print render($block['content']);?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="profile">...</div>
			<div role="tabpanel" class="tab-pane fade" id="messages">...</div>
			<div role="tabpanel" class="tab-pane fade" id="settings">...</div>
		</div>
	</div>

	

    </div> 
    <div class="course-sidebar col-lg-3 col-md-4  course-sidebar"> 
	
    </div> 
   </div> 
 </div>