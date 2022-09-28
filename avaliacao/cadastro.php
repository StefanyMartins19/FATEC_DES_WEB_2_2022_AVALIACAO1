<?php
if (isset($_POST['filme']) && isset($_POST['tempolocacao'])&& isset($_POST['devolucao'])) {

    $filename = "cadastro.txt";
    if(!file_exists($filename)){
        $handle = fopen("$filename", "w");
    } else {
        $handle = fopen("$filename", "a");
    }

    $_POST["filme"];
    $_POST["tempolocacao"];
    $_POST["devolucao"];

    fwrite($handle, $_POST["filme"] . " " . $_POST["tempolocacao"] ." ".$_POST["devolucao"]."\n");
    fflush($handle);
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 20px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Escolha seu filme</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Filme</label>
                <input type="text" name="filme" class="form-control">
            
            </div>    
            <div class="form-group">
                <label>Tempo locacao </label>
                <input type="text" name="tempolocacao" class="form-control">

            </div>
               
            <div class="form-group">
                <label>Devolucao </label>
                <input type="text" name="devolucao" class="form-control">
               
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Locar">
            </div>
        </form>
    </div>   
    <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    <a href="cadastro_filmes.php" class="btn btn-success">Lista de Filmes</a>
</body>
</html>