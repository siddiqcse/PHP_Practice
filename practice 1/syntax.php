<!--<!DOCTYPE html>-->
<!--<html>-->
<!--    <head>-->
<!--        <title>--><?php //echo 'Home' ?><!--</title>-->
<!--    </head>-->
<!--    <body>-->
<!--        <h1>--><?php //echo 'This is a Heading' ?><!--</h1>-->
<!--        <p>--><?php //echo 'This is a paragraph' ?><!--</p>-->
<!--        <input type="text" value="--><?php //echo 'Shuvo' ?><!--">-->
<!--    </body>-->
<!--</html>-->

<?php
//
// echo '<!DOCTYPE html >';
// echo '<html>';
//    echo '<head>';
//        echo '<title>';
//            echo 'Home';
//        echo '</title>';
//    echo '</head>';
//    echo '<body>';
//        echo '<h1>';
//            echo 'This is a Heading';
//        echo '</h1>';
//        echo '<p>';
//            echo 'This is a paragraph';
//        echo '</p>';
//    echo '</body>';
// echo '</html>';
//
//?>

<?php

    $firstName='Mehedi Hasan';
    $lastName='Shuvo';

    //echo "Full Name Is ".$firstName." ".$lastName;

    $firstName=12.32;
    $firstLast=12;
    $isRaining=true;
    echo $isRaining;
    echo '<br/>';

    $x=10; $y=20;
    echo $x+$y;
    echo '<br/>';
    echo $x-$y;
    echo '<br/>';
    echo $x*$y;
    echo '<br/>';
    echo $x/$y;
    echo '<br/>';
    echo $x%$y;
    echo '<br/>';

    echo $x++;
    echo '<br/>';
    echo $x;
    echo '<br/>';
    echo  $x.= $y;

    echo '<br/>';

    if($x>$y){
        echo 'Largest is X';
    }else{
        echo 'Largest is Y';
    }

    echo '<br/>';

    switch ($x){
        case 5:
            echo 'Value is 5';
            break;
        case 10:
            echo 'Value is 10';
            break;
        case 15:
            echo 'Value is 15';
            break;
        default:
            echo 'Value not found';
    }

    echo '<br/>';

    for($i=1;$i<=5; $i++){
        print('I Love You'.'<br/>');
    }

    while ($x!=0){
        echo "Statement is true";
        $x%=5;
    }

?>
