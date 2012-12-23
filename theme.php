<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<?php

// Apply Format::autop() to post content...
Format::apply( 'autop', 'post_content_out' );
// Apply Format::autop() to comment content...
Format::apply( 'autop', 'comment_content_out' );
// Apply Format::tag_and_list() to post tags...
Format::apply( 'tag_and_list', 'post_tags_out' );
// Limit post length and read more
Format::apply_with_hook_params( 'more', 'post_content_out', '<br /><br />Read more...', 100, 2 );
//Format the calendar like date for home, entry.single and entry.multiple templates
Format::apply( 'nice_date', 'post_pubdate_out', 'l, d F Y' );

// We must tell Habari to use MyTheme as the custom theme class:
define( 'THEME_CLASS', 'CornerStone' );

class CornerStone extends Theme

{

	public function add_template_vars()
	{
		if( !$this->template_engine->assigned( 'pages' ) ) {
			$this->assign('pages', Posts::get( array( 'content_type' => 'page', 'status' => Post::status('published') ) ) );
		}
		$this->assign( 'loggedin', User::identify()->loggedin );
	}
	
			
}		

?>