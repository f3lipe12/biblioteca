<?php
require_once __DIR__ . '/../models/Livro.php';

class LivroController {
    public function salvar() {
        $titulo = $_POST['titulo'] ?? '';
        $isbn = $_POST['isbn'] ?? '';
        $autor = $_POST['autor'] ?? '';
        $id = $_POST['id'] ?? '';
        $mensagem = "";
    
        if ($id != '') {
            $resultado = Livro::atualizar($id, $titulo, $isbn, $autor);
            if ($resultado) {
                $mensagem = "Livro atualizado com sucesso!";
            } else {
                $mensagem = "Erro ao atualizar o livro.";
            }
        } else {
            $resultado = Livro::inserir($titulo, $isbn, $autor);
            if ($resultado) {
                $mensagem = "Livro inserido com sucesso!";
            } else {
                $mensagem = "Erro ao inserir o livro.";
            }
        }
    
        require_once __DIR__ . '/../views/form.php';
        echo "<script type='text/javascript'>alert('$mensagem');</script>";
    }

    public function listar() {
        $livros = Livro::listar();
        require_once __DIR__ . '/../views/listar.php';
    }

    public function editar() {
        $livro = Livro::buscarPorId($_GET['id']);
        require_once __DIR__ . '/../views/form.php';
    }

    public function excluir() {
        Livro::excluir($_GET['id']);
        require_once __DIR__ . '/../views/mensagem.php';
    }
}
?>

