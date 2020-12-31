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
<font color="#000080" LANG="ZH-TW" face="新細明體">
        <?php if($msg) { echo $msg; } ?>
        <?php if(!$msg) { ?>
        &nbsp;&nbsp;&nbsp;&nbsp;我們很樂意回答你的問題, 請與我們聯絡。
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
        <td width="99%" height="55" colspan="2"><big><font color="#000080" LANG="ZH-TW" face="新細明體"><strong>
        商標註冊服務有限公司</strong></font></big></td>
      </tr>
      <tr>
        <td width="1%" height="19"></td>
        <td width="28%" height="19"><font color="#000080" face="新細明體">地址:</font></td>
        <td width="71%" height="19"><font color="#000080" face="PMingLiU">香港</font></td>
      </tr>
      <tr>
        <td width="1%" height="19"></td>
        <td width="28%" height="19"></td>
        <td width="71%" height="19"><font color="#000080" face="PMingLiU">中環 
        德輔道中 </font><font color="#000080"><span style="font-family: PMingLiU">39</span><span lang="ZH-TW" style="font-family: PMingLiU">號</span></font></td>
      </tr>
      <tr>
        <td width="1%" height="19"></td>
        <td width="28%" height="19"></td>
        <td width="71%" height="19"><font color="#000080">
        <span lang="ZH-TW" style="font-family: PMingLiU">永傑中心16樓A1室</span></td>
      </tr>
      <tr>
        <td width="1%" height="18"></td>
        <td width="28%" height="18"></td>
        <td width="71%" height="18"></td>
      </tr>
      <tr>
        <td width="1%" height="18"></td>
        <td width="28%" height="18"><font face="新細明體"><font color="#000080" LANG="ZH-TW">電話號碼</font><font color="#000080">:</font></font></td>
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
        <td width="28%" height="18"><font face="新細明體"><font color="#000080" LANG="ZH-TW">傳真號碼</font><big><font color="#000080">:</font></big></font></td>
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
        <td width="28%" height="18"><font face="新細明體"><font color="#000080" LANG="ZH-TW">電郵</font><big><font color="#000080">: </font></big></font></td>
        <td width="71%" height="18"><a href="mailto:info@trademark.com.hk" style="color: rgb(0,0,128)"><font color="#000080" face="新細明體"><small>info@trademark.com.hk</small></font></a></td>
      </tr>
      <tr>
        <td width="1%" height="17"></td>
        <td width="28%" height="17"></td>
        <td width="71%" height="17"></td>
      </tr>
      <tr>
        <td width="1%" height="1">　<p>　</td>
        <td width="28%" height="1"><font face="新細明體"><font color="#000080" LANG="ZH-TW">網上查詢</font><font color="#000080"><big>: </big><br>
        </font></font></td>
        <td width="71%" height="1"><font color="#000080" face="新細明體"><small>
        <font size="3">請填寫下列表格</font> 
        :</small><br>
        </font></td>
      </tr>
    </table>
    <form method="POST" target="_self" action="contactus.php" onSubmit="" webbot-action="--WEBBOT-SELF--">
      <!--webbot bot="SaveResults" s-email-format="TEXT/PRE" s-email-address="info@trademark.com.hk" b-email-label-fields="TRUE" s-builtin-fields="Date Time" u-confirmation-url="confirmation.htm" startspan --><input TYPE="hidden" NAME="VTI-GROUP" VALUE="0"><!--webbot bot="SaveResults" endspan i-checksum="6561" -->
      <input style="display: none" type="text" name="country" />
      <table border="0" cellpadding="0" cellspacing="0" width="100%" height="169">
        <tr>
          <td width="100%" height="26" colspan="2" bgcolor="#FFD9B3"><font face="新細明體">&nbsp; 
          </font><strong><font face="新細明體" color="#000080" LANG="ZH-TW">閣下的聯絡資料</font><font color="#000080" face="新細明體">:</font></strong></td>
        </tr>
        <tr>
          <td width="100%" colspan="2" height="18"></td>
        </tr>
        <tr>
          <td width="10%" height="28"><font face="新細明體"><font color="#000080" LANG="ZH-TW">姓名</font><font color="#000080">:</font></font></td>
          <td width="92%" height="28"><font color="#000080" face="新細明體"><small><input type="text" name="Name" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="10%" height="28"><font face="新細明體"><font color="#000080" LANG="ZH-TW">公司名稱</font><font color="#000080">:</font></font></td>
          <td width="92%" height="28"><font color="#000080" face="新細明體"><small><input type="text" name="Company" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="10%" height="28"><font color="#000080" LANG="ZH-TW" face="新細明體">電話號碼:</font></td>
          <td width="92%" height="28"><font color="#000080" face="新細明體"><small><input type="text" name="Telephone" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="10%" height="28"><font color="#000080" LANG="ZH-TW" face="新細明體">傳真號碼:</font></td>
          <td width="92%" height="28"><font color="#000080" face="新細明體"><small><input type="text" name="Fax" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="10%" height="1"><font face="新細明體"><font color="#000080" LANG="ZH-TW">電郵地址</font><font color="#000080">:</font></font></td>
          <td width="92%" height="1"><font color="#000080" face="新細明體"><small><input type="text" name="E_mail" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"></td>
        </tr>
        <tr>
          <td width="100%" height="24" colspan="2" bgcolor="#FFD9B3"><font face="新細明體">&nbsp; 
          <strong><font color="#000080" LANG="ZH-TW">問題╱意見等:</font></strong></font></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"><font color="#000080" face="新細明體"><small><textarea rows="3" name="questions" cols="27"></textarea></small></font></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"><font face="新細明體"><input type="submit" value="遞交" name="Submit" style="font-family: sans-serif"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" value="重新整理" name="Reset" style="font-family: sans-serif"></font></td>
        </tr>
        <tr>
          <td width="29%" height="18"></td>
          <td width="71%" height="18"></td>
        </tr>
      </table>
    </form>
    </td>
    <td width="16%"><p>　</td>
  </tr>
</table>
<?php } ?>
</body>
</html>