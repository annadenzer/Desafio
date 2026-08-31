<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<body>

 <?php
 $loginCorreto = "Anna";
 $senhaCorreta = "25022007";
 $tokenValido = "Token@anna";
 $loginDigitado = "";
 $senhaDigitada = "";
 $tokenRecebido = "Token@annaa";

 echo "<h2>Insira seu login e senha ou token:</h2>";
 echo "<p>Login: " . $loginDigitado . "</p>";
 echo "<p>Senha: " . $senhaDigitada . "</p>";
 echo "<p>Token: " . $tokenRecebido . "</p>";

 if (($loginDigitado === $loginCorreto && $senhaDigitada === $senhaCorreta) || ($tokenRecebido === $tokenValido)) {
    echo "Acesso permitido!";
} else {
    echo "Acesso negado!";
}

 ?>

</body>

</html>