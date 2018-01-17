<?php
	//Incluir a conexão com banco de dados
	$servidor = "SRVM\NAMELESS";
	$connectionInfo = array("Database"=>"aquila", "UID"=> "sa", "PWD"=>"sr2645");
	$conn = sqlsrv_connect( $servidor, $connectionInfo );
	
	//Recuperar o valor da palavra
	$clientes = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$pesquisa = "SELECT * FROM tbcliente WHERE nomecliente LIKE '%$clientes%'";
	$resultado = sqlsrv_query($conn, $pesquisa);

	
	if( sqlsrv_num_rows($resultado) <= 0){
		echo "Nenhum nome encontrado...";
	}else{
		while($rows = sqlsrv_fetch_assoc($resultado, SQLSRV_FETCH_ASSOC)){
			echo "<li>".$rows['nomecliente']."</li>";
		}
	}
?>