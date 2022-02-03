<?php
include_once __DIR__ . '/db.php';

header('Content-Type: application/json');
if (isset($_GET['type']) !== false) {
    $type = $_GET['type'];
    if($type === 'all'){
        $filteredType = $db;
    } else {
        $filteredType = [];
        foreach ($db as $product){
            if ($type === $product['type']){
                $filteredType[] = $prduct;
            }
        }
    }
    echo json_encode([
    'results' => $filteredType,
    'length' => count($filteredType)
    ]);
}