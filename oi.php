<?php
// Recipient
$to_email = "contato@epsoft.com.br";

// Sender
$from_email = "contato@epsoft.com.br";

// Subject
$subject = "Test Email";

// Message
$message = "This is a test email sent from PHP.";

// Headers
$headers = "From: $from_email\r\n";
$headers .= "Reply-To: $from_email\r\n";
$headers .= "Content-type: text/html\r\n";

// Send email
if (mail($to_email, $subject, $message, $headers)) {
    echo "Email sent successfully to $to_email";
} else {
    echo "Email sending failed...";
}
?>
