<?php
error_reporting(0);
$mainemail = "anghelescu.andrei.gabriel@gmail.com,conversii@happy-media.ro";

$name		= $_POST['name'];
$email  	= $_POST['email'];
$subject	= 'Formular Pagina Rezervari';

$message =  "<table><tr><td>Nume: </td><td>" . $_POST['name'] . "</td></tr>" . 
            "<tr><td>Numar invitati: </td><td>" . $_POST['invitati'] . "</td></tr>" .
            "<tr><td>Data: </td><td>" . $_POST['data'] . "</td></tr>" .
            "<tr><td>Telefon: </td><td>" . $_POST['phone'] . "</td></tr>" ;

$mailinfo  = "MIME-Version: 1.0\r\n";
$mailinfo .= "Content-type: text/html; charset=utf-8\n";
$mailinfo .= "From: contact@turnuldeapa.ro \r\n";
$mailinfo .= "Reply-To: $name <$email>\r\n";

$mail = mail($mainemail, $subject ,$message, $mailinfo);

if($mail){
    echo "<span>Mesajul a fost trimis!</span>";
}
else{
    echo "<span>Eroare! incearca din nou mai tarziu.</span>";
}

    header('Location: thank-you.html');
?>
