
<?php 

require_once("lib.php");
include("cabecalho.php");
$var1=1;
$var2=2;
// subtrair 2 do resultado da soma;

$subtotal = soma($var1,$var2);
$total  = subtracao($subtotal,2);
mensagem($total);

mensagem(subtracao(soma($valor1,$valor2),2));




include("rodape.php");