<?php include_once 'vendor/outoload.php';

use App\Coffeeshop;
$products =  [
    ['id' => 1, 'name' => 'Negro', 'price'=> 25],
    ['id' => 2, 'name' => 'Latte', 'price'=> 35],
    ['id' => 3, 'name' => 'Capuchino', 'price'=> 45],
];

$shop = new Coffeeshop();
$shop→addProducts($products);
echo $chop→viewMenu(); 