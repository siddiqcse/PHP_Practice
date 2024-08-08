<?php
require_once './vendor/autoload.php';
use App\classes\Student;

    $msg='';
    if(isset($_POST['btn'])){
        $student=new Student();
        $msg=$student->saveStudentInfo();
    }
?>

<hr/>
<a href="index.php">Add Student</a>||
<a href="view.php">View Student</a>
<hr/>

<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" required name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" required name="email"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" required name="number"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="submit" ></td>
        </tr>
    </table>
</form>
