<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php Plugins::act( 'theme_sidebar_top' ); ?>

<div class="secondary1">
	<ul class="pages">
		<li><h2><a href="<?php Site::out_url( 'habari' ); ?>">home</a></h2></li>
		<?php
			foreach ( $pages as $page ) {
			echo '<li><h2><a href="' . $page->permalink . '" title="' . $page->title . '">' . $page->title . '</a></h2></li>' . "\n"; }
		?>
	</ul>
	<?php echo $theme->area('nav'); ?>
</div>

<div class="secondary2">
	<?php echo $theme->area( 'sidebar' ); ?>
</div>