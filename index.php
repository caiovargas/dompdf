<?php 

use Dompdf\ Dompdf;
require "dompdf/autoload.inc.php"; //Inclusão da class auto load 

$dompdf = new Dompdf(["enable_remote"=> true]);

$dompdf->loadHtml("<h1>Testando sistema de gerador de PDF!!</h1>");

$dompdf->setPaper("A4","orientation");

$dompdf->render();

$dompdf->stream("gerararquivo.pdf");

var_dump($dompdf);
