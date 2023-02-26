<?php
ini_set('listen', '8080');

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SERVER['REQUEST_URI'] == '/api/livros') {
    // Lógica para buscar todos os livros
    $livros = array(
        array('id' => 1, 'nome' => 'Guia dos mochileiros', 'content' => 'Obrigado pelos peixes.'),
        array('id' => 2, 'nome' => 'Harry Potter', 'content' => 'Avada Kedabra'),
        array('id' => 3, 'nome' => 'Pai Rico, Pai Pobre', 'content' => 'O segundo pai.')
    );
    header('Content-Type: application/json');
    echo json_encode($livros);
} else if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER['REQUEST_URI'] == '/api/livros') {
    // Lógica para criar um novo produto
    $livro = array('id' => 4, 'nome' => 'Dobre seus lucros', 'content' => 'Bla bla bla
    ');
    header('Content-Type: application/json');
    echo json_encode($livro);
} else {
    // Rota não encontrada
    header('HTTP/1.1 404 Not Found');
    exit();
}

var_dump($_SERVER['REQUEST_METHOD']);
var_dump("tes");