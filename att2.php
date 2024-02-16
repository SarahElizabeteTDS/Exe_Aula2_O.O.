<?php

    $num = (int) readline("Informe um número para que o programa possa imprimir seus antecessores: ");
    $num2 = $num;

    for ($i = 1; $i < $num2; $i++) 
    { 
        $num--;
        if ($num > 1) 
        {
            print $num . ",";
        }else{
            print $num . "\n";
        }
       
    }

    print "\n";
