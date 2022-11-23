<?php 
include "../conexao.php";
$query = "Insert into perguntas (pergunta) value ('Qual nome do Professor')";

$resultado = mysqli_query($conexao,$query);

$ultimoId = mysqli_insert_id($conexao);

echo $ultimoId;

$query2 = "insert into alternativas (pergunta_id, alternativa) values ($ultimoId, 'ALternativa Teste')";
$resultado2 = mysqli_query($conexao,$query2);


$query3 = "select p.pergunta pergunta, a.alternativa alternativa from perguntas p inner join alternativas a on (a.pergunta_id = p.id)"