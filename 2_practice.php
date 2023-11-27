<?php
// Try catch example in php

$n = 0;

try{
  if($n <= 0)
  throw new Exception("Enter a valid number");
$result = 2 / $n;
echo $result;
}catch(Exception $e){
  echo $e->getMessage();
}



?>