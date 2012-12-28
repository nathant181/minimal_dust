<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php include_once("analyticstracking.php") ?>

<div>
    <?php include 'header.php'; ?>
</div>

<div id="header">
    <h3>Search Results for '<?php echo htmlspecialchars( $criteria ); ?>'</h3>
</div>

<?php foreach ( $posts as $post ) { ?>
        <div class="content">
            <p class="title">
                <a href="<?php echo $post->permalink; ?>" title="<?php echo $post->title; ?>"><?php echo $post->title_out; ?></a>
            </p>
            <p class="meta">
                <?php echo $post->pubdate_out; ?> <?php echo $post->tags_out; ?><a href="<?php echo $post->permalink; ?>"></a> <?php if ( $loggedin ) { ?><a href="<?php echo $post->editlink; ?>"><?php _e('Edit'); ?></a><?php } ?>
            </p>
            <div id="post">
                <?php echo $post->content_out;
                ?>
            </div>
    </div>
    <?php } ?>

<div class="navigation">
<!-- Extra <div> here should be unnecessary but is required for IE centering hack -->
    <div class="pager">
        <p><?php echo $theme->next_page_link('&laquo; Previous Entries'); ?></p>
        <p><?php echo $theme->prev_page_link('Next Entries &raquo;'); ?></p>
    </div>
</div>

<?php echo $theme->display ( 'footer' ); ?>