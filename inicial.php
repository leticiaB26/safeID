<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="sidebar.css"> <!-- Ou use <style> direto no sidebar.php -->
</head>
<body>
    <div class="content">
        <h2>Dashboard</h2>
        <canvas id="meuGrafico" width="400" height="200"></canvas>
    </div>

    <?php include 'sidebar.php'; ?>
        <div class="sidebar">
        <h2> SafeID</h2>
        <br>
        <br>
        <a href="inicial.php">Página inicial</a>
        <a href="salas.php">Salas</a>
        <a href="relatorios.php">Relatórios</a>
        <a href="usuarios.php">Usuarios</a>
        <a href="empresas.php">Empresas</a>
       
       
            <div class="logout">
                <a href="index.php">Sair</a>
            </div>
            <script>
    const ctx = document.getElementById('meuGrafico').getContext('2d');
    const meuGrafico = new Chart(ctx, {
        type: 'bar', // outros: line, pie, doughnut, etc.
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril'],
            datasets: [{
                label: 'Usuários Ativos',
                data: [12, 19, 7, 14],
                backgroundColor: '#32c045'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>



</body>
</html>
