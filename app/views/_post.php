<article id="<?php echo "post_$post->id"; ?>" class="post <?php echo $class; ?>">

  <div class="container" ontouchstart="">
  	<div class="author">
  	<a href="u/<?php echo $post->user_id; ?>" class="id"><?php echo get_username($post->user_id); ?></a>
  	</div>
    <div class="text-only hidden">
      <?php echo htmlentities($post->content, ENT_COMPAT, 'UTF-8'); ?>
    </div>
    <div class="content">
      <?php echo nl2br(htmlentities($post->content)); ?>
    </div>
  </div>
  <div class="meta">
    
        <?php
 	echo '<span class="elapsedtime">'.elapsed_time($post->created).'</span>';
    if ($this->view == 'user.php' && $post->parent_id != '0') {
      echo " / <a href=\"p/$post->parent_id\">" . _('In reply to') . '</a>';
    }
    
    ?>
    <a class="replies-link" href="<?php
      
      $url = "p/$post->id";
      if ($post->reply_count == 0) {
        echo "$url#reply\">" . _('post a reply');
      } else {
        echo "$url\">" . sprintf(ngettext('%d reply', '%d replies', $post->reply_count), $post->reply_count);
      }
      
      ?></a>
      <?php if (!empty($_SESSION['is_admin'])) { ?>
        <a href="#" class="delete" data-id="<?php echo $post->id; ?>"><?php echo _('delete'); ?></a>
      <?php } ?>
  </div>
  <div class="clear"></div>
</article>
