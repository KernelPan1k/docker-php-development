<?php
$to      = 'personne@example.com';
$subject = 'The subject';
$message = 'Hi !';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "Email send";
} else {
    echo "Fail";
}

?>

<ul>
    <li><a href="http://127.0.0.1:1080" target="_blank">Mail DEV</a></li>
</ul>
