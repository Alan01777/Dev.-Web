<?php

//atribuindo os valores dos inputs de tipos diversos à variaveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];
$curso = $_POST['curso'];
$data = $_POST['data-nascimento'];
$aplicacao = $_POST['area-aplicacao'];
$tecnologia = null;
$experiencia = $_POST['experiencia'];

//atribuindo valores de inputs do tipo "checkbox" a um vetor
if(isset($_POST['tecnologia']))
    $tecnologia = $_POST['tecnologia'];

$senioridade = $_POST['senioridade'];

echo "Seu nome é: $nome<br>";
echo "Seu email é: $email<br>";
echo "Sua senha é: $senha<br>";
echo "Sua matricula é: $matricula<br>";
echo "Seu curso é: $curso<br>";
echo "Sua data de nascimento é: $data<br>";
echo "Sua area de aplicação é: $aplicacao<br>";

//imprimindo na tela os valores selecionados no input checkbox
echo "Suas tecnologias dominadas são:<br>";
if ($tecnologia !== null)
    for ($i = 0; $i < count($tecnologia); $i++)
        echo "{$tecnologia[$i]}, ";
echo "Sua senioridade é: $senioridade";
echo "Sua experiência informada foi: $experiencia";