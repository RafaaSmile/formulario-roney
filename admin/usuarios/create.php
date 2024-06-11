<?php
// localhost

$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$cpf = $_GET['cpf'];
$dt_nascimento = $_GET['nascimento'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$endereco = $_GET['endereco'];
$estcivil = $_GET['est-civil'];
$nacionalidade = $_GET['nacionalidade'];
$sexo = $_GET['sexo'];

// Consulta para verificar se o email já existe
$query = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conexao->query($query);

if ($result->num_rows > 0) {
    echo "<h3>Cadastro existente.</h3>";
} else {
    // Email não existe, faça a inserção
    $sql = "INSERT INTO usuarios (nome, sobrenome, cpf, dt_nascimento, email, telefone, endereco, est_civil, nacionalidade, sexo)
            VALUES ('$nome', '$sobrenome', '$cpf', '$dt_nascimento', '$email', '$telefone', '$endereco', '$estcivil', '$nacionalidade', '$sexo')";

    if ($conexao->query($sql) === true) {
        header('Location: formulario.html');
    } else {
        echo "<h3>Error: " . $conexao->error . "</h3>";
    }
}
?>
