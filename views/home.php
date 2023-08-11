
<link rel="stylesheet" href="css/estilo.css">


<form lass="form-signin" method="post" action="login.php">
    <h1 class="h3 mb-3 font-weight-normal" style="text-align:center"><b>Faça seu login</b></h1>
    <br>
   
    <input name='usuario'type='text' id='usuario' class="form-control" placeholder="Usuario">
    <br>
    <input name='senha' type='password' id='senha' class="form-control" placeholder="Senha">
    <br>
    <input type='submit' value='entrar' id='btn' class='btn btn-success btn-lg btn-primary btn-block'>
    
</form>

<?php if(isset($_GRT['erro'])){ ?>

<div class='alert alert-danger' role = 'alert'>
    Usuário e/ou senha invalidos.
</divi>
<?php } ?>