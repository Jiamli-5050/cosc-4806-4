<?php

class Reminder {

  public function __construct() {

  }

  public function get_all_reminders () {
    $db = db_connect ();
    $statement = $db->prepare("select * from reminders ORDER BY id DESC");
    $statement->execute ();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function create_reminder ($subject) {
    $db = db_connect ();
    $statement = $db->prepare("INSERT INTO reminders (subject) VALUES (:subject)");
    $statement->execute (['subject' => $subject]);
  }
  
  public function update_reminder ($reminder_id) {
    $db = db_connect ();
   // do update statement
  }

  public function delete_reminder ($id) {
    $db = db_connect ();
    $statement = $db->prepare("DELETE FROM reminders WHERE id = :id");
    $statement->execute (['id' => $id]);
  }
}
  ?>