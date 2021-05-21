<?php
include "conecao.php";
$full_name =$_POST["full_name"];
$email_address =$_POST["endereco"];
$message=$_POST["message"];

$query ="insert into contatos (full_name, email_address,message) value(?,?,?)";
$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt,  "sss", $full_name, $email_address, $message);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

echo "Dados inseridos com sucesso!";
?>