<?php

class Reminder {

  public function __construct() {

  }

  public function get_all_reminders ($user_id) {
    $db = db_connect ();
    $statement = $db->prepare("select * from reminders WHERE user_id = :uid ORDER BY id DESC");
    $statement->execute (['uid' => $user_id]);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function create_reminder ($subject, $user_id) {
    $db = db_connect ();
    $statement = $db->prepare("INSERT INTO reminders (subject, user_id) VALUES (:subject, :user_id)");
    $statement->execute (['subject' => $subject, 'user_id' => $user_id]);
  }
  
  public function update_reminder ($reminder_id) {
    $db = db_connect ();
   // do update statement
  }
}
  ?>