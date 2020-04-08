<?php
// Conexão
include_once 'classes/Cliente.php';
include_once 'includes/header.php';

$cliente = new Cliente();

$dados = $cliente->readAll();

?>
<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Clientes </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>Email:</th>
					<th>Idade:</th>
				</tr>
			</thead>

			<tbody>
				<?php
foreach ($dados as $d) {
	?>
				<tr>
					<td><?php echo $d['nome']; ?></td>
					<td><?php echo $d['sobrenome']; ?></td>
					<td><?php echo $d['email']; ?></td>
					<td><?php echo $d['idade']; ?></td>
					<td><a href="editar.php?id=<?php echo $d['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $d['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					  <div id="modal<?php echo $d['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">

					      <form action="delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					      	<button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>

					      	 <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>

					      </form>

					    </div>
					  </div>


				</tr>
			   <?php
}
;?>
			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn">Adicionar cliente</a>
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>

