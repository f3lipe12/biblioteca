<?php
require_once 'app/controllers/LivroController.php';

$controller = new LivroController();

if (isset($_GET['acao'])) {
    switch ($_GET['acao']) {
        case 'salvar':
            $controller->salvar();
            break;
        case 'listar':
            $controller->listar();
            break;
        case 'editar':
            $controller->editar();
            break;
        case 'excluir':
            $controller->excluir();
            break;
        default:
            include 'app/views/form.php'; 
            break;
    }
} else {
    include 'app/views/form.php'; 
}

