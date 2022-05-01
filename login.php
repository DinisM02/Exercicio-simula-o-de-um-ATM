<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conteiner">
        <img src="img/ATM5.jpg" alt="">
    
        <form action="validacao.php" method="post">
            <div class="form_input">
                <input type="text" name="numero_conta" class="input_dados" id="" placeholder="Introduza o número da conta">
            </div>
            <div class="form_input">
                <input type="password" name="password" class="input_dados" id="" placeholder="Introduza o pin">
            </div>
            <input type="submit" value="Login" class="btn_login">
        </form>
    </div>
</body>
</html>