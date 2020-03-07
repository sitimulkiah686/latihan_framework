<?php 
//null
$a = null;
echo $a;

echo "<br>";
//bolean
$a = true;
$b = false;

if ($a)  {
    echo "betul";
} else {
    echo "salah";
}
echo "<br>";
    $a= -3;
    $b= 0;
    $c= 123;
    $d=0123;
    $e=0x1010;
    echo $a." ".$b." ".$c." ".$d." ".$e;

    echo "<br>";
    //float
    $a= 1.23;
    $b= 10.0;

    echo $a." ".$b;

    echo "<br>";
//array
$a= array (1,2,3);
$b= ["A", true, 123 =>5];

echo $a[0]; //1
echo $b[0]; //A
echo $b[123]; //5
echo $b[0]; //null