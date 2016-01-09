<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $page_title; ?></title>
    <base href="<?php echo $base_path; ?>/">
    <?php $this->give('header'); ?>
  </head>
  <body class="<?php echo $body_class; ?>" data-servertime="<?php echo time(); ?>" data-colors="<?php echo get_colors(); ?>">
    <div id="page">
      <?php
      
      if ($params['view'] != 'intro') {
        $this->partial('menu');
        
      ?>
      <header>

          <ul class="headmenu">
          	<li><strong>hello.box</strong></li>
          	<li><a href="about">About</a>
          	<li><a href="forum">Forum</a>
          	<li><a href="gallery">Gallery</a></li>
          </ul>
<!--
          <?php if ($post_url != '') { ?>
            <a href="<?php echo $post_url; ?>" id="post-button" class="post button" ontouchstart="" data-cancel="<?php echo _('Cancel'); ?>"><span class="icon"></span> <?php echo $post_title; ?></a>
          <?php } ?>
-->

      </header>
      <?php } ?>
      <?php $this->give(); ?>
    </div>
    <?php $this->give('footer'); ?>
  </body>
</html>
