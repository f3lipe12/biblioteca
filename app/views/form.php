<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; 
            align-items: center;
            height: 100vh;
            color: #333;
        }


        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 900px; 
            margin-left: 20px; 
            margin-right: 20px; 
            box-sizing: border-box;
        }


        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px; 
        }


        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        input[type="date"]:focus {
            border-color: #007BFF;
            box-shadow: 0 0 6px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 15px;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            form {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div>
        <h1><?= isset($livro) ? 'Editar' : 'Cadastrar' ?> Livro</h1>
        <form action="index.php?acao=salvar" method="POST">
            <input type="hidden" placeholder="id" name="id" value="<?= $livro['id'] ?? '' ?>"><br><br>

            <label for="titulo">Título do Livro</label>
            <input type="text" id="titulo" name="titulo" placeholder="Título" value="<?= $livro['titulo'] ?? '' ?>" required><br><br>

            <label for="autor">Autor</label>
            <input type="text" id="autor" name="autor" placeholder="Autor" value="<?= $livro['autor'] ?? '' ?>" required><br><br>

            <label for="isbn">ISBN</label>
            <input type="number" id="isbn" name="isbn" placeholder="ISBN" value="<?= $livro['isbn'] ?? '' ?>" required><br><br>

            <button type="submit"><?= isset($livro) ? 'Atualizar' : 'Salvar' ?></button>
            <button type="button" onclick="window.location.href='index.php?acao=listar'">Ver Lista de Livros</button>
        </form>
    </div>
</body>
</html>



