<?php

class Task {
    public $description;
    public $completed;
    // protected $description;
    // protected $completed = false;

    // public function __construct($description,$completed)
    // {
    //     $this->description = $description;
    //     $this->completed = $completed;
    // }
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