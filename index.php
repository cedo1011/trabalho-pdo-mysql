<?php
require_once './vendor/autoload.php';
use PDO;

use ExemploPDOMySQL\MySQLConnection; //PDO
$bd = new MYSQLConnection(); //PDO ('mysql:host=localhost;dbname=biblioteca', 'root', '');

$comando = $bd->prepare('SELECT * FROM generos');
$comando->execute();
$generos = $comando->fetchAll(PDO::FETCH_ASSOC);

?>

<!Doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Biblioteca</title>
    </head>
    <body>
        <a href="insert.php">Novo Gênero</a>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
            </tr>
            <?php foreach($generos as $g): ?>
                <tr>
                    <td><?= $g['id']?></td>
                    <td><?= $g['nome']?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>




