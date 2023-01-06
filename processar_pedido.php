<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

echo "<p>nome: ".$nome;
echo "<p>email: ".$email;
echo "<p>Mensagem: ".$mensagem;


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "aluno123";
$db = "apoiocliente";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db)
	or die("Ligacao a base de dados falhou: %s\n". $conn -> error);

$sqlQuery="INSERT INTO pedidos (nome,email,mensagem) VALUES ('$nome','$email','$mensagem');";

echo "<p>Query: ".$sqlQuery;
	
$result = $conn->query($sqlQuery);

echo "<p>Cara(o) $nome, o seu pedido foi recebido com sucesso. Espere 2 dias úteis pela resposta do serviço de apoio aos clientes";

$conn -> close();



?>
