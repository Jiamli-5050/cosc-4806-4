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
      <a href="/reminders/delete?id=<?= $reminder['id'] ?>">delete</a>
    </p>
   <?php endforeach; ?>

  <h3> Create a reminder</h3>
  <form method="post" action="/reminders/store">
    <table class="table table-bordered mt-3">
      <thead>
        <tr>
          <th> New Reminder</th>
          <th style ="width: 100px">Action </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <input type="text" name="subject" class="form-control" placeholder="Enter reminder" required>
          </td>  
          <td>
            <button type="submit" class="btn btn-primary">Create</button>
       </td>
    </tr>
  </tbody>
 </table>
</form>
<?php require_once 'app/views/templates/footer.php' ?>
