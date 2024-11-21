<?php
require_once 'config/conexao.php';

class Livro {
    public static function listar() {
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM livros");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscarPorId($id) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("SELECT * FROM livros WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function inserir($titulo, $isbn, $autor) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("INSERT INTO livros (titulo, isbn, autor) VALUES (?, ?, ?)");
        return $stmt->execute([$titulo, $isbn, $autor]);
    }

    public static function atualizar($id, $titulo, $isbn, $autor) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("UPDATE livros SET titulo = ?, isbn = ?, autor = ? WHERE id = ?");
        return $stmt->execute([$titulo, $isbn, $autor, $id]);
    }

    public static function excluir($id) {
        $con = Conexao::conectar();
        $stmt = $con->prepare("DELETE FROM livros WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
