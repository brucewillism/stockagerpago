<?php
?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <title>Inserir Pedido</title>
</head>
<body class="container">
    <h1>Cadastrar Novo Pedido</h1>
    
    <form id="frmCadPed" name="frmCadPed" method="post"
    action="insPedido.php" role="form">
    <div class="form-group">
       <label for="lblCliente">Cliente:</label>
       <?php
       require_once('bd/conexao.php');
       $stmt = $conn->query("SELECT * 
          FROM clientes WHERE id_user = '$id'");

       $res = $stmt->execute();
       ?>
       <select name="slcCliente" id="slcCliente" class="form-control">
        <?php  $rows = $stmt->rowCount(); ?>
        <option value="<?php echo $row['id'] ?>" selected>
          <?php echo $row['nome'];?>
      </option>
      <?php while($row = $stmt->rowCount($stmt)){?>
          <option value="<?php echo $row['id'] ?>"><?php echo $row['nome'];?> </option>
      <?php }?>
  </select>     
</div>
<div class="form-group">
    <label for="lblData">Data: </label>
    <input type="date" class="form-control" name="txtdata" id="txtData"
    value="<?php (new DateTime())->format('Y-m-d') ?>"
</div>
<br>
<div class="form-group">
   <label for="lblCliente">Produto:</label>
   <?php
   require_once('conectar.php');
   $con = open_database();
   selectDb();
   $rsPro = mysql_query("select * from produtos;");
   close_database($con);
   ?>
   <select name="slcCliente" id="slcCliente" class="form-control">
    <?php $row = mysql_fetch_array($rsPro); ?>
    <option value="<?php echo $row['id'] ?>" selected>
      <?php echo $row['nome'];?>
  </option>
  <?php while($row = mysql_fetch_array($rsPro)){?>
      <option value="<?php echo $row['id'] ?>"><?php echo $row['nome'];?> </option>
  <?php }?>
</select>     
</div>
<div class="form-group">
    <label for="lblQtd">Quantidade: </label>
    <input type="date" class="form-control" name="txtQtd" id="txtQtd"
    value="<?php echo $qtd?>"
</div>
<div class="form-group">
    <label for="lblVal">Valor: </label>
    <input type="date" class="form-control" name="txtVal" id="txtVal"
    value="<?php echo $val?>"
</div>
<input name="bt_cad" id="bt_cad" class="btn btn-success" type="submit" value="Gravar">
<input name="bt_limpar" id="bt_limpar" class="btn btn-warning" type="reset" value="Limpar">
<input name="bt_voltar" id="bt_voltar" class="btn btn-danger" type="button" value="Voltar"
onclick="javascript:location.href='listarPedidos.php'">
</form>

</body>
</html>