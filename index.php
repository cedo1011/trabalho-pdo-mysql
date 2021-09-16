<?php
require_once './vendedor/autoload.php';
use PDO;

$bd = new PDO('msql:host=localhost;dbname=biblioteca', 'root','');
$comando = $bd->prepare('SELECT * FROM generos');
$comando->execute();
$genero - $comando->fetchall(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang-"pt-br">
    <head>
        <meta charset="ulf-8">
        <title>biblioteca</title>
</head>
<body>
    <table>
        <tr>
            <th>td</th>
            <th>nome</th>
</tr>
<?php foreach($generos as $g): ?>
        