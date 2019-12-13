<?php 
// the length of the string
$n=10; 

//creating a function name RandomString()
function getName($n) { 
    
    //alphabet string
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    
    //if you wanna includes special word go for it
    $randomString = ''; 
  
    //for will randomly choose characters with the length of $n  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
   //return string
    return $randomString; 
} 
 
//print string  
echo getName($n); 
?> 