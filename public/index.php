<?php


require '../app/Autoloader.php' ;
App\Autoloader::register() ;


if (isset($_GET['p'])){
    $p = $_GET['p'] ;
}else{
    $p = 'home' ;
}

// initialisation des objets
$db = new App\Database('blog');

ob_start();
if ($p === 'home'){
    require '../pages/home.php' ;
}elseif ($p === 'catalogue') {
    require '../pages/catalogue.php' ;
}

$content = ob_get_clean();
require '../pages/templates/default.php' ;