<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>

<div id="sidebar">
	<?php echo $theme->display ( 'sidebar' ); ?>
</div>

<div>
	<?php echo $theme->display ( 'header' ); ?>
</div>

<div class="content">
	<div class="title">
		<?php echo $post->title_out; ?>
	</div>
	<div id="post">
		<?php echo $post->content_out; ?>
	</div>
</div>

<?php echo $theme->display ( 'footer' ); ?>