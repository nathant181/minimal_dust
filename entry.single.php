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
	<div class="meta">
		<?php echo $post->pubdate_out; ?> <?php echo $post->tags_out; ?><a href="<?php echo $post->permalink; ?>"></a> <?php if ( $loggedin ) { ?><a href="<?php echo $post->editlink; ?>"><?php _e('Edit'); ?></a><?php } ?>
	</div>
	<div id="post">
		<?php echo $post->content_out; ?>
	</div>
</div>

<div id="comments">
	<!-- Extra <div> here should be unnecessary but is required for IE centering hack -->
	<div class="comments-title">
		<h3><?php _e( 'Penny for your thoughts?' ); ?></h3>
	</div>
<?php include 'comments.php'; ?>
		
		<!-- comment form -->
		
		<?php include 'commentform.php'; ?>
		
		<!-- /comment form -->
</div>

<?php echo $theme->display ( 'footer' ); ?>

