<?php 
  //session_start();
  //include('php/funcoes.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuários</title>

  <!-- CSS -->
  <?php include('partes/css.php'); ?>
  <!-- Fim CSS -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include('partes/navbar.php'); ?>
  <!-- Fim Navbar -->

  <!-- Sidebar -->
  <?php 
    //$_SESSION['menu-n1'] = 'administrador';
    //$_SESSION['menu-n2'] = 'fornecedores';
    //include('partes/sidebar.php'); 
  ?>
  <!-- Fim Sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <!-- Espaço -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  
                  <div class="col-9">
                    <h3 class="card-title">Usuários</h3>
                  </div>
                  
                  <div class="col-3" align="right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novoUsuarioModal">
                      Novo Usuário
                    </button>
                  </div>

                </div>
              </div>

              

              <!-- /.card-header -->
              <div class="card-body">
                <table id="tabela" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nome completo</th>
                      <th>Email</th>
                      <th>Tipo de usuário</th>
                      <th>Empresa</th>
                      <th>Data de admissão</th>                                     
                  </tr>
                  </thead>
                  <tbody>

                  <?php //echo listaFornecedores(); ?>
                  
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      <div class="modal fade" id="novoUsuarioModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h4 class="modal-title">Novo Usuário</h4>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="php/salvarFornecedor.php?funcao=I" enctype="multipart/form-data">              
                
                <div class="row">
                  <div class="col-8">
                    <div class="form-group">
                      <label for="iNome">ID:</label>
                      <input type="text" class="form-control" id="iNome" name="nNome" maxlength="50">
                    </div>
                  </div>

                  

                  <div class="col-8">
                    <div class="form-group">
                      <label for="iLogin">Nome completo:</label>
                      <input type="email" class="form-control" id="iLogin" name="nLogin" maxlength="50">
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                      <label for="iSenha">Email:</label>
                      <input type="text" class="form-control" id="iSenha" name="nSenha" maxlength="6">
                    </div>
                  </div>
                
                <!-- Tipo de Usuário -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="tipoUsuario">Tipo de Usuário:</label>
                      <select class="form-control" id="tipoUsuario" name="tipo_usuario" required>
                        <option value="">Selecione</option>
                        <option value="admin">Administrador</option>
                        <option value="comum">Comum</option>
                      </select>
                    </div>
                  </div>

                <!-- Empresa -->
                  <div class="col-6">
                    <div class="form-group">
                      <label for="empresa">Empresa:</label>
                      <select class="form-control" id="empresa" name="empresa_id" required>
                        <option value="">Selecione</option>
                      </select>
                    </div>
                  </div>


                  <div class="col-3">
                    <div class="form-group">
                      <label>Data de admissão:</label>
                      <input required name="CEP" type="date" class="form-control cep">
                    </div>
                  </div>
                  
                  <!--<div class="col-9">
                    <div class="form-group">
                      <label>Endereço</label>
                      <input required name="Endereco" type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-3">
                    <div class="form-group">
                      <label>Número</label>
                      <input required name="Numero" type="text" maxlength="8" class="form-control">
                    </div>
                  </div>

                  <div class="col-9">
                    <div class="form-group">
                      <label>Complemento</label>
                      <input name="Complemento" type="text" maxlength="50" class="form-control">
                    </div>
                  </div>

                  <div class="col-5">
                    <div class="form-group">
                      <label>Bairro</label>
                      <input required name="Bairro" type="text" class="form-control">
                    </div>
                  </div>
                  
                  <div class="col-5">
                    <div class="form-group">
                      <label>Cidade</label>
                      <input required name="Cidade" type="text" class="form-control">
                    </div>
                  </div>

                  <div class="col-2">
                    <div class="form-group">
                      <label>UF</label>
                      <input required name="UF" type="text" class="form-control">
                    </div>
                  </div>

                </div>-->

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-success">Salvar</button>
                </div> 
                
              </form>

            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    </section>
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- JS -->
<?php include('partes/js.php'); ?>
<!-- Fim JS -->

<script>
  $(function () {
    $('#tabela').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
