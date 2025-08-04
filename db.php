<?php
    require __DIR__ . '/vendor/autoload.php';
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    // echo __DIR__;
    $dotenv->load();
//    $_ENV["DB_HOST"];
    $con = mysqli_connect($_ENV["DB_HOST"],$_ENV["DB_USERNAME"],$_ENV["DB_PASSWORD"],$_ENV["DB_DATABASE"]);
    if(!$con){
            echo "Not Connected";
            exit();
   }
?>