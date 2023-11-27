<?php
// Try catch using function

function division($n){
  try{
    if($n <= 0){
      throw new Exception("Enter a valid Number");
    }
    $result = 2 / $n;
    echo $result;
  }catch(Exception $e){
    echo $e->getMessage();
  }
}
division(500);
?>