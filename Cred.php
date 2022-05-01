<?php
$saldo=5000;
$contador= $_POST['numeroCOntador'];
$valorCompra= $_POST['Valor'];

if($saldo>=$valorCompra){
$saldo= $saldo - $valorCompra;
echo " EDM Credelec";
echo "<br>";
echo " Recarga 4793 2085 5853 3279 7895";
echo "<br>";
echo "Contador $contador";
echo "<br>";
echo "Saldo actual: $saldo";
}else{
echo "Operaçao falhada, verifique o saldo da sua conta.";
}
?>
