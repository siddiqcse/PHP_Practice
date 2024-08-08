<?php
require_once './vendor/autoload.php';
use App\classes\Calculator;

    $total='';
    if(isset($_POST['btn'])){
        $calculator=new Calculator();
        $total=$calculator->myCalculation();
    }
?>

<form action="" method="post">
    <table>
        <tr>
            <th>First Number</th>
            <td><input type="number" name="first_number"></td>
        </tr>

        <tr>
            <th>Second Number</th>
            <td><input type="number" name="second_number"></td>
        </tr>

        <tr>
            <th>Result</th>
            <td><input type="number" value="<?php echo $total ?>"></td>
        </tr>

        <tr>
            <th></th>
            <td><input type="submit" name="btn" value="+" /></td>
            <td><input type="submit" name="btn" value="-" /></td>
            <td><input type="submit" name="btn" value="*" /></td>
            <td><input type="submit" name="btn" value="/" /></td>
            <td><input type="submit" name="btn" value="%" /></td>
        </tr>
    </table>
</form>
