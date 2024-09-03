
<?php 
include("cabecalho.php");
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operacao = $_POST['operacao'];

if (empty($valor1) || empty($valor2)){
 echo " Não é possivel calcular pois falta argumentos";
}
 else {
if($operacao=="soma"){
    $resultado = $valor1 + $valor2;
} else { 
    if($operacao == "subtracao"){
        $resultado=$valor1-$valor2;
    } else {
        if($operacao=="multiplicacao"){
            $resultado = $valor1*$valor2;
        }else {
            if($operacao=="divisao"){
                $resultado = $valor1/$valor2;
            }
        }
    }
}
?>
<div class="row">
    <div class="col text-center"><?php echo $resultado;?></div>
</div>
<?php
 }// else
include("rodape.php");
?>
