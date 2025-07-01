<?php

class Reminders extends Controller {

   public function index() {
     $reminder = $this->model('Reminder');
     $list_of_reminders = $reminder->get_all_reminders($_SESSION['user_id']);
     $this->view('reminders/index', ['reminders' => $list_of_reminders]); 
   } 

  
    public function create() {
      $reminder = $this->model('Reminder');
      $this->view('reminders/create');
    }

   public function store() {
     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subject'])) {
       $subject = trim($_POST['subject']);
       if (!empty($subject)) {
         $reminder = $this->model('Reminder');
         $reminder->create_reminder($subject, $_SESSION['user_id']);
       }
       }
         header('Location: /reminders');
     exit;
   }
}