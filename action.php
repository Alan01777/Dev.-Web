<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];
$curso = $_POST['curso'];
$data = $_POST['data-nascimento'];
$aplicacao = $_POST['area-aplicacao'];



echo "Seu nome é: $nome<br>";
echo "Seu email é: $email<br>";
echo "Sua senha é: $senha<br>";
echo "Sua matricula é: $matricula<br>";
echo "Seu curso é: $curso<br>";
echo "Sua data de nascimento é: $data<br>";
echo "Sua area de aplicação é: $aplicacao<br>";