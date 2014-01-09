<?php get_header(); ?>

<!-- content -->

<img src="<?php bloginfo('stylesheet_directory'); ?>/image/touka.gif" title="ここからアーカイブです。" alt="ここからアーカイブです。">

<div id="content">

<?php if(category_description()): ?>
	<div class="archive-meta"><?php echo category_descrition(); ?></div>
<?php endif; ?>

<table>
<tr>
<td align="left"><?php previous_posts_link('←古い投稿') ?></td>
<td align="right"><?php next_posts_link('新しい投稿→') ?></td>
</tr>
</table>

<div id="border">

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<h2>
<a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p class="blog"><?php the_date("y/m/d"); ?>　<?php the_time("H:i"); ?></p>

<p>
<?php the_excerpt(); ?>
<p><a href="<?php the_permalink(); ?>" class="more-link">続きを読む<span class="meta-nav"></span></a></p>

</p>

<p class="blog">カテゴリー：<?php the_category(', ') ?><?php the_tags(' | タグ：'); ?></p>

<br><br>

<?php endwhile; endif; ?>
</div>

<br>

<table>
<tr>
<td align="left"><?php previous_posts_link('←古い投稿') ?></td>
<td align="right"><? next_posts_link('新しい投稿→') ?></td>
</tr>
</table>
</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
