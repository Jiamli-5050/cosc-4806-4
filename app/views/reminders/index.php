<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once 'app/views/templates/header.php' ?>
<div class="container">
  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-12">
        <h1>Here is a list of all reminders</h1>
      </div>
    </div>  
  </div>

  <?php
  foreach ($data['reminders'] as $reminder) : ?>
    <p>
      <?= htmlspecialchars($reminder['subject']) ?>
      <a href="/reminders/update?id=<?= $reminder['id'] ?>">update</a>
      <form method ="post" action="/reminders/delete" style="display: inline;">
        <input type="hidden" name="id" value="<?= $reminder['id'] ?>">
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">delete</button>
      </form>
    </p>
   <?php endforeach; ?>

<?php require_once 'app/views/templates/footer.php' ?>
