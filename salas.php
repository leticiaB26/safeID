<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Salas | SafeID</title>
    <link rel="stylesheet" href="sidebar.css">
    <!-- Bootstrap (pra facilitar o layout dos cards e botões) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>



<div class="content p-4">

    <h2>Salas</h2>
    
        <div class="mb-3" align="right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#novaSalaModal">
            Nova Sala
        </button>
    </div>

    <?php include 'sidebar.php'; ?>
        <div class="sidebar">
        <h2> SafeID</h2>
        <br>
        <br>
        <a href="inicial.php">Página inicial</a>
        <a href="salas.php">Salas</a>
        <a href="relatorios.php">Relatórios</a>
        <a href="configuracoes.php">Configurações</a>
       
       
         <div class="logout">
                <a href="index.php">Sair</a>
            </div>


    
    <div class="row">
        <!-- Card de exemplo de sala -->
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Sala 01</h5>
                    <p class="card-text">Capacidade: 20 pessoas</p>
                    <a href="#" class="btn btn-primary">Detalhes</a>
                    <a href="#" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        </div>

        <!-- Repita os cards para cada sala -->
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Sala 02</h5>
                    <p class="card-text">Capacidade: 30 pessoas</p>
                    <a href="#" class="btn btn-primary">Detalhes</a>
                    <a href="#" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal para adicionar nova sala -->
<div class="modal fade" id="novaSalaModal" tabindex="-1" role="dialog" aria-labelledby="novaSalaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="salvar_sala.php" method="POST"> <!-- Ajuste para seu backend -->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="novaSalaModalLabel">Nova Sala</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="nomeSala">Nome da Sala</label>
              <input type="text" class="form-control" name="nomeSala" required>
            </div>
            <div class="form-group">
              <label for="capacidade">Capacidade</label>
              <input type="number" class="form-control" name="capacidade" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- JS do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
