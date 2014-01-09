<!-- sidebar -->

<img src="<?php bloginfo('stylesheet_directory'); ?>/image/touka.gif" title="ここからサイドバーです。" alt="ここからサイドバーです。">
<div id ="sidebar">
<?php if( ! dynamic_sidebar('primary-widget-area')): ?>

	<h3>サイト内検索</h3>
	<?php the_widget('WP_Widget_Search', 'before_title=<h3>'); ?>

	<?php the_widget('WP_Widget_Recent_Posts', 'number=5', 'before_title=<h3>'); ?>

	<?php the_widget('WP_Widget_Recent_Comments', '', 'before_title=<h3>'); ?>

	<?php the_widget('WP_Widget_Categories', '', 'before_title=<h3>'); ?>

	<?php the_widget('WP_Widget_Archives', '', 'before_title=<h3>'); ?>

	<?php the_widget('WP_Widget_Tag_Cloud', '', 'before_title=<h3>'); ?>

	<?php the_widget('WP_Widget_Meta', '', 'before_title=<h3>'); ?>

<?php endif; ?>
</div>
