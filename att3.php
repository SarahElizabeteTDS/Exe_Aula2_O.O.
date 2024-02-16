<?php
 
    for ($i = 0; $i < 5; $i++) 
    { 
        $nome = (string) readline("Informe seu nome: ");
        $peso = (int) readline("Informe seu peso (em kg): ");
        $altura = (float) readline("Informe sua altura (em metros, ponto para separar, não usar virgula): ");
        calculaIMC($nome, $peso, $altura);
        print "\n";
    }

    function calculaIMC($nome, $peso, $altura)
    {
        $IMC = $peso / ($altura*$altura);
        print $nome . ", tem peso: " . $peso . "kg" . ", altura: " . $altura . "m" . " e IMC: " . $IMC . "\n";
    }
