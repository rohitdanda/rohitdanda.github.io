<?PHP
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['comments'];
$formcontent="From: $name \n Message: $comments";
$recipient = "rohitdanda@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
header("Location : index.html");
?>
