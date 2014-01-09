<?php get_header(); ?>

<!-- content -->
<img src="<?php bloginfo('stylesheet_directory'); ?>/image/touka.gif" title="ここから個別記事です。" alt="ここから個別記事です。"><div id="content">

<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<table>
<tr>
<td align="left"><?php previous_post_link('%link','←前の記事') ?></td>
<td align="right"><?php next_post_link('%link','次の記事→') ?></td>
</tr>
</table>

<div id="border">
<h2>
<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p class="blog"><?php the_date("Y年n月j日"); ?>　<?php the_time("G時i分"); ?></p>
<p><?php the_content('<div class="blog">続きを読む</p>'); ?></p>
<br>
<p class="blog">カテゴリー：<?php the_category(' , ') ?><?php the_tags(' | タグ：'); ?> | <?php edit_post_link('編集'); ?>
</p>
</div>

<br>

<div id="border2">
<?php comments_template(null, true); ?>
</div>

<?php endwhile; endif; ?>

<table class="com2">
<tr>
<td align="left"><?php previous_post_link('%link','←前の記事') ?></td>
<td align="right"><?php next_post_link('%link','次の記事→') ?></td>
</tr>
</table>
</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
