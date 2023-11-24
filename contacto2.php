
<?php 

/*$_POST en PHP es una variable superglobal que se utiliza para recopilar
datos de un formulario HTML y enviarlos a un script de PHP. Los datos
recopilados son enviados al servidor mediante el método POST.
*/
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$celular = $_POST['celular'];
$mensaje = $_POST['mensaje'];


//echo $correo . " " . $nombre . " " . $mensaje;

//Destinatario, aqui se coloca el correo configurado en mi hosting
$destinatario = "daniel.paredes@tvtotal.cl";
$asunto = "Envio de correo"; 

//$cuerpo, definimos el mormato que mostraremos cuando se reciba el correo.
$cuerpo = '
    <html> 
        <head> 
            <title>Solicitud de Contacto</title> 
        </head>

        <body>             
            <h1>Solicitud de contacto !  </h1>
            <p>                 
                Contacto:  '.$nombre .' <br>
                <br>
                Mensaje: '.$mensaje.' <br>
                <br>
                Celular: '.$celular.' <br>
            </p> 
        </body>
    </html>
';

//para el envío en formato HTML 
/*
MIME es un estándar de correo electrónico utilizado para transmitir 
los siguientes tipos de contenido mediante SMTP: Mensajes de texto 
sin formato. Mensajes de contenido alternativo
(p. ej., texto sin formato y HTML)
MIME-Version: 1.0 indica al programa de correo que se trata de un mensaje
en dicho formato (es decir, que se ajusta a lo señalado en la RFC 1521.
Content-Type: Indica que tipo de datos contiene el mensaje. Pueden 
encontrarse los siguientes: text/plain = solo texto.
*/
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 

//dirección del remitente

$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

//header() es usado para enviar encabezados HTTP sin formato. 
/*
El segundo caso especial es el encabezado "Location:" No solamente 
envía el encabezado al navegador, sino que también devuelve el 
código de status (302) REDIRECT al navegador a no ser que el código
 de status 201 o 3xx ya haya sido enviado.
*/

header("Location: Mensaje1.html"); 

?> 

   



