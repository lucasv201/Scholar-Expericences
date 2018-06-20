<?php
    require_once("Conexao.php");
    $conexao = new Conexao();

    $nome = $_POST["nome"];
    $texto = $_POST["texto"];

    $sql = ("INSERT INTO comentario(nome,texto) VALUES (?,?);"); 
    $comando = $conexao->getCon()->prepare($sql);
    $comando->bindParam(1,$nome);
    $comando->bindParam(2,$texto); 
    $comando->execute(); 
    header("Location: feed.php");
?>