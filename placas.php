<?php
       ini_set('display_errors', 0 );
       error_reporting(0);

session_start();
$placaconsulta = $_GET['consultaplaca'];
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$response = file_get_contents("https://apicarros.com/v1/consulta/$placaconsulta/json", false, stream_context_create($arrContextOptions));

$json = json_decode($response);


$modelo = ($json -> modelo);
$ano = ($json -> ano);
if($response = "HTTP/1.1 429"){
    $modelo = "voce não digitou a placa ou de requerimento";
}

if($response = "HTTP/1.1 402"){
    $modelo = "essa placa não existe";}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Cadastrar Tarefa</title>
        <link rel="shortcut icon" href="assets/img/placa-stop1.png"/>
        <link rel="stylesheet" href="assets/css/estilo1.css">
    </head>
    <body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cadastrar Veículo</a>
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
                <form action="cadastrar.php" method="post">
                    <div class="form-group">
                        <label for="tarefa">Placa:</label>
                        <input type="text" class="form-control" name="placa"  required="" placeholder="XXX9999" maxlength="7" minlength="7" value="<?php echo $placaconsulta?>">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Carro:</label>
                        <input type="text" class="form-control" name="veiculo" placeholder="Ex. Fusca" required="" maxlength="25" value="<?php echo "$modelo $ano"?>">
                    </div>
                    <div class="form-group">
                        <label for="prazo">Itens:</label>
                        <input type="text" class="form-control" name="itens" placeholder="Ex. Filtro de óleo, Filtro de combústivel..." required="">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="lista.php" class="btn btn-secondary">Ver Lista</a>
                </form>
            </div>
</div>

</body>
<footer class="footer cadastro">
<a href="https://instagram.com/douglaseduar"><h3>Douglas</h3></a>
</footer>
</html>