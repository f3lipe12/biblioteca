<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Livros</title>
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
            padding: 0 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            width: 100%;
            max-width: 900px;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 30px;
            width: 100%;
        }

        .card-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            width: 100%;
            max-width: 900px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 300px;
            padding: 20px;
            box-sizing: border-box;
            transition: none; 
        }

        .card h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #333;
        }

        .card p {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px; 
        }

        .card .actions {
            margin-top: 20px; 
            text-align: center;
        }

        .card .actions a {
            color: #fff; 
            background-color: #007BFF; 
            text-decoration: none;
            margin: 5px 20px;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .card .actions a:hover {
            background-color: #0056b3; 
            color: #fff;
        }

        .action-btn {
            display: block;
            text-align: center;
            color: #fff;
            background-color: #007BFF;
            text-decoration: none;
            font-size: 16px;
            margin-top: 30px;
            padding: 12px;
            border-radius: 8px;
            border: none;
            transition: background-color 0.3s ease;
            width: 300px;
            max-width: 100%;
        }

        .action-btn:hover {
            background-color: #0056b3;
            color: #fff;
        }

        @media (max-width: 600px) {
            .card-container {
                align-items: center;
            }

            .card {
                width: 100%;
            }

            .action-btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Livros Cadastrados</h1>
        <div class="card-container">
            <?php foreach ($livros as $livro): ?>
                <div class="card">
                    <h3><?= $livro['titulo'] ?></h3>
                    <p><strong>ISBN:</strong> <?= $livro['isbn'] ?></p>
                    <p><strong>Autor:</strong> <?= $livro['autor'] ?></p>
                    <div class="actions">
                        <a href="index.php?acao=editar&id=<?= $livro['id'] ?>">Editar</a>
                        <a href="index.php?acao=excluir&id=<?= $livro['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="index.php" class="action-btn">Cadastrar Novo Livro</a>
    </div>
</body>
</html>






