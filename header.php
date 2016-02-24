<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="<?php bloginfo('template_directory');?>/base.css" rel="stylesheet">
    <title><?php echo get_bloginfo('name')?></title>
    <?php wp_head();?>
</head>
<body>
<h2><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo('name')?></a></h2>
<h4><?php echo get_bloginfo( 'description' ); ?></h4>
<nav class="menu">
    <a href="/">HOME</a>
    <a href="/forum">FORUM</a>
    <a href="/qna">QnA</a>
</nav>