<?php

class Task {
    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }
    public function isComplete(){
        return $this->completed;
    }
    public function complete()
    {
        $this->completed = true;
    }
    public function getDescription()
    {
        return $this->description;
    }
}

$task = new Task('go to the store');

$tasks = [new Task('go to the store'),
          new Task('buy milk'),
          new Task('go to school')];

// var_dump($task);
$tasks[0]->complete();

require "views/index.view.php";