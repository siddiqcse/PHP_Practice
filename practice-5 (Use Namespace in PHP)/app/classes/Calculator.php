<?php


namespace App\classes;
class Calculator
{
public function myCalculation(){
    if($_POST['btn']=='+'){
        return ($_POST['first_number']+$_POST['second_number']);
    }else if($_POST['btn']=='-'){
        return ($_POST['first_number']-$_POST['second_number']);
    }else if($_POST['btn']=='*'){
        return ($_POST['first_number']*$_POST['second_number']);
    }else if($_POST['btn']=='/'){
        return ($_POST['first_number']/$_POST['second_number']);
    }else if($_POST['btn']=='%'){
        return ($_POST['first_number']%$_POST['second_number']);
    }
}
}