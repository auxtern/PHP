<?php
// Auxtern: Stack.php

class Stack{
    private $stack;

    function __construct()
    {
        $this->stack = array();
    }
    public function isEmpty(){
        if($this->getSize() <= 0) return true;
        else return false;
    }
    public function getSize(){
        return sizeof($this->stack);
    }
    public function push($item){
        $this->stack[$this->getSize()] = $item;
    } 
    public function top(){
        if($this->isEmpty()) return "Empty Stack!";
        return $this->stack[$this->getSize() - 1];
    }
    public function pop(){
        if($this->isEmpty()) return "Empty Stack!";
        $top = $this->top();
        unset($this->stack[$this->getSize() - 1]);
        return $top;
    }
    public function setEmpty(){
        $this->stack = array();
    }
}

