<?php
include "./teste.php"; #Executa os comandos de qualquer forma, mesmo que aconteçam erros nos códigos, como um arquivo especificado que não exista.
require "./teste.php"; #Não executa nada caso o arquivo não exista/ esteja com erro.

include_once "./teste.php"; #Garante que o arquivo seja executado apenas uma vez
require_once "./teste.php"; #igualmente o include_once, mas nas funcionalidades do require

echo "Hello World!";
echo $nome;

?>