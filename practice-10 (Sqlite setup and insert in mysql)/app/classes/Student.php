<?php

namespace App\classes;
class Student
{
    public function saveStudentInfo(){
//        echo '<pre>';
//        print_r($_POST);
        $link=mysqli_connect('localhost','root','','student');
//        echo '<pre>';
//        print_r($link);
//        $student=(object)$_POST;
        extract($_POST);

        //$sql="INSERT INTO students(name,email,phone) VALUES ('$student->name','$student->email','$student->number')";
        $sql="INSERT INTO students(name,email,phone) VALUES ('$name','$email','$number')";
        if(mysqli_query($link,$sql)){
//         echo 'successfully';
            return 'Student info save successfully';
        }else{
//            echo 'Database Problems'.mysqli_error($link);
            die("Query Problems  ".mysqli_error($link));
        }
    }
}