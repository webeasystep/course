<div class="panel-footer">
      <span>
            <a href=<?php echo "../users/profile.php?user=".$comment['commentAuthor'];?> >
                <?php echo $comment['commentAuthor']; ?>
            </a>

            <i>-</i>

              <?php echo $comment['commentDesc']; ?>

      </span>

      <span>
          <span class="pull-right"><i><?php echo $comment['commentTime']; ?></i></span>
      </span>
</div>
