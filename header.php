<?php
    //Connecting to the Database
    $server = "localhost";
    $username = "bmorante_dnr_admin";
    $password = "c0WM9gqeVnbad*OQ";
    $database = "bmorante_dine_and_rewind";

    $connection = mysqli_connect($server,$username,$password,$database);
    
    //Connection Error 
    if(!$connection){
        die(mysqli_connect_error());
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dine & Rewind - <?php print $pageTitle; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Dine & Rewind</h1>
    </header>
    <main>