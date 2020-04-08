<?php
include_once 'classes/Cliente.php';

$cliente = new Cliente();

$id = $_POST['id'];

if (isset($_POST['btn-deletar'])) {
	if ($cliente->delete($id) > 0) {
		header('Location: index.php?sucess');
	}
}
