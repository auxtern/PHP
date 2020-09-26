<?php
// Auxtern: Queue.php

class Queue{
    private $queue;
    private $pfront;

    function __construct()
    {
        $this->queue = array();
        $this->pfront = 0;
    }

    public function setEmpty(){
        $this->queue = array();
        $this->pfront = 0;
    }

    public function getSize(){
        return sizeof($this->queue);
    }

    public function isEmpty(){
        if($this->getSize() <= 0) return true;
        else return false;
    }

    public function enqueue($item){
        $this->queue[$this->getSize() + $this->pfront] = $item;
    } 

    public function front(){
        if($this->isEmpty()) return "Empty Queue!";
        return $this->queue[$this->pfront];
    }

    public function dequeue(){
        if($this->isEmpty()) return "Empty Queue!";
        $top = $this->front();
        unset($this->queue[$this->pfront]);
        $this->pfront += 1;
        return $top;
    }
}



