<?php   
    function tambah ($a,  $b) {
        return $a+$b;
    }
    function kurang ($a,  $b) {
        return $a-$b;
    }

    function kali ($a,  $b) {
        return $a*$b;
    }

    function bagi ($a,  $b) {
        return $a/$b;
    }


    echo tambah (1,2)."<br>"; // tampilan 3
   
    echo tambah (4,4)."<br>"; // tampilan 8
    
    echo kurang (2,2)."<br>"; // tampilan 0
    
    echo kurang (5,4)."<br>"; // tampilan 1
   
    echo kali (2,2)."<br>"; // tampilan 4
    
    echo kali (5,4)."<br>"; // tampilan 20
   
    echo bagi (2,2)."<br>"; // tampilan 1
   
    echo bagi (8,4)."<br>"; // tampilan 2
   