<?php foreach ($alluser as $user):?>
  <p>
    <?php echo $user->fname ?>
    <?php echo $user->lname ?>
    <?php echo $user->username ?>
    <?php echo $user->userrole ?>

  </p><br>

<?php endforeach ?>
