<?php
require_once './PencilBox.php';
require_once './Example.php';

//$pencilbox=new PencilBox();
//
//echo $pencilbox->name;

$example=new Example();
$example->One($_POST['name']);

//echo $_GET['name'];

?>

<form action="" method="post">
    <input type="text" name="name">
    <input type="submit" name="btn" value="Click">
</form>
