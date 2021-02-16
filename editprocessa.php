<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
$carro = filter_input(INPUT_POST, 'veiculo', FILTER_SANITIZE_STRING);
$itens = filter_input(INPUT_POST, 'itens', FILTER_SANITIZE_STRING);


    $result_usuario = "UPDATE placa SET placa='$placa', carro='$carro', itens='$itens', created=NOW() WHERE id='$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<p style='color:green; font-family: sans-serif;'>Veículo Editado com sucesso!</p>";
    header("Location: lista.php");
}
else {
    $_SESSION['msg'] = "<p style='color:red; font-family: sans-serif;'>Veículo não foi Editado!$id</p>";
    header("Location: editplacas.php?id=$id");
}
?>