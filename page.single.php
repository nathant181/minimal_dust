<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php echo $theme->display ( 'header' ); ?>

<div class="content">
	<div class="title">
		<?php echo $post->title_out; ?>
	</div>
	<div id="post">
		<?php echo $post->content_out; ?>
	</div>
</div>

<?php echo $theme->display ( 'footer' ); ?>