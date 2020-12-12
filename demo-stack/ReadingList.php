<?php


class ReadingList
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10){
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item){
        if(count($this->stack) < $this->limit){
            array_unshift($this->stack,$item);
        } else {
            throw new RuntimeException("Stack is full");
        }
    }

    public function pop(){
        if($this->isEmpty()){
            throw new RuntimeException("Stack is empty!");
        } else {
            return array_shift($this->stack);
        }
    }

    public function top(){
        return current($this->stack);
    }
    public function isEmpty() {
        return empty($this->stack);
    }
}