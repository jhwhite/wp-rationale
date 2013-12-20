<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?> </title>

    <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more." />
    
    <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com" />
    <meta name="copyright" content="ZURB, inc. Copyright (c) 2013" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />


    <?php wp_head(); ?>

  </head>
  <body>
<!-- Nav Bar -->
<div class="fixed">
  <nav class="top-bar" data-topbar> 
    <ul class="title-area"> 
      <li class="name"> 
        <h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1> 
      </li> 
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li> 
    </ul> 

    <section class="top-bar-section"> 
      <!-- Left Nav Section --> 
      <ul class="left"> 
        <?php wp_list_pages(array('title_li' => '', 'exclude' => 4)); ?>
      </ul> 
    </section> 
  </nav>
</div>
  <!-- End Nav -->
