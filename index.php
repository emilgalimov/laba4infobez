<?php

main();
function main(){

    $k=33922;
    if(!isset($_POST['text'])){
    echo('<form method="POST">
        <input type="text" name="text">
        <input type="submit">
    </form>');

    }else{
        $text=$_POST['text'];
        //алгоритм

        $mass=[];
        $newSplitted=[];
        $splitted = preg_split('//u', $text, null, PREG_SPLIT_NO_EMPTY);
      
        var_dump($splitted);

        $finalText = $text;


        //алгоритм
        echo $finalText;

    }
}