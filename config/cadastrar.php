<?php
session_start();
include_once("conexao.php");

$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
$carro = filter_input(INPUT_POST, 'veiculo', FILTER_SANITIZE_STRING);
$itens = filter_input(INPUT_POST, 'itens', FILTER_SANITIZE_STRING);


$sql = "SELECT * FROM placa WHERE placa = '$placa'";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0) {
        $_SESSION['msg'] = "<p style='color:orange; font-family: sans-serif;'>Veículo Cadastrado JÁ EXISTE!</p>";
        header("Location: ../placas.php");}

else{
    $result_usuario = "INSERT INTO placa (placa, carro, itens, data) VALUES ('$placa', '$carro', '$itens', NOW())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
    header("Location: ../index.php");
}
else {
    $_SESSION['msg'] = "<p style='color:red; font-family: sans-serif;'>Veículo não foi Cadastrado!</p>";
    header("Location: ../placas.php");
}}
?>