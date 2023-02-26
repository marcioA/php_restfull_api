<?php
ini_set('listen', '8080');

$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$url_parts = parse_url($url);

$livros = array(
        array('id' => 1, 'nome' => 'Guia dos mochileiros', 'content' => 'Obrigado pelos peixes.'),
        array('id' => 2, 'nome' => 'Harry Potter', 'content' => 'Avada Kedabra'),
        array('id' => 3, 'nome' => 'Pai Rico, Pai Pobre', 'content' => 'O segundo pai.')
    );

if ($method == 'GET' ) {
    if($url_parts['path'] == '/api/livros/trecho' || $url_parts['path'] == '/api/livros/trecho'){
        $trechoBuscado = $_GET["texto"];
        echo $trechoBuscado;
        return;
    }

    if($url_parts['path']  == '/api/livros' || $url_parts['path']  == '/api/livros/'){
        // Lógica para buscar todos os livros
        header('Content-Type: application/json');
        echo json_encode($livros);
        return;
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($url_parts['path']  == '/api/livros'){
        // Lógica para criar um novo produto
        $livro = array('id' => 4, 'nome' => 'Dobre seus lucros', 'content' => 'Bla bla bla
        ');
        array_push($livros, $livro);
        header('Content-Type: application/json');
        echo json_encode($livro);
        return $livros;
    }
}else {
    // Rota não encontrada
    header('HTTP/1.1 404 Not Found');
    exit();
}