<?php

if(isset($_POST['generate']))
{
    $post_uppr_case= $_POST['uppr_case'];
    $post_lower_case= $_POST['lower_case'];
    $post_numbers= $_POST['numbers'];
    $post_special_chars= $_POST['special_chars'];
    
    
    
    
    
    $uppr_case="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lower_case="abcdefghijklmnopqrstuvwxyz";
    $numbers="0123456789";
    $special_chars="!@#$%^&*~";
    
    $generated_uppr_case= substr(str_shuffle($uppr_case),0,$post_uppr_case);
    $generated_lower_case= substr(str_shuffle($lower_case),0,$post_lower_case);
    $generated_numbers= substr(str_shuffle($numbers),0,$post_numbers);
    $generated_special_chars= substr(str_shuffle($special_chars),0,$post_special_chars);
    
    
    $mixed= "$generated_uppr_case$generated_lower_case$generated_numbers $generated_special_chars";
    
    $sum= $post_uppr_case+$post_lower_case+$post_numbers+$post_special_chars;
    
     
    
    $generated_mixed=substr(str_shuffle($mixed),0,$sum);
}

?>