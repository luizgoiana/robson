<?php

$nome = $_POST['nome'];
$mail = $_POST['email'];
$men = $_POST['mensagem'];
$tel = $_POST['tel'];
$assunto = $_POST['assunto'];

$corpo = "<font face='Verdana' size='1'><b>Nome:</b> \t" . $nome . "</font><br/>";
$corpo .= "<font face='Verdana' size='1'><b>Email:</b> \t" . $mail . "</font><br/>";
$corpo .= "<font face='Verdana' size='1'><b>Tel:</b> \t" . $tel . "</font><br/>";
$corpo .= "<font face='Verdana' size='1'><b>Assunto:</b> \t" . $Assunto . "</font><br/>";
$corpo .= "<font face='Verdana' size='1'><b>Mensagem:</b> \t" . $men . "</font>";


$assunto = "Contato Site";
$destinatario = "robson@santiagoadv.com.br";

$headers = "MIME-Version: 1.0\n";
$headers .= "From: " . $remetente . "\n Contato site \r\n";
$headers .= "Content-type: text/html; charset=utf-8";

if (!mail($destinatario, $assunto, $corpo, $headers)) {
    echo "Erro ao enviar mensagem";
} else {
    echo "Mensagem enviada com sucesso";
}
?>