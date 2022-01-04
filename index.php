<?php 
error_reporting(-1);
//Напечатать те элементы   
//последовательности натуральных чисел n0 ,n1,...,nm , которые делятся на сумму своих цифр.
$n0 = 1;
$nm = 200;


for($m = $n0; $m < $nm; $m++){
    if(is_div_of_summ($m)){
        echo ($m." - value <br>");
        echo ("========================<br>");
    }   
    
}

function is_div_of_summ($number){
    $num1 = 0;  
    $value = $number;
    $sum1 = 0; 
    while($value != 0){  
        $num1 = round((($value / 10 )- (floor($value / 10)) )*10);  //раскладываем число на цифры
        $value = floor($value / 10);  
        $sum1 += $num1;
    }
    if($number % $sum1 == 0){
        return true;
    }else{
        return false;
    }
        
}
