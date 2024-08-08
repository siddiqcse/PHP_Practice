<?php
    require_once 'vendor/autoload.php';
    use App\classes\Person;

    $person=new Person();
    $queryResult=$person->getAllDataFromPersonTable();
?>

<hr/>
<a href="index.php">Add Person</a>  ||
<a href="view-person.php">View Person</a>
<hr/>

<table border="1" width="800">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Action</th>
    </tr>
    <?php while ($persondata=mysqli_fetch_assoc($queryResult)) { ?>
    <tr>
        <td><?php echo $persondata['name'] ?></td>
        <td><?php echo $persondata['email'] ?></td>
        <td><?php echo $persondata['mobile'] ?></td>
        <td>
<!--            <a href="edit-person.php?id=--><?php //echo $persondata['id'] ?><!--">Edit</a>-->
            <a href="edit-person.php?id=<?php echo $persondata['id'] ?>">Edit</a>
            <a href="" >Delete</a>
        </td>
    </tr>

    <?php } ?>
</table>
