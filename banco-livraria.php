<?php

	include "conecta.php";

	function insereLivro($connection, $livro, $nome, $sinopse, $valor, $editora, $isbm){
		$query = "INSERT into livro (nomeLivro,nomeAutor,sinopse,valor,editora,isbm) VALUES ('$livro','$nome', '$sinopse', '$valor', '$editora' ,'$isbm')";
		return mysqli_query($connection, $query);
	}

	function insereUsuario($connection, $nome, $senha, $nivel, $telefone){
		$query = "INSERT into usuario (useremail,senhauser,permissao,telefone) values ('$nome', '$senha', '$nivel', '$telefone')";
		return mysqli_query($connection, $query);
	}

	function listaLivro($connection){
		$livros = [];
		$query = "SELECT * FROM livro";
		$resultado = mysqli_query($connection, $query);
		while($livro = mysqli_fetch_assoc($resultado)){
			array_push($livros, $livro);
		}

		return $livros;
	}


	function listaUsuario($connection){
		$usuarios = [];
		$query = "SELECT * FROM usuario";
		$resultado = mysqli_query($connection, $query);
		while($usuario = mysqli_fetch_assoc($resultado)){
			array_push($usuarios, $usuario);
		}
		return $usuarios;
	}

	function removeLivro($connection, $id){
		$query = "DELETE FROM livro where id = $id";
		return mysqli_query($connection, $query);
	}

	function removeUsuario($connection, $id){
		$query = "DELETE FROM usuario where id = $id";
		return mysqli_query($connection, $query);
	}

	function buscaLivro($connection, $id){
		$query = "SELECT * FROM livro where id = '$id'";
		$resultado = mysqli_query($connection, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function alteraLivro($connection){
		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$nomeauto = $_POST['nomeautor'];
		$isbm = $_POST['isbm'];
		$editora = $_POST['editora'];
		$sinopse = $_POST['sinopse'];
		$preco = $_POST['valor'];

		$query = "UPDATE livro SET nomeLivro='$nome',nomeAutor='$nomeauto',valor='$preco',isbm='$isbm',editora='$editora',sinopse='$sinopse' where id='$id' ";
		$inserir = mysqli_query($connection,$query);
		$teste = mysqli_affected_rows($connection);

	}

	function buscaUsuario($connection, $id){
		$query = "SELECT * FROM usuario where id = {$id}";
		$resultado = mysqli_query($connection, $query);
		return mysqli_fetch_assoc($resultado);
	}

	

	function searchLivro($connection, $nome){
		$livro = [];
		$query = "SELECT * FROM livro where nomeLivro like '{$nome}%'";
		$resultado = mysqli_query($connection, $query);
		while($livros = mysqli_fetch_assoc($resultado)){
			array_push($livro, $livros);
		}
		return $livro;
	}


	function adicionaEmprestimo($connection, $id_usuario){
		$query = "INSERT into emprestimo (usuario_id) VALUES ({$id_usuario})";
		return mysqli_query($connection, $query);
	}


	function adicionaDetalheEmprestimo($connection, $livro_id, $emprestimo_id){
		$query = "INSERT into detalheemprestimo (livro_id, emprestimo_id) VALUES ({$livro_id}, {$emprestimo_id}) ";
		return mysqli_query($connection, $query);
	}


	function retornaIdEmprestimo($connection){
		return mysqli_INSERT_id($connection); //função nova ela retorna o id do ultimo INSERT.
	}




