<a class="btn btn-success" id='btn' href="?pagina=inserir_matricula">Inserir nova matricula</a>
<br>
<br>

<table class="table table-hover table-striped" id="matriculas">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Nome curso</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			include("db.php");
			$consulta_matriculas = mysqli_query($conexao, $query);
			
			while($linha = mysqli_fetch_array($consulta_matriculas)){
				echo '<tr><td >'.$linha['nome_aluno'].'</td>';
				echo '<td>'.$linha['nome_do_curso'].'</td>';
		?>
			<td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a></td></tr>
		<?php		
			}

		?>
	</tbody>
</table>