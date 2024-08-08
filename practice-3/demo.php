<?php

class PencilBox1{
    public $name='shuvo';
    public $city='kalkini';
    public $country='Bangladesh';

    function add(){
        echo 'in add';
    }
    function minus(){
        echo 'in minus';
    }
    function rem(){
        echo 'in remember';
    }
}

$pencilbox1=new PencilBox1();
echo $pencilbox1->add();
