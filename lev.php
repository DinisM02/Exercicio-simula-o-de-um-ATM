<?php
$saldo=10000;
$valorCredCp=$_POST['valorLeva'];
if($saldo>=$valorCredCp){
  $saldoActual=$saldo-$valorCredCp;
 echo "Transação feita com sucesso";
echo "<br>";
echo "o teu novo saldo é: $saldoActual";
}
else{
echo "O teu saldo é insuficiente";
}

?>

