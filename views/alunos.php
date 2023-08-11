

<a class="btn btn-success" id='btn' href="?pagina=inserir_aluno">Inserir novo aluno</a>
<br>
<br>

<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Data nascimento</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			include("db.php");
			$consulta_alunos = mysqli_query($conexao,"SELECT * FROM alunos");
	
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td >'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
			?>

			<td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">Editar</a></td>
			<td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">Deletar</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>