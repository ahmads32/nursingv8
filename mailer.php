 <?php
$recepient = "bobrovskyi7@gmail.com";
$sitename = "U of T - AC Landing";

$name = trim($_POST["first-name"]);
$surname = trim($_POST["last-name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$message_text = trim($_POST["message_text"]);
$message = "First name: $name \nLast name: $surname \nPhone: $phone \nE-mail: $email \nMessage: $message_text";

$pagetitle = "Message from \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>
