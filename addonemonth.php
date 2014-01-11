<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

echo '<br/>'.$todayDate = '2012-7-25';

$i = 1;
while($i <= 12){
    $dateOneMonthAdded = strtotime(date("Y-m-d", strtotime($todayDate)) . "+$i month");
    echo '<br/>'.date('Y-m-d',$dateOneMonthAdded);
    $i++;
}

echo '<hr/>';
echo 'Get first and last day of last month<br/>';
$day        = date('d');
echo $todayDate  = date('Y-m-d');


    $firstDayOfLastMonth = strtotime($todayDate . "-1 month");
    echo '<br/>First: '.date('Y-m-',$firstDayOfLastMonth).'01';
    
    $lastDayOfLastMonth = strtotime($todayDate . "-$day day");
    echo '<br/>Last: '.date('Y-m-d',$lastDayOfLastMonth);



?>
