<?php	
$recnome=$_POST["fname"];
$recemail=$_POST["femail"];
$recmsg=$_POST["fmsg"];

//criando um assunto

$assunto="Contato via site";

//configurando a mensagem
$mensagem="
<h2 align='center'>Contato Site Morena Rosa</h2>	
<br><br>
<p><b>Nome:  </b>$recnome</p>
<p><b>E-mail:  </b>$recemail</p>
<p><b>Mensagem:  </b>$recmsg</p>
";


//defindo destinatario
$destinatario="lu.palma.silva@gmail.com";


//configuracao do envio

$headers="MIME-Version:1.1\r\n";
$headers.="Content-type:text/html; charset=utf-8\r\n";
$headers.="From: lu.palma.silva@gmail.com\r\n";//email que envia
$headers.="Return-Path: lu.palma.silva@gmail.com\r\n"; //email de resposta

//comando de envio

$envio=mail($destinatario,$assunto,$mensagem,$headers);

//tratando uma resposta

if($envio){
	echo"
		<script>
			alert('Mensagem enviada com sucesso!')
			window.location=index.php
		</script>
	"
}
?>