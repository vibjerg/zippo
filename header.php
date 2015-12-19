<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
  <!--<script src="<?php echo get_template_directory_uri(); ?>/vendor/foundation/js/vendor/jquery.js"></script>-->
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <!-- wordpress head functions -->
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/public/zippo.css"/>
</head>
<body <?php body_class('std-header'); ?>>
<div class="root-container">

  <?php zippo_header(); ?>
  <div class="row content">