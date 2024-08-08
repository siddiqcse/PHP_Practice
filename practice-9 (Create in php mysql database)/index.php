<?php
require_once './vendor/autoload.php';
use App\classes\UserInputOutput;

$result=[];

    if (isset($_POST['btn'])){
        $userinputoutput=new UserInputOutput();
        $result=$userinputoutput->input_output_number();
    }else{
        $result['first_number']=0;
        $result['second_number']=0;
        $result['third_number']=0;
        $result['four_number']=0;
        $result['fifth_number']=0;
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
            <th>Third Number</th>
            <td><input type="number" name="third_number"></td>
        </tr>
        <tr>
            <th>Forth Number</th>
            <td><input type="number" name="four_number"></td>
        </tr>
        <tr>
            <th>Fifth Number</th>
            <td><input type="number" name="fifth_number"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="submit" name="btn"></td>
        </tr>
    </table>
</form>

<hr />
<table border="1" width="900">
    <tr>
        <th>First Number</th>
        <th>Second Number</th>
        <th>Third Number</th>
        <th>Forth Number</th>
        <th>Fifth Number</th>
        <th>Result</th>
    </tr>
    <tr>
        <td><?php echo $result['first_number']; ?></td>
        <td><?php echo $result['second_number']; ?></td>
        <td><?php echo $result['third_number']; ?></td>
        <td><?php echo $result['four_number']; ?></td>
        <td><?php echo $result['fifth_number']; ?></td>
        <td><?php
            $sum=0;
            foreach ($result as $value){
                if($value!='submit'){
                    $sum+=$value;
                }
            }
            echo  $sum;
            ?></td>
    </tr>
</table>
