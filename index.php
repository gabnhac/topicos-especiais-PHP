<?php 
    $rosquinhas = [
        [
            'quantidade' => 10,
            'sabor' => 'Chocolate',
            'marca' => 'We cooffee',
            'valor_unitario' => 6.50,
            'id_rosquinha' => 1
        ],
        [
            'quantidade' => 12,
            'sabor' => 'Morango',
            'marca' => 'We cooffee',
            'valor_unitario' => 7.80,
            'id_rosquinha' => 2
        ],
        [
            'quantidade' => 15,
            'sabor' => 'Baunilha',
            'marca' => 'Mabel',
            'valor_unitario' => 10.50,
            'id_rosquinha' => 3
        ]
    ]
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de rosquinhas</title>
    <link rel="stylesheet" href="src/style/style.css">
</head>
<body>
    <h1>Rosquinhas na promoção!</h1>
    <div class="lista-rosquinhas">
        <?php 
            foreach($rosquinhas as $r){
                echo "<div class='rosquinha-item'>";
                echo "<h2>Marca: " .$r['marca']. "</h2>";
                echo "<p>Sabor: " . $r['sabor'] . "</p>";
                echo "<p>Valor: " . $r['valor_unitario'] . "</p>";
                echo "<p class='price'>Quantidade: R$ " . $r['quantidade'] . "</p>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
