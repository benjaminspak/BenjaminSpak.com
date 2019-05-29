
<?php

//  require('functions.php');

class Task {
    public $description;
    public $completed = false;
    
    public function __construct($description) {
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screen cast'),
    new Task('Clean my room'),
];

// try {
    // $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
// } 
// catch(PDOException $e) {
    // die('Could not connect.');
// }

//  dd($tasks);

require('pdo.view.php');