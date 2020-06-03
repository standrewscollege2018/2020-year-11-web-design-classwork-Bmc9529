<?php
// https://meetanshi.com/blog/send-mail-from-localhost-xampp-using-gmail/

$to_email = "1q2w3308@gmail.com";
$subject = "Email Test php thing";
$body = "Hi,$to_email This is test email send by PHP Script";
$headers = "From: sender\'s email";
mail($to_email, $subject, $body, $headers);
echo "sent to $to_email";
mail("1q2w3308@gmail.com","Hello","HELLO THIS IS TEST TIME","From: sender\'s email");

for ($x = 0; $x <= 5; $x++) {
  mail($to_email, $subject, $body, $headers);
}
for ($x = 0; $x <= 5; $x++) {
  mail("1q2w3308@gmail.com","Hello","HELLO THIS IS TEST TIME","From: sender\'s email");
}
echo "sent to $to_email";
?>
