<?php 
include_once("conexao.php");

$result_usuarios = "SELECT * FROM placa";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$conta_linhas = mysqli_num_rows($resultado_usuarios);

session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Cadastro de Veículos</title>
        <link rel="shortcut icon" href="assets/img/placa-stop1.png"/>
        <link rel="stylesheet" href="assets/css/estilo1.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>
    <body style="background: #dedede">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 20rem; display: block; margin: 12rem auto 0 auto;">
                <?php
    if(isset ($_SESSION['msg'])){
        echo $_SESSION['msg'];
        echo "<br>";
        unset($_SESSION['msg']);
    }
    ?>
                    <div class="card-body">
                        <h3 class="card-title"><b><img src="assets/img/placa-stop1.png" height="50px"/> Bem-vindo!</b></h3>
                        <p class="card-text">Procure por uma placa ou cadastre um novo veículo no sistema.</p>
                        <form action="placas.php" method="get">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Placa" aria-describedby="button-addon2" maxlength="7" minlength="7" required name="consultaplaca">
                                <button class="btn btn-outline-success" type="submit" id="button-addon2" style="padding: 0px 10px!important;font-size: 18pt;"><i class="bi bi-arrow-right-circle-fill"></i></button>
                                </div>
                        </form>
                        <div class="botao" style="text-align-last: center;">
                        <a href="lista.php" class="btn btn-primary" style="background: #00BFFF; border: none;">Ver Lista</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="qtd">
    <?php echo "$conta_linhas veículos cadastrados!";?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
    <footer class="footer cadastro">
<a href="https://instagram.com/douglaseduar"><h3>Douglas</h3></a>
</footer>
</html>