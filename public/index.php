<?

// Permet de gérer l'autoloader
require '../app/Autoloader.php' ;
App\Autoloader::register() ;


if(isset($_GET['p'])){
    $p = $_GET['p'] ;
}else{
    $p = 'home' ;
}


if ($p === 'home'){
    require '../pages/home.php' ;
}