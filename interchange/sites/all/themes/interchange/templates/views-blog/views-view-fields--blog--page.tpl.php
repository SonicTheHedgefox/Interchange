<div class="blog-box box-c">

  <div class="blog-thumb">
  <?php print $fields['field_thumb']->content ?>
  </div>

  <div class="blog-info">
  <h4 class="blog-box-title"><?php print $fields['title']->content ?> </h4>
    <span class="blog-box-author">
    <?php print $fields['name']->content ?> 
    </span>
    <span class="blog-box-time">
      <?php print $fields['changed']->content ?>
    </span>
  </div>
<div style="clear: both;"></div>
</div>