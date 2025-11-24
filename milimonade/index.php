<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<?php
require __DIR__.'/system/App.php';
require __DIR__.'/system/Router.php';
require __DIR__.'/system/Loader.php';
require __DIR__.'/system/Session.php';

try{
    $app = new App();
    $app->run();
}catch(\Throwable $ex){
    echo $ex;
}

?>