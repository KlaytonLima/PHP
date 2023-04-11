<?php

require_once("Funcionario.php");

$obj_funcionario = new Funcionario();

$teste = $obj_funcionario->calcular_fgts();
var_dump($teste);



?>