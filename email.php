<?php
    if(isset($_POST['email']) && !empty($_POST['email'])){

        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);

        $to = "contato@agencia3ps.com.br";
        $subject = "Contato - Site 3Ps";
        $body = "Nome: ". $nome . "\r\n".
                "Email: ".$email . "\r\n".
                "Mensagem: " . $mensagem;

        $header = "From:kaio.souza@agencia3ps.com.br"."\r\n".
                  "Reply-To:" . $email ."\r\n".
                  "X=Mailer:PHP" . phpversion();

        if(mail($to,$subject,$body,$header)){
            echo("Email enviado com sucesso!");
        }else {
            echo("Email não pode ser enviado");
        }
    }
?>