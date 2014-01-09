<?php get_header(); ?>

<!-- content -->
<img src="<?php bloginfo('stylesheet_directory'); ?>/image/touka.gif" title="ここからコンテンツです。" alt="ここからコンテンツです。">

<div id="content">

<?php if(have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div id="border">


<h2>
<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p class="blog"><?php the_date("Y年n月j日"); ?>　<?php the_time("G時i分"); ?></p>
<p><?php the_content('<div class="blog">続きを読む</p>'); ?></p>
<br>
<p class="blog">カテゴリー：<?php the_category(' , ') ?><?php the_tags(' | タグ：'); ?> | <?php comments_popup_link('コメントをどうぞ', '1件のコメント', '%件のコメント'); ?> | <?php edit_post_link('編集'); ?>
</p>
</div>

<br>

<?php endwhile; ?>

<table>
<tr>
<td align="left"><?php previous_posts_link('←古い記事') ?></td>
<td align="right"><?php next_posts_link('新しい記事→') ?></td>
</tr>
</table>

<?php else : ?>

<h2>Not Found</h2>
<p>記事が見つかりません</p>


<?php endif; ?>


</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
