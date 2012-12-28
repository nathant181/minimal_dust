<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php echo $theme->display ( 'header' ); ?>

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
	
	<div id="addthis">
	<!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
			<a class="addthis_counter addthis_pill_style"></a>
		</div>
		<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f019c39727751b5"></script>
	<!-- AddThis Button END -->
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

