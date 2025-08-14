<div class="recent-comments" role="complementary">
  <div class="recent-comments-content">
    <div class="recent-comments-head">
      <h3 class="recent-comments-title">Latest Posts</h3>
    </div>
    <div class="recent-comments-body">
      <div class="recent-comments-list">
        <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=30')->to($posts);?>
        <?php if (!$posts->have()): ?>
          <div class="recent-comments-list-placeholder">No posts yet</div>
        <?php else: ?>
          <?php while ($posts->next()): ?>
            <a class="recent-comments-list-item" href="<?php $posts->permalink();?>" target="_self" title="<?php $posts->title();?>">
              <div class="recent-comments-list-item-content">
                <div class="recent-comments-list-item-title"><?php $posts->title();?></div>
              </div>
            </a>
          <?php endwhile;?>
        <?php endif;?>
      </div>
    </div>
  </div>
</div>
