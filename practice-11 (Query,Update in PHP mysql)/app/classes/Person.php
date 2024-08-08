<?php
namespace App\classes;
class Person
{
    public function databaseconnecr(){
        return mysqli_connect('localhost','root','','person');

    }

    public function insertPersonData(){
        $link=$this->databaseconnecr();
//        echo '<pre>';
//        print_r($link);
        $data=(object)$_POST;
        $sql="INSERT INTO persons (name,email,mobile) VALUES ('$data->name','$data->email','$data->mobile')";
        if(mysqli_query($link,$sql)){
            echo 'save successfully';
        }else{
            echo 'failed to save '.mysqli_error($link);
        }
    }

    public function getAllDataFromPersonTable(){
        $sql="SELECT * FROM persons";
        if($queryResult=mysqli_query($this->databaseconnecr(),$sql)){
//            echo '<pre>';
//            print_r($queryResult);

            // Get first data from database we need all data so use while loop
//            $person=mysqli_fetch_array($queryResult);
//            echo '<pre>';
//            print_r($person);

            // i fetch all data from database but i saw data get 2method 1.index wise 2.numeric index wise
            // so i need data only database column index wise
//            while ($person=mysqli_fetch_array($queryResult)){
//                echo '<pre>';
//                print_r($person);
//            }

            // finally we got data from database column index name wise
//            while ($person=mysqli_fetch_assoc($queryResult)){
//                echo '<pre>';
//                print_r($person);
//            }

            // we don't use html tag in class so we need to return then data fetch view-person.php file
            return $queryResult;
        }else{
            die('Query Problems. '.mysqli_error($this->databaseconnecr()));
        }
    }

    public function getPersonDataById($id){
        $sql="SELECT * FROM persons WHERE id='$id'";
        if ($queryResult=mysqli_query($this->databaseconnecr(),$sql)){
            return $queryResult;
        }else{
            die('Query Problems. '.mysqli_error($this->databaseconnecr()));
        }
    }

    public function updatePersonDataById($id){
        $sql="UPDATE persons SET name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]' WHERE id='$id'";
        if(mysqli_query($this->databaseconnecr(),$sql)){
            echo 'Update successful';
            header('Location: view-person.php');
        }else{
            die(mysqli_error($this->databaseconnecr()));
        }
    }

}