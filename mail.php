<?php

$dest = "fabiopinheirosilvaa@gmail.com";
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

    $headers = "MIME-Version: 1.1\r\n";
    $headers .= "From: Contato - Site <" . $dest . ">\r\n" . "X-Mailer PHP/" . phpversion() . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "Return-Path: " . $nome . " <" . $mail . ">\n";
    $headers .= "Replay-To: " . $email ."\n";
    $to = "Contato - Orçamento <" . $dest . ">";
    $subject = " Contato - Site - Meu Site";

    $conteudo .= "
                    <h3> Contato enviado pelo site</h3>
                    Nome: " . $nome . " <br />    
                    E-mail: " . $email . " <br />    
                    Telefone: " . $telefone . " <br />    
                    Mensagem: " . $mensagem . " <br />    
                "; 

    $envio = mail($to, $subject, $conteudo, $headers);

    if ($envio) {
        ?>
            <script>
                alert("enviado com sucesso!")
                history.go(-1);
            </script>
        <?php
    } else {
        ?>
            <script>
                alert("Ocorreu um erro, tente novamente ou entre em contato com o administrador!")
                history.go(-1);
            </script>
        <?php
    }


?>