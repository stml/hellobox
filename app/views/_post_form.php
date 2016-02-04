<?php

if (empty($content)) {
  $content = '';
}
$placeholder = _('Type your message here');
if (empty($form_class)) {
  $form_class = "user_{$grid->user->id}";
}

?>
<article id="post-form" class="<?php echo $form_class; ?>">
  <div class="container">
      <div class="author">
    <a href="<?php echo "u/{$_SESSION['user_id']}"; ?>" class="id"><?php echo get_username($_SESSION['user_id']); ?></a>
    <a href="#" id="edit-username"><?php echo _('edit name'); ?></a>
  </div>
    <div id="post-preview"></div>
    <textarea name="content" rows="1" cols="40" class="content" placeholder="<?php echo $placeholder; ?>"><?php echo esc($content); ?></textarea>
  </div>
  <div id="username-form" class="hidden">
    <input type="text" name="username" placeholder="Anonymous" value="<?php echo htmlentities($grid->user->name); ?>"><br>
  </div>
  <?php if ($params['view'] != 'topic') { ?>
    <a href="#" id="edit-options"><?php echo _('options'); ?></a>
  <?php } ?>
  <div class="buttons">
    <button id="submit-button" type="submit" name="task" value="post" class="post button" ontouchstart=""><span class="icon"></span> <?php echo _('Submit'); ?></button>
    <div class="clear"></div>
  </div>
</article>
