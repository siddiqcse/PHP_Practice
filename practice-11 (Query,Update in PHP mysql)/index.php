<?php
require_once 'vendor/autoload.php';
use App\classes\Person;

    if(isset($_POST['btn'])){
        $person=new Person();
        $person->insertPersonData();
    }

?>

<hr/>
    <a href="index.php">Add Person</a>  ||
    <a href="view-person.php">View Person</a>
<hr/>

<form action="" method="post">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" required name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="submit" name="btn"></td>
        </tr>
    </table>
</form>
