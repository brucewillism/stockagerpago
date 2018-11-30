  <?php 
  require_once "bd/conexao.php";
  include 'menu.php';
  ?>
  <body>

    <br>
    <br>
    <br>
    <h1>Listagem De Clientes</h1>
    <br>
    <table id="tabela" class="display" cellspacing="0" width="100%" border="1px" style="background: #C0C0C0">
      <thead>

        <tr>
          <th>Nome Fantasia</th>
          <th>CPF</th>
          <th>Endereco</th>
          <th>Bairro</th>
          <th>Deletar</th>
          <th>Editar</th>
          <th>Detalhes</th>
        </tr>
      </thead>

      <?php
      require_once "bd/conexao.php";
      $id = $_SESSION['user_id'];
      $stmt = $conn->query("SELECT * 
        FROM clientes
        WHERE id_user = '$id'");
      $cadastro = $stmt->fetchAll();
      foreach ($cadastro as $dados) {

        $id = $dados['id'];
        $cpf = $dados['cpf'];
        $cnpj = $dados['cnpj'];
        $rg = $dados['rg'];
        $nome = $dados['nome'];
        $nome_fantasia = $dados['nome_fantasia'];
        $cep = $dados['cep'];
        $endereco = $dados['endereco'];
        $numero = $dados['numero'];
        $bairro = $dados['bairro'];
        $complemento = $dados['complemento'];
        $cidade = $dados['cidade'];
        $uf = $dados['uf'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $email = $dados['email'];

        $entry = base64_encode($arquivo);
        echo "<tr>
        <td>"."$nome"."</td>
        <td>"."$cpf"."</td>
        <td>"."$endereco"."</td>
        <td>"."$bairro"."</td>
        <td>"."$embarcacao"."</td>
        <td><a  href='excluir.php?id=".$id."'>Excluir</a></td>
        <td><a  href='formulario_editar.php?id=".$id."'>Editar</a></td>
        <td><a  href='detalhes_clientes.php?id=".$id."' >Mais detalhes</a></td>
        </tr>";
      }
      ?>
    </table>
  </div>
</div>
</div>
<center>
  <input type="button" value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad">
</center>
<?php
include 'rodape.php';
?>
</body>
</html>