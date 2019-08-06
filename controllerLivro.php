<?php
	$nome = filter_input(INPUT_POST, "nome");
	$autor = filter_input(INPUT_POST, "autor");
	$editora = filter_input(INPUT_POST, "editora");
	$numEditora = filter_input(INPUT_POST, "numEditora");
	$genero = filter_input(INPUT_POST, "genero");
	$descricao = filter_input(INPUT_POST, "descricao");
	
	$dados = array ($nome, $autor, $editora, $numEditora, $genero, $descricao);
	
	include ("livro.php");
	$liv = new Livro();
	$liv->cadastrar();
?>