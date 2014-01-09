<?php get_header(); ?>

<!-- content -->
<img src="<?php bloginfo('stylesheet_directory'); ?>/image/touka.gif" title="エラーページです。" alt="エラーページです。">
<div id="content">

<h1>ご指定のページが見つかりません</h1>

<p>大変申し訳ございませんがご指定頂いたページが見つかりません</p>
<p>
アドレスをご確認の上もう一度お試し頂くか、<br>
もしくは<a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>へ戻って該当のページをお探しください。
</p>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
