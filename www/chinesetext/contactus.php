<?php 

include_once('../inc/class.phpmailer.php');
include_once('../inc/text_format.php');
include_once('../inc/check_email.php');
include_once('../inc/email.php');

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
      $headers .= 'Content-type: text/html; charset=big5' . "\r\n";
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
<title>Contact Us</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">


<meta name="Microsoft Theme" content="none">
<meta name="Microsoft Border" content="none">
</head>

<body>

<p>
<font color="#000080" LANG="ZH-TW" face="�s�ө���">
        <?php if($msg) { echo $msg; } ?>
        <?php if(!$msg) { ?>
        &nbsp;&nbsp;&nbsp;&nbsp;�ڭַ̫ܼN�^���A�����D, �лP�ڭ��p���C
        <?php } ?>
</font><br>
</p>

<?php if(!$msg) { ?>
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: rgb(255,255,255); border-left: medium none rgb(255,255,255); border-right: medium none rgb(255,255,255); border-top: thin none rgb(0,0,128); border-bottom: thin none rgb(0,0,128)">
  <tr>
    <td width="7%"></td>
    <td width="60%">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" height="63">
      <tr>
        <td width="100%" height="1" colspan="3"></td>
      </tr>
      <tr>
        <td width="1%" height="55"></td>
        <td width="99%" height="55" colspan="2"><big><font color="#000080" LANG="ZH-TW" face="�s�ө���"><strong>
        �Ӽе��U�A�Ȧ������q</strong></font></big></td>
      </tr>
      <tr>
        <td width="1%" height="19"></td>
        <td width="28%" height="19"><font color="#000080" face="�s�ө���">�a�}:</font></td>
        <td width="71%" height="19"><font color="#000080" face="PMingLiU">����</font></td>
      </tr>
      <tr>
        <td width="1%" height="19"></td>
        <td width="28%" height="19"></td>
        <td width="71%" height="19"><font color="#000080" face="PMingLiU">���� 
        �w���D�� </font><font color="#000080"><span style="font-family: PMingLiU">39</span><span lang="ZH-TW" style="font-family: PMingLiU">��</span></font></td>
      </tr>
      <tr>
        <td width="1%" height="19"></td>
        <td width="28%" height="19"></td>
        <td width="71%" height="19"><font color="#000080">
        <span lang="ZH-TW" style="font-family: PMingLiU">�óǤ���16��A1��</span></td>
      </tr>
      <tr>
        <td width="1%" height="18"></td>
        <td width="28%" height="18"></td>
        <td width="71%" height="18"></td>
      </tr>
      <tr>
        <td width="1%" height="18"></td>
        <td width="28%" height="18"><font face="�s�ө���"><font color="#000080" LANG="ZH-TW">�q�ܸ��X</font><font color="#000080">:</font></font></td>
        <td width="71%" height="18"><font color="#000080" face="Arial"><small>
        (852) 2538 0452 </small></font></td>
      </tr>
      <tr>
        <td width="1%" height="19"></td>
        <td width="28%" height="19"></td>
        <td width="71%" height="19"></td>
      </tr>
      <tr>
        <td width="1%" height="18"></td>
        <td width="28%" height="18"><font face="�s�ө���"><font color="#000080" LANG="ZH-TW">�ǯu���X</font><big><font color="#000080">:</font></big></font></td>
        <td width="71%" height="18"><font color="#000080" face="Arial"><small>
        (852) 3914 9028 </small></font></td>
      </tr>
      <tr>
        <td width="1%" height="21"></td>
        <td width="28%" height="21"></td>
        <td width="71%" height="21"></td>
      </tr>
      <tr>
        <td width="1%" height="18"></td>
        <td width="28%" height="18"><font face="�s�ө���"><font color="#000080" LANG="ZH-TW">�q�l</font><big><font color="#000080">: </font></big></font></td>
        <td width="71%" height="18"><a href="mailto:info@trademark.com.hk" style="color: rgb(0,0,128)"><font color="#000080" face="�s�ө���"><small>info@trademark.com.hk</small></font></a></td>
      </tr>
      <tr>
        <td width="1%" height="17"></td>
        <td width="28%" height="17"></td>
        <td width="71%" height="17"></td>
      </tr>
      <tr>
        <td width="1%" height="1">�@<p>�@</td>
        <td width="28%" height="1"><font face="�s�ө���"><font color="#000080" LANG="ZH-TW">���W�d��</font><font color="#000080"><big>: </big><br>
        </font></font></td>
        <td width="71%" height="1"><font color="#000080" face="�s�ө���"><small>
        <font size="3">�ж�g�U�C���</font> 
        :</small><br>
        </font></td>
      </tr>
    </table>
    <form method="POST" target="_self" action="contactus.php" onSubmit="" webbot-action="--WEBBOT-SELF--">
      <!--webbot bot="SaveResults" s-email-format="TEXT/PRE" s-email-address="info@trademark.com.hk" b-email-label-fields="TRUE" s-builtin-fields="Date Time" u-confirmation-url="confirmation.htm" startspan --><input TYPE="hidden" NAME="VTI-GROUP" VALUE="0"><!--webbot bot="SaveResults" endspan i-checksum="6561" -->
      <input style="display: none" type="text" name="country" />
      <table border="0" cellpadding="0" cellspacing="0" width="100%" height="169">
        <tr>
          <td width="100%" height="26" colspan="2" bgcolor="#FFD9B3"><font face="�s�ө���">&nbsp; 
          </font><strong><font face="�s�ө���" color="#000080" LANG="ZH-TW">�դU���p�����</font><font color="#000080" face="�s�ө���">:</font></strong></td>
        </tr>
        <tr>
          <td width="100%" colspan="2" height="18"></td>
        </tr>
        <tr>
          <td width="10%" height="28"><font face="�s�ө���"><font color="#000080" LANG="ZH-TW">�m�W</font><font color="#000080">:</font></font></td>
          <td width="92%" height="28"><font color="#000080" face="�s�ө���"><small><input type="text" name="Name" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="10%" height="28"><font face="�s�ө���"><font color="#000080" LANG="ZH-TW">���q�W��</font><font color="#000080">:</font></font></td>
          <td width="92%" height="28"><font color="#000080" face="�s�ө���"><small><input type="text" name="Company" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="10%" height="28"><font color="#000080" LANG="ZH-TW" face="�s�ө���">�q�ܸ��X:</font></td>
          <td width="92%" height="28"><font color="#000080" face="�s�ө���"><small><input type="text" name="Telephone" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="10%" height="28"><font color="#000080" LANG="ZH-TW" face="�s�ө���">�ǯu���X:</font></td>
          <td width="92%" height="28"><font color="#000080" face="�s�ө���"><small><input type="text" name="Fax" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="10%" height="1"><font face="�s�ө���"><font color="#000080" LANG="ZH-TW">�q�l�a�}</font><font color="#000080">:</font></font></td>
          <td width="92%" height="1"><font color="#000080" face="�s�ө���"><small><input type="text" name="E_mail" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"></td>
        </tr>
        <tr>
          <td width="100%" height="24" colspan="2" bgcolor="#FFD9B3"><font face="�s�ө���">&nbsp; 
          <strong><font color="#000080" LANG="ZH-TW">���D���N����:</font></strong></font></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"><font color="#000080" face="�s�ө���"><small><textarea rows="3" name="questions" cols="27"></textarea></small></font></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"><font face="�s�ө���"><input type="submit" value="����" name="Submit" style="font-family: sans-serif"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" value="���s��z" name="Reset" style="font-family: sans-serif"></font></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"></td>
        </tr>
      </table>
    </form>
    </td>
    <td width="16%"><p>�@</td>
  </tr>
</table>
<?php } ?>
</body>
</html>