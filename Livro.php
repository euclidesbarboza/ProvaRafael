<?php
class Livro{
	public $nome, $autor, $editora,$numEdicao, $genero, $descricao, $valor;
		public function setNome($nome){
			$this -> nome = $nome;
		}
		public function setAutor($autor){
			$this -> autor = $autor;
		}
		public function setNumEdicao($numEdicao){
			$this -> numEdicao = $numEdicao;
		}
		public function setEditora($editora){
			$this -> editora = $editora;		
		}
		public function setGenero($genero){
			$this -> genero = $genero;		
		}
		public function setDescricao($descricao){
			$this -> descricao = $descricao;		
		}
		public function setValor($valor){
			$this -> valor = $valor;		
		}
		
		public function getNome(){
			return $this -> nome;
		}
		public function getAutor(){
			return $this -> autor;
		}
		public function getEditora(){
			return $this -> editora;
		}
		public function getNumEdicao(){
			return $this -> numEdicao;		
		}
		public function getGenero(){
			return $this -> genero;		
		}
		public function getDescricao(){
			return $this -> descricao;		
		}
		public function getValor(){
			return $this -> valor;		
		}
		public function cadastrar($dados){
		list($nome, $autor, $editora, $numEdicao, $genero, $descricao, $valor) = $dados;
		
		$this -> setNome($nome);
		$this -> setAutor($autor);
		$this -> setEditora($editora);
		$this -> setNumEdicao($numEdicao);
		$this -> setGenero($genero);
		$this -> setDescricao($descricao);
		$this -> setValor($valor);
		
		$conectar = new mysqli ("localhost", "root", "","Livro");
		 $sql= "insert into vendaLivro
					(nome, autor, editora, numEdicao, genero, descricao, valor)
					values (
					'{$this->getNome()}',
					'{$this->getAutor()}',
					'{$this->getEditora()}',
					'{$this->getNumEdicao()}',
					'{$this->getGenero()}',
					'{$this->getDescricao()}',
					'{$this->getValor()}')";
					
	$gravar = $conectar->query($sql);
	$num= $conectar->affected_rows;
	if($num==1){
		echo "<fieldset>";
		echo "<h2>Os dados abaixo foram armazenados na classe com sucesso!</h2>";
		echo "<br>Nome:" .$this->getNome();
		echo "<br>Autor:" .$this->getAutor();
		echo "<br>Editora:" .$this->getEditora();
		echo "<br>Número Edição:" .$this->getNumEdicao();
		echo "<br>Gênero:" .$this->getGenero();
		echo "<br>Descrição:" .$this->getDescricao();
		echo "<br>Valor:" .$this->getValor();
		echo "</fieldset>";
	}else{
		echo "<fieldset>";
		echo "Erro ao gravar dados!";
		echo "</fieldset>"; 
	}
		}

	public function buscarTodos(){
		$sql = "select * from vendaLivro ORDER by nome ASC";
		$conectar = new mysqli("localhost","root","","Livro");
		$listar = $conectar->query($sql);
		$liv = array();
		while($linha = $listar->fetch_array()) {
			$liv[] = $linha;
		}
		return $liv;
	}
}
?>