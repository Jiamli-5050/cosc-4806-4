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

  <table class="table table-bordered mt-3">
    <thead>
      <tr>
        <th>Reminder</th>
        <th style="width: 180px;">Action</th>
      </tr>
    </thead>
  <tbody>

  <?php foreach ($data['reminders'] as $reminder) : ?>
    <tr>
      <td><?= htmlspecialchars($reminder['subject']) ?></td>
      <td>
      <a href="/reminders/update?id=<?= $reminder['id'] ?>" class="btn btn-sm btn-warning">Update</a>
      <form method ="post" action="/reminders/delete" style="display: inline;">
        <input type="hidden" name="id" value="<?= $reminder['id'] ?>">
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
      </form>
      </td>
  </tr>
   <?php endforeach; ?>
  </tbody>  
  </table>

<?php require_once 'app/views/templates/footer.php' ?>
