<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro - SafeID</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .table-section {
            margin-bottom: 50px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .actions {
            margin-top: 10px;
        }

        .actions button {
            padding: 8px 15px;
            margin-right: 10px;
            background-color: #4682B4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .actions button:hover {
            background-color: #3b6f9e;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #000;
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <div class="content">
        <h2>Cadastro</h2>

        <div class="table-section">
            <h3>Salas Cadastradas</h3>
            <table>
                <thead>
                    <tr>
                        <th>Bloco</th>
                        <th>Número</th>
                        <th>Andar</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dados das salas serão carregados aqui via PHP -->
                </tbody>
            </table>
            <div class="actions">
                <button onclick="alert('Função de edição não implementada')">Editar</button>
                <button onclick="document.getElementById('modalSala').style.display='block'">Adicionar Nova Sala</button>
            </div>
        </div>

        <div class="table-section">
            <h3>Funcionários Cadastrados</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Função</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Dados dos funcionários serão carregados aqui via PHP -->
                </tbody>
            </table>
            <div class="actions">
                <button onclick="alert('Função de edição não implementada')">Editar</button>
                <button onclick="alert('Formulário de novo funcionário em construção')">Adicionar Novo Funcionário</button>
            </div>
        </div>
    </div>

    <!-- Modal Sala -->
    <div id="modalSala" class="modal">
        <div class="modal-content">
            <span class="close" onclick="document.getElementById('modalSala').style.display='none'">&times;</span>
            <h3>Cadastrar Nova Sala</h3>
            <form action="salvar_sala.php" method="POST">
                <label for="bloco">Bloco:</label>
                <input type="text" name="bloco" id="bloco" required>

                <label for="numero">Número da Sala:</label>
                <input type="text" name="numero" id="numero" required>

                <label for="andar">Andar:</label>
                <input type="text" name="andar" id="andar" required>

                <br><br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

    <script>
        window.onclick = function(event) {
            const modal = document.getElementById('modalSala');
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
