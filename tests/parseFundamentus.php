<?php
include('../vendor/autoload.php');

$fundamentus = new \src\Service\FundamentusService();

$fundamentus->parseFundamentus();

$fundamentu = $fundamentus->find('BRFS3');
var_dump($fundamentu);