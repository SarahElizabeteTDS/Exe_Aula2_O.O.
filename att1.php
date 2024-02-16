<?php

    for ($i = 0; $i < 10; $i++) 
    { 
        $num = (int) readline("Informe um número: ");
        if ($num >= 0) 
        {
            print "O número " . $num . " é positivo!\n";
        }else{
            print "O número " . $num . " é negativo!\n";
        }

    }
