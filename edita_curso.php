<?php 

include 'db.php';

$id_curso = $_POST['id_curso'];
$nome_do_curso = $_POST['nome_do_curso'];
$carga_horaria = $_POST['carga_horaria'];


$query = "UPDATE cursos SET nome_do_curso='$nome_do_curso', carga_horaria=$carga_horaria WHERE id_curso = $id_curso";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');
?>