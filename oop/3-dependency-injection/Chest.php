<?php

class Chest{
    protected $lock;
    protected $isClosed;

    public function __construct(Lock $lock){
        $this->lock = $lock;
    }

    public function close($lock = true){
        if($lock === true){
            $this->lock = $lock;
        }

        $this->isClosed = true;
        echo 'closed';
    }

    public function open(){
        if ($this->lock->isLocked()){
            $this->lock->unlock();
        }
        $this->isClosed = false;
        echo 'open';
    }

    public function isClosed(){
       return $this->isClosed;
    }
}