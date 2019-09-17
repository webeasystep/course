<div class="panel-footer">
      <span>
            <a href=<?php echo "../users/profile.php?user=" . $comment['comment_author']; ?>>
                <?php echo $comment['comment_author']; ?>
            </a>
            <i>-</i>
          <?php echo $comment['comment_desc']; ?>
      </span>

    <span>
          <span class="pull-right"><i><?php echo $comment['commentTime']; ?></i></span>
      </span>
</div>
