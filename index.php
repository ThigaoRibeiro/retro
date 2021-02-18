<?php

use Source\CRUD\Models;
use Source\CRUD\Models\UserModel;
use Source\Database\Connect;
require_once 'vendor/autoload.php';

$modelUser = new Models\UserModel();
$modelAddress = new Models\UserAddress();

$user = $modelUser;
$address = $modelAddress;


$user->bootstrap($_POST['nome'],$_POST['email'],$_POST['cpf']);
if(!$modelUser->find($user->email)){
    echo "<p class='trigger warning'>Cadastro</p>";
    $user->save();
} else {
    echo "<p class='trigger accept'>Read</p>";
    $user = $modelUser->find($user->email);
}
var_dump($user);




$address->bootstrap($user_id,$_POST['rua'],5,$_POST['complemento'],$_POST['bairro'],$_POST['cidade'],$_POST['cep'],$_POST['pontoReferencia'],$_POST['telefone']);
if(!$modelAddress->findTelefone($address->telefone)){
    echo "<p class='trigger warning'>Cadastro</p>";
    $address->save();
} else {
    echo "<p class='trigger accept'>Read</p>";
    $user = $modelUser->find($user->email);
}

var_dump($address);





var_dump($user_id);
//var_dump($user,$address);







