<?php

// recebendo os dados do formulário html e atribuindo os valores dos inputs à variaveis
$nome = $_POST['nome']; //tipo text
$email = $_POST['email']; // tipo email
$matricula = $_POST['matricula']; //tipo text
$senha = $_POST['senha']; //tipo password
$curso = $_POST['curso']; //tipo text
$data = $_POST['data-nascimento']; //tipo date
$aplicacao = $_POST['area-aplicacao']; // select
$senioridade = $_POST['senioridade']; // tipo radio
$experiencia = $_POST['experiencia']; // textarea
$tecnologia = null; // tipo checkbox (continua abaixo)
//atribuindo valores de inputs do tipo "checkbox" a um vetor
if(isset($_POST['tecnologia']))
    $tecnologia = $_POST['tecnologia'];


//Abaixo foi utilizada a função echo para testar os dados inseridos no formulário

if(!empty($nome) && strlen($nome) >= 6){ // verificando se o nome informado contém ao menos 6 caracteres
    echo "<p>Seu nome é: $nome<p>";
} else {
    echo "<p>Seu nome precisa ter ao menos 6 caracteres!<P>";
}

if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){ //verificando se o email informado é válido
    echo "<p>Seu email é: $email<p>";
} else{
    echo "<p>Email informado inválido!<p>";
}

if(!empty($senha) && strlen($senha) >=10){ // verificando se a senha informada contém ao menos 10 caracteres
    echo "<p>Sua senha é: $senha<p>";
} else{
    echo "<p>Sua senha deve conter ao menos 10 caracteres!<p>";
}

if(!empty($matricula) && is_integer($matricula)){ // verificando se a matrícula informada é composta apenas de números "integers"
    echo "<p>Sua matricula é: $matricula<p>";
} else{
    echo "<p>A matrícula deve conter apenas números!<p>";
}

echo "<p>Seu curso é: $curso<p>";
echo "<p>Sua data de nascimento é: $data<p>";
echo "<p>Sua area de aplicação é: $aplicacao<p>";

//imprimindo na tela os valores selecionados no input tipo checkbox
echo "<p>Suas tecnologias dominadas são:<p>";
if ($tecnologia !== null)
    for ($i = 0; $i < count($tecnologia); $i++)
        echo "{$tecnologia[$i]}<br>";

// Utlizando echo para testar os dados coletados    
echo "<p>Sua senioridade é: $senioridade<p>";
echo "<p>Sua experiência informada foi: $experiencia<p>";
