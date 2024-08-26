<?php

    //Questão 01
    $value = $argv[1];
    $origem = $argv[2];
    $destino = $argv[3];

    $newValue = match ($destino) {
        "euro" => match($origem){
            "americano" => $value/1.12,
            "real" => $value/6.14
        },
        "americano" => match($origem){
            "euro" => $value*1.12,
            "real" => $value/5.49
        },
        "real" => match($origem){
            "americano" => $value*5.49,
            "euro" => $value*6.14
        },
    };

    echo number_format($newValue, 1, ',', '.') . " " . $destino . "\n";

    //Questão 02
    $nota1 = $argv[4];
    $nota2 = $argv[5];
    $nota3 = $argv[6];

    $media = ($nota1 + $nota2 + $nota3)/3;

    $res = match($media){
        $media>=0 && $media < 5 => "Insuficiente",
        $media>=5 && $media < 7 => "Suficiente",
        $media>=7 && $media < 9 => "Bom",
        $media>=9 && $media <= 10 => "Excelente",
        default => "Inválida",
    };

    echo "A nota foi $res"
?>