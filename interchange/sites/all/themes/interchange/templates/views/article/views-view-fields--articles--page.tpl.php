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
<div class="post-thumb">
	<?php print $fields['field_article_cover']->content ?>
</div>
<div class="post-content">
	<div class="post-message">
		<div class="post-tat">
		<span class="post-title"><?php print $fields['title']->content ?></span>
		<span class="post-time"><i class="fa fa-clock-o" aria-hidden="true"></i><?php print $fields['created']->content ?>	</span>
		</div>
		<div class="post-summary"><?php print $fields['field_article_summary']->content ?></div>
	</div>
	<div class="post-users">
		<div class="user-picture"><?php print $fields['picture']->content ?></div>
		<div class="post-tags">
			<span class="post-user"><?php print $fields['name']->content ?></span>
			<span class="icon_num"><i class="fa fa-eye" aria-hidden="true"></i><i class="icon_after"><?php print $fields['totalcount']->content ?></i></span>
			<span class="icon_num"><i class="fa fa-comments-o" aria-hidden="true"></i><i class="icon_after"><?php print $fields['comment_count']->content ?></i></span>	
		</div>
	</div>
</div>
<div class="clear_fix"></div>