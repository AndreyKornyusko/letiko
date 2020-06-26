<?php

if($isset($_POST['submit']))
{
$mailFrom = $_POST['themail'];
$message = $_POST['themessage'];

$mailTo = "kap86@ukr.net";
$headers =  "From: ".$mailFrom;

mail($mailTo,  $message, $headers);

header("Location: index.htm");
}

// if(isset($_POST['submit'])){
// $to = "kap86@ukr.net";; // Здесь нужно написать e-mail, куда будут приходить письма
// $from = $_POST['themail']; // this is the sender's Email address
// // $first_name = $_POST['first_name'];
// $email = $_POST['themail'];

// $subject = "Форма отправки сообщений с сайта";
// $subject2 = "Copy of your form submission";
// $message = $email . " оставил сообщение:" . "\n\n" . $_POST['themessage'];
// $message2 = "Here is a copy of your message " . $email . "\n\n" . $_POST['themessage'];

// $headers = "From:" . $from;
// $headers2 = "From:" . $to;

// mail($to,$subject,$message,$headers);
// // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
// echo "Сообщение отправлено. Спасибо Вам " . $email . ", мы скоро свяжемся с Вами.";
// // echo "<br /><br /><a href='https://epicblog.net'>Вернуться на сайт.</a>";

// }

?>



