<div class="article-box box-b col-md-6">

  <div class="article-thumb">
  <?php print $fields['field_topic_thumb']->content ?>
  </div>

  <div class="article-info">
   <span class="article-tag">
      <i class="fa fa-tag" aria-hidden="true"></i>
      <?php print $fields['field_tags']->content ?>
  </span>
  <h4 class="article-box-title"><?php print $fields['title']->content ?> </h4>
    <span class="article-box-author">
    <?php print $fields['name']->content ?> 
    </span>
    
    <span class="article-box-time">
      <?php print $fields['changed']->content ?>
    </span>
  </div>

</div>