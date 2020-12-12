<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit = 10)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    public function push($item){
        if (count($this->stack)< $this->limit){
            array_unshift($this->stack,$item);
        }
        else {
            return "stack full!";
        }
    }

    public function pop(){
        if ($this->isEmpty()){
         //   return array_shift($this->stack);
          //  return "empty";
            return array_shift($this->stack);
        }
    }

    public function isEmpty(){
       if(empty($this->stack)){
           return true;
       }else {
           return "Stack not empty";
       }
    }

    public function top(){
        return current($this->stack);
    }
}