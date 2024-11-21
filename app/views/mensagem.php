<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Operação Concluída</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            color: #333;
            text-align: center;
            padding: 0 20px;
        }

        h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 30px;
        }

        .action-btn {
            display: inline-block;
            color: #fff;
            background-color: #007BFF; 
            text-decoration: none;
            font-size: 16px;
            margin-top: 20px;
            padding: 12px;
            border-radius: 8px;
            border: none;
            transition: background-color 0.3s ease;
            width: 300px;
            max-width: 100%;
        }

        .action-btn:hover {
            background-color: #0056b3; 
        }

        @media (max-width: 600px) {
            .action-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Operação realizada com sucesso!</h1>
    <a href="index.php" class="action-btn">Cadastrar Novo Livro</a>
    <a href="index.php?acao=listar" class="action-btn">Ver Lista de Livros</a>
</body>
</html>
