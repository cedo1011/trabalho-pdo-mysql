<?php
namespace TrabalhoPDOMySQL;

class MYSQLConnection extends \PDO {
    public function __construct() {
        parent::__construct('mysql:host=localhost;dbaname=biblioteca', 'root','');
    }
}