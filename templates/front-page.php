<?php
/*
Template Name: Hero page
*/
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- wordpress head functions -->
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/zippo.css"/>
</head>
<body <?php body_class(); ?>>
<div class="root-container">
    <?php zippo_header(); ?>
    <?php zippo_header_slider(array(
        'show_tabs' => true
    )); ?>
    <div class="content-container">
        <div class="row">
            <div class="front-page-widgets large-8 columns">
                <?php if (is_active_sidebar('live_content_2015')) : ?>
                    <?php dynamic_sidebar('live_content_2015'); ?>
                <?php endif; ?>
            </div>
            <div class="sidebar large-4 columns">
                <?php if (is_active_sidebar('live_sidebar_template_2015')) : ?>
                    <?php dynamic_sidebar('live_sidebar_template_2015'); ?>
                <?php endif; ?>
            </div>

            <?php get_footer('zippo'); ?>


