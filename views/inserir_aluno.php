<?php if(!isset($_GET['editar'])){ ?>

<h1>Inserir novo aluno</h1>
<form method="post" action="processa_aluno.php">
	<br>
	<label class="badge badge-secondary">Nome aluno:</label><br>
	<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
	<br><br>
	<label class="badge badge-secondary">Data de nascimento:</label><br>
	<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento"><br><br>
	<input type="submit"id='btn' class="btn btn-success" value="Inserir aluno">
</form>

<?php } else { ?>
	<?php
		include("db.php");
		$consulta_alunos = mysqli_query($conexao,"SELECT * FROM alunos");
		while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
		<?php if($linha['id_aluno'] == $_GET['editar']){ ?>
			<h1>Editar aluno</h1>
				<form method="post" action="edita_aluno.php">
					<input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno']; ?>">
					<br>
					<label class="badge badge-secondary">Nome aluno:</label><br>
					<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno']; ?>">
					<br><br>
					<label class="badge badge-secondary">Data de nascimento:</label><br>
					<input class="form-control"  type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento']; ?>"><br><br>
					<input class="btn btn-success" id='btn' type="submit" value="Editar aluno">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>