
  <form action="/api/post_topic" method="post" id="topic-form">
    <?php $this->partial('post_form'); ?>
  </form>
  <?php $this->partial('sequence', array(
    'where' => 'parent_id = ?',
    'value' => 0
  )); ?>
