<?php if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<!-- Import font -->
	<link rel="stylesheet" href="<?php Site::out_url( 'theme' ); ?>/font/stylesheet.css" type="text/css" charset="utf-8">
	
	<meta http-equiv="Content-Type" content="text/html">
	<title><?php if($request->display_entry && isset($post)) { echo "{$post->title} - "; } ?><?php Options::out( 'title' ) ?></title>
	<meta name="generator" content="Habari">
	<link rel="edit" type="application/atom+xml" title="Atom Publishing Protocol" href="<?php URL::out( 'atompub_servicedocument' ); ?>">
	<link rel="alternate" type="application/atom+xml" title="Atom" href="<?php $theme->feed_alternate(); ?>">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php URL::out( 'rsd' ); ?>">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php Site::out_url( 'theme' ); ?>/style.css">
	<link rel="Shortcut Icon" href="<?php Site::out_url( 'theme' ); ?>/images/favicon.ico">
	<?php $theme->header(); ?>	
</head>

<body>
	<div id="header">
		<p class="sitename">
			<a href="<?php Site::out_url( 'habari'); ?>" title="<?php Options::out( 'title' ); ?>"> <?php Options::out( 'title' ); ?></a>
		</p>
		<p class="tagline">
			<?php Options::out( 'tagline' ); ?>
		</p>
	</div>