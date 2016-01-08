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
        <div id="top">
          <p><strong>hello.box</strong> / <a href="about">About</a> / <a href="forum">Forum</a> / <a href="art">Art</a></p>
          <?php if ($post_url != '') { ?>
            <a href="<?php echo $post_url; ?>" id="post-button" class="post button" ontouchstart="" data-cancel="<?php echo _('Cancel'); ?>"><span class="icon"></span> <?php echo $post_title; ?></a>
          <?php } ?>
          <div class="clear"></div>

        </div>
      </header>
      <?php } ?>
      <?php $this->give(); ?>
    </div>
    <?php $this->give('footer'); ?>
  </body>
</html>
