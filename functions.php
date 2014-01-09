<?php

function new_excerpt_more($more){
	global $post;
	return '・・・';
}
add_filter('excerpt_more', 'new_excerpt_more');


function my_tag_cloud_filter($args) {
	$myargs = array('smallest'=>10, 'largest'=>10, 'number'=>30, 'order'=>'RAND');
	return $myargs;
}
add_filter('widget_tag_cloud_args', 'my_tag_cloud_filter');


function new_search_form($form) {
$form = '<form method="get" id="searchform" action="' . get_option('home') . '/" >
<div>
<label for="s"></label>
<input type="text" value="' . attribute_escape(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s" />
<input type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" />
</div>
</form>';
return $form;
}
add_filter('get_search_form', 'new_search_form');


function mytheme_comment($comment, $args, $depth){$GLOBALS['comment'] = $comment; ?>
<div <?php comment_class(); ?> id="blog">

<h4><?php printf('%s', get_comment_author_link()); ?></h4>

<?php if ($comment->comment_approved == '0') : ?>
<?php _e('このコメントは管理者の承認待ちです。') ?>
<br>
<?php endif; ?>

<p class="blog"><?php printf(__('%1$s at %2$s'), get_comment_date("Y年n月j日"),  get_comment_time("G時i分")) ?></p>

<?php comment_text() ?>

<p class="blog"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?> | <?php edit_comment_link(__('編集'),'  ','') ?></p>

<br>
</div>
<?php
}


add_filter('comment_form_default_fields', 'mytheme_remove_url');
function mytheme_remove_url($arg) {
$arg['url'] = '';
return $arg;
}

add_filter("comment_form_defaults","my_special_comment_after");
function my_special_comment_after($args){
    $args['comment_notes_after'] = '';
return $args;
}


if (function_exists('register_sidebar')) {

register_sidebar(array(
'name' => 'サイドバー1',
'id' => 'sidebar1',
'description' => '説明1',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

register_sidebar(array(
'name' => 'サイドバー2',
'id' => 'sidebar2',
'description' => '説明2',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));

register_sidebar(array(
'name' => 'サイドバー3',
'id' => 'sidebar3',
'description' => '説明3',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>'
));
}

?>
