<?php
    $hostname_conn = "localhost";
    $database_conn = "lizeus";
    $username_conn = "lizeus";
    $password_conn = "123";
    $charset_conn = "utf8";

    $conn_produtos = new mysqli($hostname_conn, $username_conn, $password_conn,
    $database_conn);

     mysqli_set_charset($conn_produtos,$charset_conn);
    
    if($conn_produtos->connect_error){
    echo "Error: ".$conn_produtos->connect_error;
    };
?>