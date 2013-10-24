<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
    global $inove_nosidebar;
    $options = get_option('inove_options');
    if (is_home()) {
        $home_menu = 'current_page_item';
        $title = get_bloginfo('name') . ' | ' . get_bloginfo('description');
    } else {
        $home_menu = 'page_item';
        $title = wp_title('|', false, 'right') . get_bloginfo('name');
    }
    if($options['feed'] && $options['feed_url']) {
        if (substr(strtoupper($options['feed_url']), 0, 7) == 'HTTP://') {
            $feed = $options['feed_url'];
        } else {
            $feed = 'http://' . $options['feed_url'];
        }
    } else {
        $feed = get_bloginfo('rss2_url');
    }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <!--
    Birine mi baktin gardas?
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

    <title><?php echo($title); ?></title>
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - all posts" href="<?php echo($feed); ?>" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0 - all comments" href="http://blog.yollu.com/comments/feed/" />

        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- style START -->
    <!-- default style -->
        <style type="text/css" media="screen">@import url( http://blog.yollu.com/wp-content/themes/inove/style.css );</style>
    <!--[if IE]>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen" />
    <![endif]-->
    <!-- style END -->

    <!-- script START -->
        <script type="text/javascript" src="http://blog.yollu.com/wp-content/themes/inove/js/base.js"></script>
        <script type="text/javascript" src="http://blog.yollu.com/wp-content/themes/inove/js/menu.js"></script>
    <!-- script END -->

    <?php wp_head(); ?>
</head>

<?php flush(); ?>

<body>
<!-- wrap START -->
<div id="wrap">

<!-- container START -->
<div id="container" <?php if($options['nosidebar'] || $inove_nosidebar){echo 'class="one-column"';} ?> >

<?php include('templates/header.php'); ?>

<!-- content START -->
<div id="content">

    <!-- main START -->
    <div id="main">
