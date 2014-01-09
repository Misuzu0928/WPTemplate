<?php if ( post_password_required() ) : ?>
<p class="nopassword">このページはパスワード認証が必要です。パスワードを入力してご覧ください。</p>
<?php	return; endif;?>

<?php if ( have_comments() ) : ?>

<h3><?php the_title(); ?>へ<?php echo number_format_i18n(get_comments_number()); ?>件のコメント</h3>

<?php wp_list_comments('callback=mytheme_comment'); ?>

<?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
<table class="com">
<tr>
<td align="left"><?php previous_comments_link('←古いコメント') ?></td>
<td align="right"><?php next_comments_link('新しいコメント→') ?></td>
</tr>
</table>

<?php endif; ?>

<hr>

<?php endif; ?>
<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

$fields = array(
'author' => '<p id="inputtext">' . '<label for="author">' . __('Name')
. ( $req ? '（必須）' : '' ) . '</label> ' .
'<br /><input id="author" name="author" type="text" value="'
. esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',

'email'  => '<p id="inputtext"><label for="email">' . __('Email') 
. ( $req ? '（必須/公開はされません）' : '' ) . '</label> ' .
'<br /><input id="email" name="email" type="text" value="' 
. esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
); 

$comment_field = '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun' ) . '（必須）</label><br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';

$comment_notes_before = NULL;

$args = array(
	'fields'		=> apply_filters( 'comment_form_default_fields', $fields ),
	'comment_field'		=> $comment_field,
	'comment_notes_before' 	=> $comment_notes_before,
);
?>

<?php comment_form($args); ?>


