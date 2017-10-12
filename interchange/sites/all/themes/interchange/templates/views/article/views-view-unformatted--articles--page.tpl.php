<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php $title = $view->get_title(); ?> 
<div class="views_title">
		<h1><?php print t($title)?></h1>
</div>
<?php foreach ($rows as $id => $row): ?>
<div <?php if ($classes_array[$id]) { print ' class="post-box ' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
</div>
<?php endforeach; ?>