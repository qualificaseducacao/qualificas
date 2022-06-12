<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "qualificas";

    try{
        $conector = mysqli_connect($servidor, $usuario, $senha, $banco);
        echo "Conexão com Sucesso!";
    }catch (\Throwable $th){
        echo "Falha na conexão". $th;
    }
?>
