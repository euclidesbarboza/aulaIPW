<?php
/*
 + public
 - private
 * protected
*/
class Noticia{
	public $id, $titulo, $descricao, $autor;
	public $dataPublicacao, $curso;
	
		public function setTitulo($titulo){
	$this->titulo = $titulo;
	}
		public function setDescricao($descricao){
	$this->descrica = $descricao;
	}
   	public function setAutor($autor){
   $this->autor = $autor;
   }
   	public function setCurso($curso){
   $this->curso = $curso;
   }
   	public function getTitulo(){
   return $this->titulo;
   }
   	public function getDescricao(){
   return $this->descricao;
   }
   	public function getAutor(){
   return $this->autor;
   }
   	public function getDataPublicacao(){
   return $this->dataPublicacao;
   }
   	public function getCurso(){
   return $this->curso;
   }
   
   $this->dataPublicacao = $dataPublicacao;
   }	
   	public function cadastrar($dados){
	list($titulo, $descricao, $autor, $dataPublicacao, $curso) = $dados;
	
	$this->setTitulo($titulo);
	$this->setDescricao($descricao);
	$this->setAutor($autor);
	$this->setDataPUblicacao($dataPublicacao);
	$this->setCurso($curso);
	
	$conectar = new mysqli("localhost", "root", "", "basenoticia");
	
	"$sql = insert into noticia
	(titulo, descricao, autor,dataPublicao, curso)
	values (
	'{$this->getTitulo()}',
	'{$this->getDescricao()}',
	'{$this->getAutor()}',
	'{$this->getDataPublicacao()}',
	'{$this->getCurso()}'
	)
	";
	$gravar = $conectar->query($sql);
	$num = $conectar->affected_rows();
	if($num==1){
		echo "<fiedset>";
		echo "<hr>Título: ". $titulo;
		echo "<br>Descrição: ". $descricao;
		echo "<br>Autor: ". $autor;
		echo "<br>Publicado em: ". $dataPublicacao;
		echo "<br>Curso: ". $curso;
		echo "<hr>";
		echo "</fieldset>";
	}else{
		echo "<fieldset>";
		echo "<Erro ao gravar dados>";
		echo "</fieldset>";
	}
	
	} 	

	public function alterar ($dados){}
	public function excluir ($id){}
	public function buscarUm ($id){}
	public function buscarTodos (){}
}
?>
