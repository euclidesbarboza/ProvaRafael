<?php
	$nome = filter_input(INPUT_POST, "nome");
	$autor = filter_input(INPUT_POST, "autor");
	$editora = filter_input(INPUT_POST, "editora");
	$numEdicao = filter_input(INPUT_POST, "numEdicao");
	$genero = filter_input(INPUT_POST, "genero");
	$descricao = filter_input(INPUT_POST, "descricao");
	$valor = filter_input(INPUT_POST, "valor");
	
	$dados = array ($nome, $autor, $editora, $numEdicao, $genero, $descricao, $valor);
	
	include ("Livro.php");
	$liv = new Livro();
	$liv->cadastrar($dados);
?>