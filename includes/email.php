<?php

require_once 'dbh.inc.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'jienseng0701@gmail.com';                     // SMTP username
    $mail->Password   = 'osah jwcx khmf itga';                         // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreply@example.com', 'Inventory System');
    $mail->addAddress('jienseng0701@gmail.com');                // Add a recipient

    session_start();

    // CSS styles
    $css = "
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        .img-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .item-img {
            width: 150px;
        }
    </style>
    ";

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'AIROST INVENTORY SYSTEM - REQUEST CONFIRMATION';

    // Email body with CSS styles
    $mail->Body    = "
    <html>
    <head>
        <title>Inventory System - Request Confirmation</title>
        $css
    </head>
    <body>
        <p>Dear user,</p>
        <p>Thank you for your request. Here is the list of items:</p>
        <table>
            <tr>
                <th style='width: 400px;'>Name of Items</th>
                <th>Quantity</th>
            </tr>";
    ob_start(); // Start output buffering
    include 'email_item_gen.php'; // Include the file
    $mail->Body .= ob_get_clean(); // Append the output of the included file and clear the buffer

    $mail->Body .= "
        </table>
        <p>An email will be sent to you once your request has been processed successfully. Additionally, you can check the status of your items on our website under the 'Profile' section.</p>
        <p>For any inquiries, please contact us.</p>
        <p>Best regards,<br>UTM AIROST Inventory System Team</p>
    </body>
    </html>";

    $mail->SMTPDebug = 0; // SMTP Debug purposes: 0=>no display, 2=>display debug
    $mail->Debugoutput = 'html'; // Outputs debug info in HTML

    $mail->send();
    echo "Confirmation email sent successfully.";
} catch (Exception $e) {
    echo "Failed to send confirmation email. Error: {$mail->ErrorInfo}";
}


// Steps in configuring email:
// 1. Google account setting => security
// 2. Go to two step verification, then scroll down find app password
// 3. Type in "PHPMailer", then copy the password and insert into line 21.
// Eg.     $mail->Password   = 'osah jwcx khmf itga'; 
?>


