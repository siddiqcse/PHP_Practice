<?php
require_once './PencilBox.php';

class Example extends PencilBox
{
    public $phone='129120912';
    protected $email='194016@student.duet.ac.bd';
    private $location='Dhaka,Bangladesh';

    public function One($name){
//        echo 'in One';
//        echo $this->email.' '.$this->location.' '.$this->name;
        echo $name;
    }
    protected function Two(){
        echo 'in Two';
    }
    private function Three(){
        echo 'in Three';
    }

}