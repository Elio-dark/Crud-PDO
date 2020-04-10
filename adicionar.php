<?php
// Header
include_once 'includes/header.php';
include_once 'classes/Cliente.php';

$cliente = new Cliente();

if (isset($_POST['btn-cadastrar'])) {
	if ($cliente->create() > 0) {
		header('Location: index.php');
		exit();
	}
}

?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cliente </h3>
		<form action="" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="sobrenome" id="sobrenome">
				<label for="sobrenome">Sobrenome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="idade" id="idade">
				<label for="idade">Idade</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
