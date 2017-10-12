<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="course-wrapper">
<?php foreach ($rows as $id => $row): ?>
<div class="course-box-wrapper col-lg-3 col-md-4 col-xs-6">
    <?php print $row; ?>
</div>
<?php endforeach; ?>
</div>