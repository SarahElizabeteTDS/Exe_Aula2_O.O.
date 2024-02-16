  <?php

    $num = (int) readline("Informe um número para que o programa possa imprimir seus antecessores: ");
    $num2 = $num;

    for ($i = 0; $i < $num2; $i++) 
    { 
        $num--;
        print $num . ",";
    }

    print "\n";
