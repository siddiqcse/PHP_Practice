<?php


class PencilBox
{
    public $name='shuvo';
    protected $city='Gazipur';
    private $country='Bangladesh';

    public function add(){
        echo 'in Add';
    }
    protected  function minus(){
        echo 'in Minus';
    }
    private  function rem(){
        echo 'in rem';
    }

}