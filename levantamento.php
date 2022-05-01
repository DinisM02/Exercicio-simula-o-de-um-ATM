<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body{
    margin: 0 auto;
   /* background-image: url("./img/levantamento.jpg");
    background-repeat: no-repeat;
    background-size: 100% 720px;
    */
    box-sizing: 80px;
    background: gray;
    
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
.nu{
    color: #fff;
    background-color: rgba(44, 62, 80, 0.12);
    width: 450px;
    padding: 10px 5px;
    border: 0px solid #234966;
    text-align: center;
    padding:12px;
    margin: 0 auto;
    border-radius: 3px;
    
    
    
    
}
.btn{
   /* color: #fff;
    background-color: rgba(44, 62, 80, 0.12);
   */ width: 200px;
   /* padding: 2px 4px;
    border: 0px solid #234966;
    text-align: center;
    padding:12px;
    margin: 0 auto;*/
    border-radius: 3px;
}
h4{
    padding: 1px;
    border: 11px ;
    border-style:outset;
    border-color: lightblue;
    background:white;
    color:black;
    

}
table{
    margin: 0 auto;
    padding: 10px;

}
input{
    width: 330px;
    height: 15px;
    padding: 10px 5px;
    border: 4px solid #234966;
    text-align: center;
    padding:5px;
    color: black;
    border-radius: 10px;

}
button{
    color: black;
    width: 130px;
    padding: 10px 5px;
    border: 4px solid #234966;
    text-align: center;
    padding:12px;
    border-radius: 10px;
}
#ok:hover{
    background-color: #008CBA;
    color: white;
}
#cancel:hover {
    background-color: #f44336;
    color: white;
}

.menu img{
    height: 50px;
    width: 100px;
    /*margin: 30px;*/
    text-align: centetr;
    border: 1px solid;
    border-radius: 5px;
    border-color: blue;
    margin-bottom:-20px;
    padding:10;

    </style>
</head>
<body>
    <div class="menu">
	<form action="lev.php" method="POST">
        <table>
            <tr>
                <th>
                <div class="nu">
        <h4>Notas Disponiveis</h4>
        <table class="notaD">
        
            <tr class= "">

                <th>100 MT</th>
                <th>200 MT</th>
            
            </tr>
        
            <tr>
                <th>500 MT</th>
                <th>1000 MT</th>
                
            </tr>
            
    
        </table>
        </div>
                </th>
            </tr>
            <tr>
                <th>
                <div class="nu">
            <h4>Digite o valor que pretente levantar</h4>
            <input type="text" name="valorLeva" id="">
        </div>
        <table>
        <tr>
        <th>
        <div class="btn">
            <button type="submit" id="ok">confirmar</button>
        </div>
        </th>
        <th>
        <div class="btn">
            <button type="submit" id="cancel">Cancelar</button>
        </div>
        </th>
        </tr>
        </table>
                </th>
            </tr>
        </table>
       
	</form>        
    </div>
</body>
</html>