<?php


namespace App\classes;
class User
{
    public function makeFullName(){
//        echo 'in make full name';
//        print_r($_POST);
//        $firstName=$_POST['first_name'];
//        $lastName=$_POST['last_name'];


        $user=(object)$_POST;
        $firstName=$user->first_name;
        $lastName=$user->last_name;

        $fullName=$firstName.' '.$lastName;
        return $fullName;
    }
}