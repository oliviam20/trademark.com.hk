<?php 

include_once('inc/class.phpmailer.php');
include_once('inc/text_format.php');
include_once('inc/check_email.php');
include_once('inc/email.php');

if(isset($_POST['Submit'])) {
  if(!$_POST['country'] && !$_POST['VTI-GROUP']) {
      $to = "info@trademark.com.hk";
      $_POST['Name'] = $_POST['Name'] ? $_POST['Name'] : 'Anonymous';
      //$_POST['E_mail'] = $_POST['E_mail'] ? $_POST['E_mail'] : 'info@trademark.com.hk';
      //$to = "alcowebdesign@gmail.com";
      //$to = "bizarski@gmail.com";
      $topic = "New Message from ".$_POST['Name'];
      $body = "Name: ".$_POST['Name'];
      $body .= "<br />Company: ".$_POST['Company'];
      $body .= "<br />Telephone No.: ".$_POST['Telephone'];
      $body .= "<br />Fax No.: ".$_POST['Fax'];
      $body .= "<br />E-mail Address: ".$_POST['E_mail'];
      $body .= "<br /><br />Message: ".$_POST['questions'];
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
      if($_POST['E_mail']) {
        $headers .= $_POST['Name'] ? 'From: '.$_POST['Name'].' <'.$_POST['E_mail'].'>' : 'From: '.$_POST['E_mail'];
      } 
      if(mail($to, $topic, $body, $headers)) {
        $success = 1;
        $msg = "<strong>Thank you for contacting us!</strong><br /><br />";
      }
  }
}

?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Text - contact us</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">


<meta name="Microsoft Theme" content="none">
<meta name="Microsoft Border" content="none">
</head>

<body>

<p>
<font face="Arial" color="#000080"><small>
        <?php if($msg) { echo $msg; } ?>
        <?php if(!$msg) { ?>
        We are happy to answer your questions.&nbsp; We can be reached through<br>a number of ways:
        <?php } ?>
    </small></font><br>
</p>

<?php if(!$msg) { ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="423">
  <tr>
    <td width="16%" height="53"></td>
    <td width="62%" colspan="2" height="53"></td>
    <td width="22%" height="53"></td>
  </tr>
  <tr>
    <td width="16%" height="24"></td>
    <td width="62%" colspan="2" height="24"><big><strong><font face="Arial" color="#000080">Trademark</font><font face="Arial" color="#FF0000">.</font><font face="Arial" color="#000080">com Limited</font></strong></big></td>
    <td width="22%" height="24"></td>
  </tr>
  <tr>
    <td width="16%" height="19"></td>
    <td width="30%" height="19"></td>
    <td width="62%" height="19"></td>
    <td width="22%" height="19"></td>
  </tr>
  <tr>
    <td width="16%" height="14"></td>
    <td width="30%" height="14"><font face="Arial" color="#000080"><small><strong>Address:</strong></small></font></td>
    <td width="62%" height="14"><font face="Arial" color="#000080"><small>Suite 706, Wing On 
    Life Building,</small></font></td>
    <td width="22%" height="14"></td>
  </tr>
  <tr>
    <td width="16%" height="14"></td>
    <td width="30%" height="14"></td>
    <td width="62%" height="14"><small><font face="Arial" color="#000080">22 Des Voeux Road, 
    C.,</font></small></td>
    <td width="22%" height="14"></td>
  </tr>
  <tr>
    <td width="16%" height="13"></td>
    <td width="30%" height="13"></td>
    <td width="62%" height="13"><font face="Arial" color="#000080"><small>Central,</small></font></td>
    <td width="22%" height="13"></td>
  </tr>
  <tr>
    <td width="16%" height="10"></td>
    <td width="30%" height="10"></td>
    <td width="62%" height="10"><font face="Arial" color="#000080"><small>Hong Kong.</small></font></td>
    <td width="22%" height="10"></td>
  </tr>
  <tr>
    <td width="16%" height="27"></td>
    <td width="30%" height="27"></td>
    <td width="32%" height="27"></td>
    <td width="22%" height="27"></td>
  </tr>
  <tr>
    <td width="16%" height="18"></td>
    <td width="25%" height="18"><small><font face="Arial" color="#000080"><strong>Telephone 
    No.</strong>:</font></small></td>
    <td width="62%" height="18"><font face="Arial" color="#000080"><small>(852) 2538 0452 </small></font></td>
    <td width="22%" height="18"></td>
  </tr>
  <tr>
    <td width="5%" height="18"></td>
  </tr>
  <tr>
    <td width="16%" height="19"></td>
    <td width="25%" height="19"></td>
    <td width="62%" height="19"></td>
    <td width="22%" height="19"></td>
  </tr>
  <tr>
    <td width="16%" height="20"></td>
    <td width="25%" height="20"><font face="Arial" color="#000080"><small><strong>Fax No.</strong></small>:</font></td>
    <td width="62%" height="20"><font face="Arial" color="#000080"><small>
    (852) 3914 9028</small></font></td>
    <td width="22%" height="20"></td>
  </tr>
  <tr>
    <td width="16%" height="21"></td>
    <td width="25%" height="21"></td>
    <td width="62%" height="21"></td>
    <td width="22%" height="21"></td>
  </tr>
  <tr>
    <td width="16%" height="20"></td>
    <td width="25%" height="20"><font face="Arial" color="#000080"><small><strong>Email</strong></small>: 
    </font></td>
    <td width="62%" height="20"><a href="mailto:info@trademark.com.hk"><small><font face="Arial" color="#000080">info@trademark.com.hk</font></small></a></td>
    <td width="22%" height="20"></td>
  </tr>
  <tr>
    <td width="16%" height="18"></td>
    <td width="30%" height="18"></td>
    <td width="32%" height="18"></td>
    <td width="22%" height="18"></td>
  </tr>
  <tr>
    <td width="16%" height="34"></td>
    <td width="25%" height="34"><font face="Arial" color="#000080"><small><strong>Enquiry 
    Online</strong>:</small><br>
    </font></td>
    <td width="62%" height="34"><font face="Arial" color="#000080"><small>Please complete the 
    form below.</small><br>
    </font></td>
    <td width="22%" height="34"></td>
  </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: rgb(255,255,255); border-left: medium none rgb(255,255,255); border-right: medium none rgb(255,255,255); border-top: thin none rgb(0,0,128); border-bottom: thin none rgb(0,0,128)" height="445">
  <tr>
    <td width="13%" height="445"></td>
    <td width="60%" height="445">
    <form method="POST" id="text_contact_form" name="text_contact_form" target="_self" action="textcontact.php" onSubmit="" webbot-action="--WEBBOT-SELF--">
      <!--webbot bot="SaveResults" s-email-format="TEXT/PRE" s-email-address="info@trademark.com.hk" b-email-label-fields="TRUE" s-builtin-fields="Date Time" u-confirmation-url="textconfirmation.htm" startspan --><input TYPE="hidden" NAME="VTI-GROUP" VALUE="0"><!--webbot bot="SaveResults" endspan i-checksum="43374" -->
      <input style="display: none" type="text" name="country" />
      <table border="0" cellpadding="0" cellspacing="0" width="100%" height="133">
        <tr>
          <td width="100%" height="13" colspan="2" bgcolor="#FFD9B3">&nbsp; <font face="Arial" color="#000080"><strong>Your Contact Information:</strong></font></td>
        </tr>
        <tr>
          <td width="100%" colspan="2" height="18"></td>
        </tr>
        <tr>
          <td width="18%" height="28"><font face="Arial" color="#000080"><small>Name:</small></font></td>
          <td width="84%" height="28"><font face="Arial" color="#000080"><small><input type="text" name="Name" size="30" class="required"></small></font></td>
        </tr>
        <tr>
          <td width="18%" height="28"><font face="Arial" color="#000080"><small>Company:</small></font></td>
          <td width="84%" height="28"><font face="Arial" color="#000080"><small><input type="text" name="Company" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="18%" height="28"><font face="Arial" color="#000080"><small>Telephone No:</small></font></td>
          <td width="84%" height="28"><font face="Arial" color="#000080"><small><input type="text" name="Telephone" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="18%" height="28"><font face="Arial" color="#000080"><small>Fax No:</small></font></td>
          <td width="84%" height="28"><font face="Arial" color="#000080"><small><input type="text" name="Fax" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="18%" height="1"><font face="Arial" color="#000080"><small>E-mail Address:</small></font></td>
          <td width="84%" height="1"><font face="Arial" color="#000080"><small><input type="text" name="E_mail" size="30" class="email required"></small></font></td>
        </tr>
        <tr>
          <td width="37%" height="18"></td>
          <td width="63%" height="18"></td>
        </tr>
        <tr>
          <td width="100%" height="1" colspan="2" bgcolor="#FFD9B3">&nbsp; <font face="Arial" color="#000080"><strong>Your Questions/Comment etc.:</strong></font></td>
        </tr>
        <tr>
          <td width="37%" height="18"></td>
          <td width="63%" height="18"></td>
        </tr>
        <tr>
          <td width="37%" height="18"></td>
          <td width="63%" height="18"><font face="Arial" color="#000080"><small><textarea rows="5" name="questions" cols="27" class="required"></textarea></small></font></td>
        </tr>
        <tr>
          <td width="37%" height="18"></td>
          <td width="63%" height="18"></td>
        </tr>
        <tr>
          <td width="37%" height="18"></td>
          <td width="63%" height="18"><input type="submit" value="Submit" name="Submit" style="font-family: sans-serif"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" value="Reset" name="Reset" style="font-family: sans-serif"></td>
        </tr>
        <tr>
          <td width="37%" height="18"></td>
          <td width="63%" height="18"></td>
        </tr>
      </table>
    </form>
    <p align="right">¡@</td>
    <td width="7%" height="445"></td>
  </tr>
</table>
<?php } ?>
</body>
</html>