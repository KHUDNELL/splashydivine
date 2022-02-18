<?php
$toEmail = ["splashydivine@gmail.com", "ken@intandeminc.com"];
$mailHeaders = "New Message from SplashyDivine.com" . "\r\n\r\n" . "From: " . $_POST["userName"] . "Email: <". $_POST["userEmail"] .">\r\n";
$message = $_POST["content"];

$honeypot = FALSE;
if (!empty($_REQUEST['contact_me_by_fax_only']) && (bool) $_REQUEST['contact_me_by_fax_only'] == TRUE) {
    $honeypot = TRUE;
    log_spambot($_REQUEST);
    # treat as spambot
} else {
    foreach ($toEmail as $email) {
        mail($email, $message, $mailHeaders, $message);

        }
        print "<p class='success'>Message Sent. Thanks!</p>";
        
    }


    /*if(mail($email, $_POST["content"], $mailHeaders, $message )) {
        print "<p class='success'>Message Sent. Thanks!</p>";
        } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
        }
*/
?>