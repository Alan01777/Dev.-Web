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

echo "<p>Seu nome é: $nome<p>";
echo "<p>Seu email é: $email<p>";
echo "<p>Sua senha é: $senha<p>";
echo "<p>Sua matricula é: $matricula<p>";
echo "<p>Seu curso é: $curso<p>";
echo "<p>Sua data de nascimento é: $data<p>";
echo "<p>Sua area de aplicação é: $aplicacao<p>";

//imprimindo na tela os valores selecionados no input checkbox
echo "<p>Suas tecnologias dominadas são:<p>";
if ($tecnologia !== null)
    for ($i = 0; $i < count($tecnologia); $i++)
        echo "{$tecnologia[$i]}<br>";
echo "<p>Sua senioridade é: $senioridade<p>";
echo "<p>Sua experiência informada foi: $experiencia<p>";