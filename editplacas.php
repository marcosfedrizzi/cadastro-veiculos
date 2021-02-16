<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM placa WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo2.css">
    <link rel="shortcut icon" href="placa-stop.png" />
    <title>Placas Veículos</title>
</head>
<body>
    <div class="comeco">
        
    <h1>EDITAR VEÍCULOS</h1>
    <?php
    if(isset ($_SESSION['msg'])){
        echo $_SESSION['msg'];
        echo "<br>";
        unset($_SESSION['msg']);
    }
    ?>
        <form method="POST" action="editprocessa.php">
            <label>Placa: </label>
            <input type="hidden" name="id" value="<?php echo $row_usuario['id']?>">
        <input type="text" name="placa" placeholder="XXX9999" maxlength="7" required="" value="<?php echo $row_usuario['placa']?>" class="inputplaca">
        <?php echo "<br><br>" ?>
            <label>Veículo:  </label>
        <input type="text" name="veiculo" placeholder="Ex. Fusca" required="" maxlength="25" value="<?php echo $row_usuario['carro']?>">
        <?php echo "<br><br>" ?>
        <label class="itens">Itens: </label>
        <input type="text" name="itens" placeholder="Ex. Filtro de óleo, Filtro de combústivel..." value="<?php echo $row_usuario['itens']?>" class="descricao" required="">
        <?php echo "<br>" ?>
        <input type="submit" value="EDITAR" class="botaoenviar">
        
    </form>
    </div>
</body>
</html>