	<style type="text/css">
    
    input {background-color: #000;
    }
    div { background-color:#000; 
    			width: 25%; opacity:0.5;
    			color: #FFF8DC; 
    }
    </style>
    <body background="livro.jpg">
	<div>
<form action="controllerLivro.php" method="POST">
	
		<label>Nome:</label>
		<input type="text" name="nome"><br><br>
	<label>Autor:</label>
		<input type="text" name="autor"><br><br>
	<label>Editora:</label>
		<input type="text" name="editora"><br><br>
	<label> Edição: </label>
		<input type="number"  name="numEdicao"><br><br>
	<label>Gênero:</label>
		<input type="text" name="genero"><br><br>
	<label>Descrição:</label>
		<input type="text" name="descricao"><br><br>
	<label>Valor do Livro:</label>
		<input type="text" name="valor"><br><br>
	<input type="submit" value="Gravar">
	<input type="reset" value="Limpar">
</form>
</div>