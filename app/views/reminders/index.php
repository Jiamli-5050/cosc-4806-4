<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-12">
        <h1>Reminders</h1>
        <a href="/reminders/create" class="btn btn-primary">Create Reminder</a>
      </div>
    </div>  
  </div>

  <?php
  foreach ($data['reminders'] as $reminder) : ?>
    <p>
      <?= htmlspecialchars($reminder['subject']) ?>
      <a href="/reminders/update?id=<?= $reminder['id'] ?>">update</a>
      <a href="/reminders/delete?id=<?= $reminder['id'] ?>">delete</a>
    </p>
   <?php endforeach; ?>

<?php require_once 'app/views/templates/footer.php' ?>
