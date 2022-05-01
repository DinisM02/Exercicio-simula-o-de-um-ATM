<!DOCTYPE html>
<html>
<head>
    <title>GFG</title>
  
<style>
             body{
    margin: 0 auto;
    background-image: url("./img/Credelec1.jpg");
    background-repeat: no-repeat;
    background-size: auto;

    
}
h1{
    padding: 1px;
    border: 11px ;
    border-style:outset;
    border-color: lightblue;
    background:white;
    text-align: center;

}
        
        .menu{
    width: 500px;
    height: 450px;
    text-align: center;
    margin: 0 auto;
    background-color: rgba(44, 62, 80, 0.7);
    border-radius: 10px;
    margin: 0 auto;
    margin-top: 160px;
}
.nu {
    color: #fff;
    background-color: rgba(44, 62, 80, 0.12);
    width: 450px;
    padding: 10px 5px;
    border: 0px solid #234966;
    text-align: center;
    padding:12px;
    margin: 0 auto;
    border-radius: 4px;
    
}
input{
    width: 250px;
    height: 15px;
    padding: 10px 5px;
    border: 4px solid #234966;
    text-align: center;
    padding:12px;
    color: black;
    border-radius: 20px;

}
button{
    color: black;
    width: 130px;
    padding: 10px 5px;
    border: 4px solid #234966;
    text-align: center;
    padding:12px;
    border-radius: 20px;
}
#ok:hover{
    background-color: #008CBA;
    color: white;
}

</style>
</head>
 
<body>
<div class="menu">

<h1>Recargas</h1>
        <div class="nu">
            
                        <ol>
                            <li>20</li>
                            <li>50</li>
                            <li>100</li>
                            <li>200</li>
                            <li>500</li>
                            <li>1000</li>
                        </ol>
                    
        </div>
       

    
    <form method="post">
        <div class="nu">
        <input type="text" name="option" placeholder="introduz opcão de 1-6" id=""> 
        </div>     
        
        <div class="nu">
            <button type="submit" name="submit" id="ok">Comprar</button>
        </div>
        
      
                    
        
</form>
    
</div>    

            
 
<?php
 
// Checking submit condition
if(isset($_POST['submit'])) {
 
    $saldo=5000;
      $saldoActual;
 
    // Taking option from the form
    // data to a variable 'ch'
    $ch = $_POST['option'];
 
    switch($ch) {
        case 1:
            $saldoActual=$saldo-20;
            echo "Operação feita com sucesso ". "<br>";
            echo "O codigo da recarga é: ". "<br>";
            echo "78906435679";
            echo "o teu saldo novo é ". $saldoActual;
            break; 
            case 2:
                $saldoActual=$saldo-50;
                echo "Operação feita com sucesso ". "<br>";
                echo "O codigo da recarga é: ". "<br>";
                echo "78906435679";
                echo "o teu saldo novo é ". $saldoActual;
            break; 
            case 3:
                $saldoActual=$saldo-100;
                echo "Operação feita com sucesso ". "<br>";
                echo "O codigo da recarga é: ". "<br>";
                echo "78906435679";
                echo "o teu saldo novo é ". $saldoActual;
            break; 
            case 4:
                $saldoActual=$saldo-200;
                echo "Operação feita com sucesso ". "<br>";
                echo "O codigo da recarga é: ". "<br>";
                echo "78906435679";
                echo "o teu saldo novo é ". $saldoActual;
            break; 
            case 5:
                $saldoActual=$saldo-500;
                echo "Operação feita com sucesso ". "<br>";
                echo "O codigo da recarga é: ". "<br>";
                echo "78906435679";
                echo "o teu saldo novo é ". $saldoActual;
            break; 
            case 6:
                $saldoActual=$saldo-1000;
                echo "Operação feita com sucesso ". "<br>";
                echo "O codigo da recarga é: ". "<br>";
                echo "78906435679";
                echo "o teu saldo novo é ". $saldoActual;
            break; 
            default:
            echo ("invalid option\n");
            
        
    }
     
    return 0;
}
?>
</body>
</html>