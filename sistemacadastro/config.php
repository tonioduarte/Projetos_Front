<?php

$dbhost = "localhost";
$dbusername = 'root';
$dbpassword = '';
$dbname ='formularioantonio';

$conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

/* if($conexao->connect_errno)
    {
    echo "Erro";
}
else
    {
    echo "Conexão efeutada com sucesso!";
} */

?>