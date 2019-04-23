<?php

$login=$_POST['login'];
$senha=$_POST['senha'];

echo "$login e $senha";
if ($login == "funcionario@admin.com" && $senha=='123'){
    header('Location: Telaprincipal.html');

}else{
    echo "login e senha invalidos";
    echo '<a href=login.html>Voltar</a>';
}