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
       <div id="header">
      	<h1><a href="">hello.box</a></h1>
      </div>
      <?php $this->give(); ?>
    </div>
    <?php $this->give('footer'); ?>
  </body>
</html>
