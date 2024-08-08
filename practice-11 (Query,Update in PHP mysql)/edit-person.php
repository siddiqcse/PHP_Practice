<?php
require_once 'vendor/autoload.php';
use App\classes\Person;

    $person=new Person();
    $queryResult=$person->getPersonDataById($_GET['id']);
    $persondatabyid=mysqli_fetch_assoc($queryResult);

    if(isset($_POST['btn'])){
        $person->updatePersonDataById($_GET['id']);
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
            <td><input type="text" value="<?php echo $persondatabyid['name'] ?>" required name="name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" value="<?php echo $persondatabyid['email'] ?>" name="email"></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><input type="number" value="<?php echo $persondatabyid['mobile'] ?>"  name="mobile"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Update" name="btn"></td>
        </tr>
    </table>
</form>
