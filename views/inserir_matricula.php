<h1>Inserir nova matrícula</h1>


<form method="post" action="processa_matricula.php">
	<br>
	<p class="badge badge-secondary">Selecione o aluno</p>
	<select class="form-control" name="escolha_aluno">
	
		<?php 
			include("db.php");
			$consulta_alunos = mysqli_query($conexao,"SELECT nome_aluno, id_aluno FROM alunos");
	
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
		}
		?>
	</select>

	<br><br>

	<p class="badge badge-secondary">Selecione o curso</p>
	<select class="form-control" name="escolha_curso">
		
		<?php 
			include("db.php");
			$consulta_cursos = mysqli_query($conexao,"SELECT nome_do_curso, id_curso FROM cursos");
	
			while($linha = mysqli_fetch_array($consulta_cursos)){
				echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_do_curso'].'</option>';
			}
		?>
	</select>
	<br><br>
	<input class="btn btn-success" id='btn' type="submit" value="Matricular aluno no curso">
</form>