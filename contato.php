<?php



    $msg = '';
    
    //campos do formulario
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST['mensagem'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $segmento = $_POST['segmento'];
    $tamanhoempresa = $_POST['tamanho-empresa'];
    
        $email_remetente = "contato@epsoft.com.br"; // deve ser uma conta de email do seu dominio 
        $email_destinatario = "contato@epsoft.com.br"; // email que receberá as mensagens
        $email_recebidoDe = "$email";
        $email_assunto = "Envio do Formulário de Contato | Site EPSOFT"; // Este será o assunto da mensagem
        $email_conteudo = "FORMULÁRIO DE CONTATO\n"
            . "<br><b>De:</b> " . $nome
            . "<br><b>Email:</b> " . $email
            . "<br><b>Telefone:</b> " . $telefone
            . "<br><b>Assunto:</b> " . $assunto
            . "<br><b>Mensagem:</b> " . $mensagem
            . "<br><b>Empresa:</b> " . $empresa
            . "<br><b>Cargo:</b> " . $cargo
            . "<br><b>Segmento:</b> " . $segmento
            . "<br><b>Tamanho Empresa:</b> " . $tamanhoempresa
            . "<br><br>"
            . "<hr>"
            . "<br>Mensagem enviada do formulário de contato da demonstração de formulário de contato com php.";

        //encapsula os dados do cabeçalho do email
        $email_cabecalho = implode("\n", array("From: $email_remetente", "Reply-To: $email_recebidoDe", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
        
        //utiliza função nativa do php mail para o envio
        //valida se o email foi enviado
        if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_cabecalho)) {
            
            //mostra mensagem de envio com sucesso
            $msg = '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Mensagem enviada com sucesso!</strong> 
            </div>';

            sleep(3);
            header("Location: index.php");

        } else {

            //mostra mensagem de erro ao enviar
            $msg = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro ao enviar mensagem, tente novamente! </strong> 
            </div>';
            sleep(3);
            header("Location: index.php");
        }
        
    
        
    


        