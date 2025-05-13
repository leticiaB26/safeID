<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        display: flex;
        height: 100vh;
    }

    .sidebar {
        width: 220px;
        background-color:rgb(24, 79, 116);
        color: white;
        display: flex;
        flex-direction: column;
        padding-top: 20px;
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .sidebar a {
        padding: 12px 20px;
        color: white;
        text-decoration: none;
        transition: background 0.3s;
    }

    .sidebar a:hover {
        background-color:rgb(119, 125, 131);
    }

    .content {
        margin-left: 220px; /* Deixa espaço para a sidebar à esquerda */
        padding: 30px;
        flex-grow: 1;
    }

    .logout {
        margin-top: auto;
        padding: 20px;
    }

    .logout a {
        color: white;
        text-align: center;
        display: block;
        text-decoration: none;
    }
</style>