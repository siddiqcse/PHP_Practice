<?php
namespace App\classes;
class Student
{

    public $name='Sajib';
    protected $email='Shuvo@gmai.com';
    private $phone='01777368276';
    static $city='Dhaka';
    public $demo;

    public function __construct($test){
        $this->demo=$test;
    }

    public  function test(){
        //echo 'In Test';
//        echo $this->phone;
//        echo $this->world();
        //Student::$city;
        echo $this->demo;

        //echo Student::$city;
    }
    protected function hello(){
        echo 'In Hello';
    }
    private function  world(){
        echo 'in World';
    }

}