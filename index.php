<?php

$marks = 90;
if($marks>=80)
{
    echo "a+<br>";
}
else if($marks>=50){
    echo "B+<br>";
}
else if($marks>=33){
    echo "pass<br>";
}
else{
    echo "fail<br>";
}


// ======SWITCH CASE=====
$color = "pink";

switch($color){
    case "black";
    echo "success<br>";
    break;

    case "red";
    echo "warning<br>";
    break;

    case "yellow";
    echo "worst<br>";
    break;

    default:
    echo "failure<br>";
    break;

    
}

$marks = 0;

    switch($marks){
        case 80;
        echo "a+<br>";
        break;

        case 50;
        echo "b+<br>";
        break;

        case 33;
        echo "pass<br>";
        break;

        default:
        echo "fail<br>";
        break;

    }

    $array = [10,20,30,40];
    // echo $array[3];
    for($i=0; $i<=3; $i++)
    {
        echo $array[$i]."<br>";
    }
    
    // ====For Each Loop=====
    foreach($array as $element){
        echo $element."<br>";
    }
    

    // =====While Loop=====
    $i = 0;
    while($i<=3)
    {
        echo $array[$i]." ";
        $i++; 
    }
    

    // =====Do WHile Loop====
    echo "<br>";
    $i = 0;
    do{
        echo $array[$i]."<br>";
        $i++;
    }
    while($i<=3);
?>