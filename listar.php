<?php
// mesmo diretorio
$diretorio = '.';

// array_diff - remove um valor do array
// array_slice - remove 2 posições no inicio do array, que são os pontos, para subir no diretorio linux
// scandir - lista o conteudo de um diretorio

$arquivos = array_diff(array_slice(scandir($diretorio), 2), ['listar.php']);
echo json_encode($arquivos);
