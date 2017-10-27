<?php

$nome = $_GET['nome'];
$depo = $_GET['depo'];

$con = mysqli_connect("br52.hostgator.com.br","rafae415_user","admin","rafae415_rafaelmonica");
$sql = "insert into depoimentos(data,nome,depoimento,status) values('". date('Y-m-d h:i:s') ."','". $nome ."','". $depo ."','A')";
$res = mysqli_query($con,$sql);
print($res);
die();