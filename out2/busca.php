<?php header('Content-Type: text/html; charset=iso-8859-1');?>
<?php

$servidor = "SRVM\NAMELESS";
$connectionInfo = array("Database"=>"aquila", "UID"=> "sa", "PWD"=>"sr2645");
$conn = sqlsrv_connect( $servidor, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));

    }
//fim da conexão com o banco de dados

$palavra = $_POST['palavra'];
$query = sqlsrv_query( $conn, "SELECT * FROM view_1 WHERE nomecliente LIKE '%$palavra%'" , array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
$row_count = sqlsrv_num_rows( $query );
?>
<section class="panel col-lg-9">

    <header class="panel-heading">
        Dados da busca:        
    </header>
    <?php
    if($row_count>0){
    ?>
    <table class="table table-striped table-advance table-hover">
        <tbody>
            <tr>
                <th><i class="icon_profile"></i> Id</th>
                <th><i class="icon_profile"></i> Nome</th>
                <th><i class="icon_mail_alt"></i> CPF</th>
            </tr>
            <?php
            while($linha = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
            ?>
            <tr>
                <td><?php echo $linha['idcli'];?></td>
                <td><?php echo $linha['nomecliente'];?></td>
                <td><?php echo $linha['cpf'];?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php }else{?>
    <h4>Nao foram encontrados registros com esta palavra.</h4>
    <?php }?>
</section>