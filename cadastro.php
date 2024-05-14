<?php

//localhost

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$cpf = $_GET['cpf']
$dt_nascimento = $_GET['nascimento'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$endereco = $_GET['endereco'];
$estcivil = $_GET['est-civil'];
$nacionalidade = $_GET['nacionalidade'];
$sexo = $_GET['sexo'];

$sql = "INSERT INTO 
    usuarios (id, nome, cpf, dt_nascimento, email, telefone, endereco, est_civil, nacionalidade, sexo)
    VALUES 
    (NULL, '{$nome}', '{$sobrenome}', '{$cpf}', '{$dt_nascimento}', '{$email}', '{$telefone}', '{$endereco}', '{$estcivil}', '{$nacionalidade)', '{$sexo}";

$conexao->query($sql);
>