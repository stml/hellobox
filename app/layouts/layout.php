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
        <div id="announcements">
          <?php $this->give('announcements'); ?>
        </div>
        <div id="top">
          <a href="#" id="menu-button" class="menu button" ontouchstart=""><span class="icon"></span> <?php echo _('Menu'); ?></a>
          <?php if ($post_url != '') { ?>
            <a href="<?php echo $post_url; ?>" id="post-button" class="post button" ontouchstart="" data-cancel="<?php echo _('Cancel'); ?>"><span class="icon"></span> <?php echo $post_title; ?></a>
          <?php } ?>
          <div class="clear"></div>
          <?php if (!empty($back_url)) { ?>
            <a href="<?php echo $back_url; ?>" id="back"><span class="icon"></span><?php echo $back_title; ?></a>
          <?php } ?>
        </div>
      </header>
      <?php } ?>
      <?php $this->give(); ?>
      <?php $this->partial('languages'); ?>
    </div>
    <?php $this->give('footer'); ?>
  </body>
</html>
