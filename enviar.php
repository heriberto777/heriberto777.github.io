<?php 
if(isset($_POST['submit'])){
    $to = "heriberto777@gmail.com"; // this is your Email address
    $from = $_POST['txCorreo']; // this is the sender's Email address
    $nombre = $_POST['txNombre'];
    $subject = "Aguaita! Me Escribieron";
    $subject2 = "CIGUADR Blog Pages";
    $message = $nombre . " wrote the following:" . "\n\n" . $_POST['txComentario'];
    $message2 = "Here is a copy of your message " . $nombre . "\n\n" . $_POST['txComentario'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $nombre . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>