<?php

function random_word(){
    $word = file_get_contents("http://randomword.setgetgo.com/get.php");
    return $word; 
}


if(isset($_POST['generate']))
{
    $i=0;
   $word_count= $_POST['word_count'];
   while ($i<$word_count){
       echo $i++;
       
   }
    

}

?>