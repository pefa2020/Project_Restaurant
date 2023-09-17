<?php 
    $dsn = 'mysql:host=localhost;dbname=restaurant';
    $username = 'rest_user';
    $password = 'pa55word';
    
    try{
        $db = new PDO($dsn, $username, $password);
        //echo "Success to connecting to database.";
    }
    catch (PDOException $exp) {
        $error_message = $exp->getMessage();
        include('database_error.php');
        exit();
    }
?>