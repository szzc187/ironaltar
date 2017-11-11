
<?php 
if($_POST){
    $email = "poczta@etronik.pl";
    $to = $email; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Zapytanie z WWW";
    $subject2 = "Potwierdzenie wysłania zapytania do IRON ALTAR";
    $to2 = "Iron Altar<$email>";


    $name =  $_POST['name'];
    $number =  $_POST['number'];
    if($number == null || $number == ""){
        $number = "Nie podano numeru";
    }
    if($from == null || $from == ""){
        $from = "Nie podano adresu e-mail";
    }
    $message = "Imię: " . $name ."<br>Nr tel: ". $number ."<br>E-mail: ". $from ."<br>". $_POST['message'];
    $message2 = "Dziękujemy " . $name . ", wkrótce się skontaktujemy";
   

    if($from == "Nie podano adresu e-mail"){
        $from = "brak@adresu.email";
            }

    $headers =
    'Content-Type:text/html;charset=UTF-8' . "\r\n" .
   'From:' . $from . "\r\n" .
   'Reply-To:'.$from . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

    $headers2 =
    'Content-Type:text/html;charset=UTF-8' . "\r\n" .
   'From:' . $to2 . "\r\n" .
   'Reply-To:'.$to2 . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>