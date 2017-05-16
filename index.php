<? get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- Main -->
<div id="main">
	<div class="inner">
		<? the_content();?>	
	</div>
</div>
<?php endwhile; endif; ?>
<? get_footer(); ?>