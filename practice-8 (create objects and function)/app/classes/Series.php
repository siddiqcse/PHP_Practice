<?php

namespace App\classes;

class Series
{
    public function createSeries(){
        //echo 'in Series';
        $data=(object)$_POST;
        $result=[];
        if($data->starting_number < $data->ending_number){
            if($data->choice=='odd'){
                for($i=$data->starting_number;$i<=$data->ending_number;$i++){
                    //echo $i.' ';
                    if($i%2!=0){
                        array_push($result,$i);
                    }
                }
            }else if($data->choice=='even'){
                for($i=$data->starting_number;$i<=$data->ending_number;$i++){
//                    echo $i.' ';
                    if($i%2==0){
                        array_push($result,$i);
                    }
                }
            }

        }else{
            if($data->choice=='odd'){
                for($i=$data->starting_number;$i>=$data->ending_number;$i--){
                    //echo $i.' ';
                    if($i%2!=0){
                        array_push($result,$i);
                    }
                }
            }else if($data->choice=='even'){
                for($i=$data->starting_number;$i>=$data->ending_number;$i--){
//                    echo $i.' ';
                    if($i%2==0){
                        array_push($result,$i);
                    }
                }
            }
        }
        return $result;

    }

    public  function findWordCharacter(){
        $data=(object)$_POST;
        $result1=[];
        $givenString=$data->given_string;
        $result1['total_word']=str_word_count($givenString);
        $result1['total_character']=strlen($givenString);
        return $result1;
    }
}