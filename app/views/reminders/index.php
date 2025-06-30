<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-12">
        <h1>Reminders</h1>
        <p a href="/reminders/create" class="btn btn-primary">Create Reminder</p>
      </div>
    </div>  
  </div>

  <?php
  print_r($data['reminders']);
    ?>

<?php require_once 'app/views/templates/footer.php'?>
