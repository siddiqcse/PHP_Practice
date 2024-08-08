<?php

//$data=Array();
//
//$data[0]=10;
//$data[1]=20;
//
//$data['name']='Shuvo';
//$data['city']='Kalkini';
//
////Notice
///*
//    1.if integer index is missing then show Undifiend offset
//    2.if String index is missing then show Undifiend index
//    3.if print full array then show Array to index conversion.
//*/
//echo  $data['name'].' '.$data['city'];
//echo $data;

/// =========== Method 2==================
//
//$data =Array(10,20,30,'Rahim','Shuvo');
//
//print $data[2];

//=======Method 3=========================
//$data=[10,20,30,'Shuvo','Karim'];
//
//echo $data[3];
//

/* Php Array is 3 type:
    1.Numeric Array
    2.Associative Array
    3.Multidimensional Array
*/
//
//$data[0][0]=10;
//$data[0][1]=20;
//$data[0][2]=30;

// Now Print ALl Data from Array using foreach loop

//foreach ($data as $datum){
//    echo $datum.' <br/>';
//}

// Now create a map using Array
//
//$data=[
//    'name'  =>  'Shuvo',
//    'city'  =>  'Kalkini',
//    'phone' =>  '01777368276',
//    'country'   =>  'Bangladesh',
//];
//
//foreach ($data as $datum){
//    echo $datum['name'];
//}

// Two Dimensional Array Syntax
//      $students[row][column]


$students=[
    '0' => [
        'name'  =>  'Shuvo',
        'city'  =>  'Kalkini',
        'phone' =>  '01777368276',
        'country'   =>  'Bangladesh',
    ],
    '1' => [
        'name'  =>  'Kaniz',
        'city'  =>  'Bourguna',
        'phone' =>  '01821416769',
        'country'   =>  'London',
    ],
    '2' => [
        'name'  =>  'Opu',
        'city'  =>  'Gopalgonj',
        'phone' =>  '012121212',
        'country'   =>  'United states',
    ],
    '3' => [
        'name'  =>  'Rafatul islam',
        'city'  =>  'Barthi',
        'phone' =>  '012192129121',
        'country'   =>  'United Kingdom',
    ],
    '4' => [
        'name'  =>  'Arafat hossain',
        'city'  =>  'chittagonj',
        'phone' =>  '21212121',
        'country'   =>  'Africa',
    ],
];

//foreach ($students as $student) {
////    echo $student['name'];
//    echo $student['name'].' '.$student['city'].' '.$student['phone'].' '.$student['country'].'<br/>';
//}
//
//echo '<pre>';
//print_r($students);
//var_dump($students);

function test(){
    echo 'Hello World';
}

//test();

function sumxy($x,$y=null){
    $z=$x+$y;
    return $z;
}

echo sumxy(10,20);
echo '<br/>';
echo sumxy(21);
echo '<br/>';
echo sumxy(20,40);
echo '<br/>';
echo sumxy(80,10);
echo '<br/>';

?>

<!--<table border="2" width="500">-->
<!--    <tr>-->
<!--        <th>Name</th>-->
<!--        <th>City</th>-->
<!--        <th>Phone Number</th>-->
<!--        <th>Country</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ($students as $student) { ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $student['name'] ?><!--</td>-->
<!--        <td>--><?php //echo $student['city'] ?><!--</td>-->
<!--        <td>--><?php //echo $student['phone'] ?><!--</td>-->
<!--        <td>--><?php //echo $student['country'] ?><!--</td>-->
<!--    </tr>-->
<!--    --><?php //} ?>
<!--</table>-->

<!--/*-->
<!--Function is 2 type:-->
<!--    1.User Defined-->
<!--    2.Build in-->
<!---->
<!--Its 2 part:-->
<!--    1. Calling-->
<!--    2. Definition-->
<!--*/-->




