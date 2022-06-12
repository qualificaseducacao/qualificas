<?php
    include("conexao.php");
    $consulta = "SELECT NOME_CURSO FROM CURSO WHERE IDCURSO = 1";
    $con = $mysqli->query($consulta) or die ($mysqli->error);
?>