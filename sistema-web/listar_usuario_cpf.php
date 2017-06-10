<body role="document">

<!-- CHAMADA DO MENU EXTERNO --> 
<?php

 include_once("conexao.php");


  //PESQUISA DE TODOS OS DADOS DA TABELA DO BANCO E ATRIBUÍÇÃO NA VARIÁVEL 
  $resultado = mysqli_query($conexao, "SELECT * FROM usuarios ORDER BY cpf ASC");

  //CONTANDO QUANTAS LINHAS HÁ NO BANCO DE DADOS
  $linhas = mysqli_num_rows($resultado);  

?>

<!-- ORDENAÇÃO POR NOME OU CPF -->
<div class="col-md-11">
  <div class="put-right" align="right">

    <div>

     <!-- COMBOBOX LISTAR -->
    <div class="btn-group">
       <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"    aria-haspopup="true" aria-expanded="false">
            Listar<span class="caret"></span>
       </button>

        <ul class="dropdown-menu">
            <li><a class="listar" href="administrador.php?link=2">por cadastro</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="administrador.php?link=9">por nome</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="administrador.php?link=10">por CPF</a></li>
        </ul>
      </div>

      <!-- BOTÃO IMPRIMIR -->
    <a href='administrador.php?link=11'>
      <button onclick="#" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"    aria-haspopup="true" aria-expanded="false">
            Imprimir
      </button>
    </a>

  </div> 

</div>

<div class="container theme-showcase" role="main">

<!-- INICIO DA TABELA --> 
  <div class="page-header">
    <h1 align="center">Lista de Usuários</h1>

    <h4 align="center" visibility="hidden" >Ordenação por CPF</h4>

  </div>


  <div class="row">

    <div class="col-md-12">

      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th></th>
            <th>NOME</th>
            <th></th>
            <th>CPF</th>
            <th></th>
            <th>E-MAIL</th>
            <th></th>
            <th>NÍVEL DE ACESSO</th>
            <th></th>
            <th></th>
            <th></th>
            <th glyphicon glyphicon-trash>AÇÕES</th>
          </tr>
        </thead>
        <tbody>

          <?php                     

            while ($linhas = mysqli_fetch_array($resultado)) {

              if ($linhas['nivel_acesso_id'] == "1") {
                    $nivel = "Adiministrador";

                 }else{

                    $nivel = "Usuário";

                 }
                    echo "<tr>"; 
                    echo "<td>".$linhas['id']."<td>";
                    echo "<td>".$linhas['nome']."<td>";
                    echo "<td>".$linhas['cpf']."<td>";                       
                    echo "<td>".$linhas['email']."<td>";
                    echo "<td>".$nivel."<td>";
              

              ?>

                <td> 
                  <a href='administrador.php?link=4&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-xs btn-primary'>Editar</button></a>
                <td>

                <td> 
                    <a href='administrador.php?link=7&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-xs btn-warning'>Visualizar</button></a>
                <td>

                <td> 
                   <a href='administrador.php?link=8&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-xs btn-danger'>Apagar</button></a>
                <td>

                <?php

            }

          ?>
         
        </tbody>
      </table>
    </div>
  </div>
<!-- FIM DA TABELA -->

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/docs.min.js"></script>
<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>
