<?php
// Conexão
include_once 'classes/Cliente.php';
// Header
include_once 'includes/header.php';
// Select
$id = $_GET['id'];

$cliente = new Cliente();
$dados = $cliente->read($id);

if (isset($_POST['btn-editar'])) {
	if ($cliente->update($id) > 0) {
		header('Location: index.php?sucess');
	}
}

?>



<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar Cliente </h3>
		<form action="" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sobrenome" value="<?php echo $dados['sobrenome']; ?>" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['email']; ?>" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<input type="text" value="<?php echo $dados['idade']; ?>" name="idade" id="idade">
				<label for="idade">Idade</label>
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="index.php" class="btn green"> Lista de clientes </a>
		</form>

	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
