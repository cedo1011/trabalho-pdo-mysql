<?php
require_once './vendor/autoload.php';

use TrabalhoPDOMySQL\MySQLConnection;

$bd = new MySQLConnection();

$genero = null;

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $comando = $bd->prepare('SELECT * FROM generos WHERE id = :id');
    $comando->execute([':id' => $_GET['id']]);

    $genero = $comando->fecht(PDO::FETCH_ASSOC);

} else {
    $comando = $bd->prepare('UPDATE generos SET nome = :nome WHERE id = :id');
    $comando->execute([':nome'=> $_POST['nome'], 'id' => $_POST['id']]);

    header('Location:/index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Editar Gênero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <main class="container">
    <h1>Editar Gênero</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $genero['id'] ?>" />
        <label for="nome">Nome do Gênero</label>
        <input type="text" name="nome" value="<?= $genero['nome'] ?>" />
        <button type="submit">Salvar</button>
</form>
</main>
</body>
</html>