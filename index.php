<?php 
    // Creiamo un array contenente dei prodotti con
    // Nome
    // Prezzo
    // Immagine
    // Tipologia
    // Stampiamo tutti i nostri prodotti in pagina
    // Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia

    $products = [
        [
            'name' => "mela",
            'price' => "1€",
            'img' => "",
            'type' => "frutta",
        ],
        [
            'name' => "pera",
            'price' => "1€",
            'img' => "",
            'type' => "frutta",
        ],
        [
            'name' => "bistecca",
            'price' => "3€",
            'img' => "",
            'type' => "carne",
        ],
        [
            'name' => "latte",
            'price' => "1€",
            'img' => "",
            'type' => "latticini",
        ],
        [
            'name' => "mozzarella",
            'price' => "1€",
            'img' => "",
            'type' => "latticini",
        ],
        [
            'name' => "petto di pollo",
            'price' => "3€",
            'img' => "",
            'type' => "carne",
        ],
    ];

    $filteredProducts = $products;
    if (isset($_GET['type']) !== false){
        $type = $_GET['type'];
        if ($type === 'all'){
            $filteredProducts = $products;
        } else {
            $filteredProducts = [];
            foreach ($products as $product){
            if ($product['type'] === $type){
                $filteredProducts[] = $product;
            }
        }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="app">
    <header>
        <form action="index.php" method="GET">
            <select name="type" id="type">
                <option value="all">all</option>
                <option value="frutta">frutta</option>
                <option value="carne">carne</option>
                <option value="latticini">latticini</option>
            </select>
            <button>Cerca</button>
        </form>
    </header>
    <ul>
    <?php foreach ($filteredProducts as $product) { ?>
        <h4>Prodotto</h4>
        <ul>
            <li><?= $product['name']?></li>
            <li><?= $product['price']?></li>
            <li><?= $product['type']?></li>
        </ul>
    <?php } ?>
</body>
</html>