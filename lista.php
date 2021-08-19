<?php

include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/estilo1.css">
    <link rel="shortcut icon" href="assets/img/placa-stop1.png" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Placas Veículos</title>
</head>
<body>
<div class="row">
        <div class="col">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand">Lista de Veículos</a>
                <a href="placas.php"> <button class="btn btn-outline-warning" type="submit">Cadastrar</button></a>
                <form class="form-inline" action="lista.php" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Placa, Veículo..." aria-label="Search"
                           name="pesquisa">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
    <table>
        <tr>
            <td><b>PLACA<b></td>
            <td><b>VEÍCULO<b></td>
            <td><b>ITENS<b></td>
            <td><b>DATA<b></td>
            <td></td>
        </tr>
        <?php
        ini_set('display_errors', 0 );
        error_reporting(0);
            $pesquisar = $_POST['pesquisa'];
            $result_cursos = "SELECT * FROM placa WHERE placa LIKE '%$pesquisar%' || carro LIKE '$pesquisar' ORDER BY placa asc";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
             ?>
        <?php while($dado = mysqli_fetch_assoc($resultado_cursos)){ ?>
        <tr>
            <td><?php echo $dado["placa"]; ?></td>
            <td><?php echo $dado["carro"]; ?></td>
            <td><?php echo $dado["itens"]; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dado["data"])); ?></td>
            <td><?php echo "<a href='editplacas.php?id=" . $dado['id'] . "'>Editar</a>"; ?></td>
        </tr>
        <?php } ?>
    </table>
        </div></div>

    <footer>
<a href="https://instagram.com/douglaseduar"><h3>Douglas</h3></a>
</footer>
</body>

</html>