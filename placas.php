<?php
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="shortcut icon" href="placa-stop.png" />
    <title>Placas Veículos</title>
</head>
<body>
    <div class="comeco">
        
    <h1>CADASTRAR VEÍCULOS</h1>
    <?php
    if(isset ($_SESSION['msg'])){
        echo $_SESSION['msg'];
        echo "<br>";
        unset($_SESSION['msg']);
    }
    ?>
        <form method="POST" action="processa1.php">
            <label>Placa: </label>
        <input type="text" name="placa" placeholder="XXX9999" maxlength="7" required="" class="inputplaca">
        <?php echo "<br><br>" ?>
            <label>Veículo:  </label>
        <input type="text" name="veiculo" placeholder="Ex. Fusca" required="" maxlength="25">
        <?php echo "<br><br>" ?>
        <label class="itens">Itens: </label>
        <textarea type="text" name="itens" placeholder="Ex. Filtro de óleo, Filtro de combústivel..." class="descricao" required=""></textarea>
        <?php echo "<br>" ?>
        <input type="submit" value="CADASTRAR" class="botaoenviar">
        
    </form>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <?php echo "<br>" ?>
    <h1>LISTA DE VEÍCULOS</h1>
    <a href="https://LOJAVIRTUAL/plaquetas/lista.php"><button class="botaoenviar1">LISTA</button></a>
    </div>
</body>
<footer>
<div class="logo"><img src="logo_1_1.png" alt="Logo" height="80px"></div>
<div class="logo1">© 2020 DISTRIBUIDORA GRANDE RIO. Todos os direitos reservados.<br>Desenvolvido por <a href="https://instagram.com/douglaseduar">Douglas</div> 
</footer>
</html>