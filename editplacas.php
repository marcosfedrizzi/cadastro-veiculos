<?php
session_start();
include_once("config/conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM placa WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Editar Veiculo</title>
        <link rel="shortcut icon" href="assets/img/placa-stop1.png"/>
        <link rel="stylesheet" href="assets/css/estilo1.css">
    </head>
    <script>
function funcao1()
{
alert("CUIDADO! Você está editando um veículo já cadastrado!!!");
}
</script>
    <body onload="funcao1()">
 
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand edit" href="#">Editar Veículo</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php
    if(isset ($_SESSION['msg'])){
        echo $_SESSION['msg'];
        echo "<br>";
        unset($_SESSION['msg']);
    }
    ?>
        <form method="POST" action="config/editprocessa.php">
        <div class="form-group">
                        <label for="tarefa">Placa:</label>
                        <input type="hidden" name="id" value="<?php echo $row_usuario['id']?>">
                        <input type="text" class="form-control" name="placa"  required="" placeholder="XXX9999" maxlength="7" value="<?php echo $row_usuario['placa']?>">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Carro:</label>
                        <input type="text" class="form-control" name="veiculo" placeholder="Ex. Fusca" required=""  value="<?php echo $row_usuario['carro']?>">
                    </div>
                    <div class="form-group">
                        <label for="prazo">Itens:</label>
                        <input type="text" class="form-control" name="itens" placeholder="Ex. Filtro de óleo, Filtro de combústivel..." required="" value="<?php echo $row_usuario['itens']?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="index.php" class="btn btn-secondary">Voltar</a>
                    
                </form>
            </div>
</div>
<footer class="footer cadastro">
<a href="https://instagram.com/douglaseduar"><h3>Douglas</h3></a>
</footer>
</body>
</html>