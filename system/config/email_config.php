<?php
//Define constants for email functionality
define('EMAIL_HOST', 'mail.melnikolaidis.eu');
define('EMAIL_USERNAME', 'info@melnikolaidis.eu');
define('EMAIL_PASSWORD', '!GVTqR%MqjA{');
define('EMAIL_RECIPIENT', 'melnikolaidis86@gmail.com');

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Instatiate Mailer class
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

// Server settings
$mail->SMTPDebug = 0;                                 // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = EMAIL_HOST;  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL_USERNAME;                 // SMTP username
$mail->Password = EMAIL_PASSWORD;                          // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->CharSet = 'UTF-8';                         // UTF-8 Encoding
