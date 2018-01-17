<?php

#starts a new session
session_start();

#includes a database connection
include 'conexao.php';

#catches user/password submitted by html form
$user = $_POST['usuario'];
$senha = sha1($_POST['senha']);

#checks if the html form is filled
if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header("Location: campos.php");
}else{

#searches for user and password in the database
    // JOB
    //$query = "SELECT * FROM [dbaquila].[dbo].[usuario] WHERE usuario ='{$user}' AND "." senha = '{$senha}' AND nivel = '1'";


    // HOUSE
    $query = "SELECT * FROM [aquila].[dbo].[usuario] WHERE usuario ='{$user}' AND "." senha = '{$senha}' AND nivel = '1'";


    $result = sqlsrv_query($conn, $query);  //$conn is your connection in 'connection.php'

#checks if the search was made
    if($result === false){
        die( print_r( sqlsrv_errors(), true));
    }

#checks if the search brought some row and if it is one only row
    if(sqlsrv_has_rows($result) != 1){
        header("Location: invalido.php");
    }else{

#creates sessions
        while($row = sqlsrv_fetch_array($result)){
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome_usuario'] = $row['nome_usuario'];
            $_SESSION['usuario'] = $row['usuario'];
            $_SESSION['nivel'] = $row['nivel'];
            $_SESSION['grupo'] = $row['grupo'];
        }
#redirects user
        header("Location: sistema/index.php");
    }
}

?>