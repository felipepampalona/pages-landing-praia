<?php
//phpinfo();
$quebra_linha = "\n";
$emailsender = "contato@construtorasaofrancisco.com.br";
 $assunto = "Disparo teste landing page";
 $mensagemHTML= "disparo de teste! para landing Page!";
$headers = 'MIME-Version: 1.0' . $quebra_linha;
                        $headers .= 'Content-type: text/html; charset=UTF-8' . $quebra_linha;
                        $headers .= 'From:' . $emailsender . $quebra_linha;
                        $headers .= 'return-path: ' . $emailsender . $quebra_linha;
                        $headers .= 'Cc: ' . $comcopia . $quebra_linha;
                        $headers .= 'reply-to: contato@construtorasaofrancisco.com.br';
                        mail('felipepampalona@gmail.com', $assunto, $mensagemHTML, $headers, "-r" . $emailsender);
/*$message = 'disparo de teste! para landing Page!';
mail('contato@construtorasaofrancisco.com.br', 'felipepampalona@gmail.com', $message);
https://webdevacademy.com.br/tutoriais/validacao-formularios-bootstrap-validator/
*/