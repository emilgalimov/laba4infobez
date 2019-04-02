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

        $finalText = $text;


        //алгоритм
        echo $finalText;

    }
}