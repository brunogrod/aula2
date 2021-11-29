<?php

/*

Comandos condicionais = Condição

if - else

se - senão


sintaxe:

if (condition) {

    [statements true]

} else {

    [staments false]

}

*/


$idade = 8;

if ($idade>=18){

    echo "maior de idade";

} else {

    echo "menor de idade";

}

$func = "Ignez";
$sal = 5800;

echo "<hr>";

# se o sal <5000 inss -- 9%
# senao inss - 11%

if ($sal<5000) {

    echo "inss 9%";

} else {

    echo "inss 11%";

}

echo "<hr>";

# se o sal <5000 inss -- 9%¨

# senao inss - 11%

$func = "Ignez";

$sal = 8800;

if ($sal<5000) {

    echo "inss 9% <br>";

    $inss = $sal * (9/100);

    $salLiq = $sal-$inss;

    echo "O valor de inss é de: {$inss}<br>";

    echo "Salárioo Líquido: {$salLiq}";


      

} else {

    echo "inss 11%<br>";

    $inss = $sal * (11/100);

    $salLiq = $sal-$inss;

    echo "O valor de inss é de: {$inss}<br>";

    echo "Salárioo Líquido: {$salLiq}";

}
echo "<hr>";

/* Criar um programa que leia login e senha
   Se o login estiver correto, confira a senha
   Se ambas estiverem correta, exibir mensagem "Conectado"
   Caso contrário "Login ou Senha Invalidos"

*/

echo "<h1> Acesso ao Sistema</h1>";

$login = "Admin";
$senha = "12345";

if ($login =="Admin"&&$senha==1234){

    echo "Conectado";

} else {

    echo "Login ou senha inválidos";

}

//modelo professor

$login = "juan1";

$senha = "1234";


if ($login=="juan")

{

    if($senha==123)

    {

        echo "<h2>Conectado ao Sistema</h2>";

    } else

       {

          echo "<h2> Senhas Errados</h2>";

          echo "<h3>Não Conectou</h3>";

       } 

} else {

    echo "login errado<br>";

    echo "Não Conectou";

}

