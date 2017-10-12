<div class="course-header"> 
	<div class="course-header-img"> 
		<?php print render($content['field_course_cover']); ?> 
	</div> 
	<div class="course-header-info">
		<h2><?php print render($name); ?></h2>
	</div>
	<div class="course-operation hidden-xs"> 
		<div class="course-view-num"> 
			<p><i class="fa fa-user-plus" aria-hidden="true"></i>XX人</p> 
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
				<?php print render($page); ?>
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