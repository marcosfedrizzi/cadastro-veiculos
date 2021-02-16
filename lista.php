<?php

include_once("conexao.php");

$result_usuarios = "SELECT * FROM placa";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuario = mysqli_fetch_assoc($resultado_usuarios);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo1.css">
    <link rel="shortcut icon" href="placa-stop.png" />
    <title>Placas Veículos</title>
</head>
<body>
<div class="comeco1">
<div class="comeco">
    <table>
        <tr>
            <td><b>PLACA<b></td>
            <td><b>VEÍCULO<b></td>
            <td><b>ITENS<b></td>
            <td><b>DATA<b></td>
            <td></td>
        </tr>
        <?php while($dado = mysqli_fetch_assoc($resultado_usuarios)){ ?>
        <tr>
            <td><?php echo $dado["placa"]; ?></td>
            <td><?php echo $dado["carro"]; ?></td>
            <td><?php echo $dado["itens"]; ?></td>
            <td><?php echo date("m/Y", strtotime($dado["created"])); ?></td>
            <td><?php echo "<a href='editplacas.php?id=" . $dado['id'] . "'>Editar</a>"; ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>
    <img src="fundo.jpg" class="fundo">
    </div>
</body>
<div class="logo"><img src="logo_1_1.png" alt="Logo" height="80px"></div>
<div class="logo1">© 2020 DISTRIBUIDORA GRANDE RIO. Todos os direitos reservados.<br>Desenvolvido por <a href="https://instagram.com/douglaseduar">Douglas</div> 
</html>