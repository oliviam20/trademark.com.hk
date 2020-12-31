<?PHP

function send_email($emailaddress, $mailtopic, $mailbody, $from_email="noreply@trademark.com.hk", $from_name="Trademark.com Limited", $nameto="Trademark.com Customer") { 
  
    $mail             = new PHPMailer();
  
    $mail->SetFrom($from_email, $from_name);

    $mail->Subject    = stripslashes(strip_tags($mailtopic));
    
    $body             = stripslashes($mailbody);

    $mail->AltBody    = stripslashes(strip_tags(br2nl($mailbody)));

    $mail->MsgHTML($body);

    if($emailaddress) { 
        $mail->AddAddress($emailaddress, $nameto);
        if($mail->Send()) {
            return true;
        } else {
            return false;
        }
    }

}

?>