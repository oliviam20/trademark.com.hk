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
      //$to = "daviwong88@yahoo.com.hk";
      //$to = "bizarski@gmail.com";
      $topic = "New Order from ".$_POST['Name'];
      $body = "Name: ".$_POST['Name'];
      $body .= "<br />Company: ".$_POST['Company'];
      $body .= "<br />Telephone No.: ".$_POST['Telephone'];
      $body .= "<br />Fax No.: ".$_POST['Fax'];
      $body .= "<br />E-mail Address: ".$_POST['E_mail'];
      $body .= "<br />Services: ".implode(', ', $_POST['services']);
      if($_POST['others']) { $body .= "<br />Other Services: ".$_POST['other']; }
      $body .= "<br /><br />Company Name (English): ".$_POST['co_eng'];
      $body .= "<br />Company Name (Chinese): ".$_POST['co_chinese'];
      $body .= "<br />Registered Address: ".$_POST['Reg_address'];
      $body .= "<br />Type of Incorporation: ".$_POST['type_corporation'];
      $body .= "<br />Country of Incorporation: ".$_POST['country_corporation'];
      $body .= "<br /><br />Countries in which you wish to register: ".$_POST['countries_to_register'];
      $body .= "<br />Desired class of registration: ".$_POST['class'];
      $body .= "<br />Goods/service details: ".$_POST['specification'];
      $body .= "<br /><br />Questions/comments: ".$_POST['questions'];
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
<title>text - order online</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">


<meta name="Microsoft Theme" content="none">
<meta name="Microsoft Border" content="none">
</head>

<body>

<p>
<font face="Arial" color="#000080"><small>
        <?php if($msg) { echo $msg; } ?>
        <?php if(!$msg) { ?> &nbsp; Please fill in your information 
    below. &nbsp; We shall contact you shortly.
    <?php } ?>
    </small></font><br>
</p>
<?php if(!$msg) { ?> 
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td width="6%"></td>
    <td width="84%">
    <form method="POST" id="text_order_form" name="text_order_form" target="_self" action="textordertm.php" onSubmit="" webbot-action="--WEBBOT-SELF--">
      <!--webbot bot="SaveResults" s-email-format="TEXT/PRE" s-email-address="info@trademark.com.hk" b-email-label-fields="TRUE" s-builtin-fields="Date Time" u-confirmation-url="confirmation01.htm" startspan --><input TYPE="hidden" NAME="VTI-GROUP" VALUE="0"><!--webbot bot="SaveResults" endspan i-checksum="43374" -->
      <input style="display: none" type="text" name="country" />
      <table border="0" cellpadding="0" cellspacing="0" width="82%" height="369">
        <tr>
          <td width="100%" colspan="2" bgcolor="#FFD9B3" height="21"><font face="Arial" color="#000080"><strong>&nbsp; Your Contact Information:</strong></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="33%" height="25"><font face="Arial" color="#000080"><small>Name:</small></font></td>
          <td width="67%" height="25"><font face="Arial" color="#000080"><small><input type="text" name="Name" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="33%" height="25"><font face="Arial" color="#000080"><small>Company:</small></font></td>
          <td width="67%" height="25"><font face="Arial" color="#000080"><small><input type="text" name="Company" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="33%" height="1"><font face="Arial" color="#000080"><small>Telephone No:</small></font></td>
          <td width="67%" height="1"><font face="Arial" color="#000080"><small><input type="text" name="Telephone" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>Fax No:</small></font></td>
          <td width="67%" height="18"><font face="Arial" color="#000080"><small><input type="text" name="Fax" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>E-mail Address:</small></font></td>
          <td width="67%" height="18"><font face="Arial" color="#000080"><small><input type="text" name="E_mail" size="30"></small></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="100%" colspan="2" bgcolor="#FFD9B3" height="21"><font face="Arial" color="#000080"><strong>&nbsp; Choice of Trademark Services:</strong></font></td>
        </tr>
        <tr>
          <td width="100%" colspan="2" bgcolor="#FFFFFF" height="21"></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>
          Please select</small></font></td>
          <td width="67%" height="18"><select name="services[]" size="5" multiple style="color: rgb(0,0,128); font-family: Arial, Times New Roman">
            <option selected value="Trademark Search &amp; Registration">Search &amp; Registration</option>
            <option value="Registration only">Registration only (Search not required)</option>
            <option value="Renewal of Registration">Renewal of Registration</option>
            <option value="Assignment">Assignment</option>
            <option value="Change of name/address of registrant">Change of Name/Address of Registrant</option>
            <option value="Reissue of Registration Certificate">Reissue of Registration Certificate</option>
            <option value="Removal of Registration">Removal of Registration</option>
            <option value="Obtaining Certified Copies">Obtaining Certified Copies</option>
            <option value="Raising an Opposition">Raising an Opposition</option>
            <option value="Recording of License Contract">Recording of License Contract</option>
            <option value="Review on Refusal">Review on Refusal</option>
            <option value="Review on the Decision of Opposition">Review on the Decision of Opposition</option>
            <option value="Adjudication on Dispute">Adjudication on Dispute</option>
            <option value="Applying for Cancellation of Registration">Applying for Cancellation of Registration</option>
            <option value="Review on Refusal of Assignment">Review on Refusal of Assignment</option>
            <option value="Review on Refusal of Renewal">Review on Refusal of Renewal</option>
          </select></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="33%" height="18"><input type="checkbox" name="others" value="Others"><font face="Arial"><small><font color="#000080">&nbsp; Others</font>:</small></font></td>
          <td width="67%" height="18"><textarea rows="2" name="other" cols="30"></textarea><font face="Arial" color="#000080"><br>
          <small><small><small><small>Please specify</small></font><font color="#0000FF" face="Arial">&nbsp;</small>&nbsp;</font></small></small></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2"></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2" bgcolor="#FFD9B3"><font face="Arial" color="#000080"><strong>&nbsp; Applicant's Details:</strong></font></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2"></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>Company name:</small><br>
          <small>(i<small>n English)</small></small></font></td>
          <td width="67%" height="18"><small><font face="Arial" color="#000080"><input type="text" name="co_eng" size="30"></font></small></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>Company name:</small><br>
          <small><small>(in Chinese)</small></small></font></td>
          <td width="67%" height="18"><small><font face="Arial" color="#000080"><input type="text" name="co_chinese" size="30"></font></small></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>Registered Address:</small></font></td>
          <td width="67%" height="18"><font face="Arial" color="#000080"><small><textarea rows="3" name="Reg_address" cols="30"></textarea></small></font></td>
        </tr>
        <tr>
          <td width="33%" height="25"></td>
          <td width="67%" height="25"></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>Type of</small> <small>Incorporation:</small></font></td>
          <td width="67%" height="18"><font face="Arial" color="#000080"><select name="type_corporation" size="1" style="color: rgb(0,0,128); font-family: Arial, Times New Roman">
            <option value="Limited Company">Limited Company</option>
            <option value="Partnership &amp; Sole Proprietor">Partnership</option>
            <option value="Sole Propreitor">Sole Proprietor</option>
            <option value="BVI Company">BVI Company</option>
            <option value="Company of other jurisdiction">Company of other country</option>
          </select></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>Country of</small><br>
          <small>Incorporation:</small></font></td>
          <td width="67%" height="18"><font face="Arial" color="#000080"><input type="text" name="country_corporation" size="30"></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2" bgcolor="#FFD9B3"><font face="Arial" color="#000080"><strong>&nbsp; Trademark Details:</strong></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>Countries in </small><br>
          <small>which you</small><br>
          <small>wish to</small> <small>register:</small></font></td>
          <td width="67%" height="18"><font face="Arial" color="#000080"><input type="text" name="countries_to_register" size="30"></font></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2"></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>Desired class of 
          registration:</small></font></td>
          <td width="67%" height="18"><input type="text" name="class" size="15"><small><small><font color="#0000FF" face="Arial"> &nbsp; </font><font face="Arial" color="#000080">(class no. 
          1 - 45)</font></small></small></td>
        </tr>
        <tr>
          <td width="132%" height="33" colspan="2"><font face="Arial" color="#000080"><small><small><small>Please 
          <a style="color: rgb(0,0,128)" href="textintcls01.htm">click</a> here if you do not&nbsp; 
          know the class number or just leave it blank and we will advise you of the relevant 
          class(es).</small></small></small></font></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2"></td>
        </tr>
        <tr>
          <td width="33%" height="18"><font face="Arial" color="#000080"><small>Please give details 
          of goods/</small><br>
          <small>services:</small></font></td>
          <td width="67%" height="18"><font face="Arial" color="#000080"><textarea rows="3" name="specification" cols="30"></textarea></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2" bgcolor="#FFD9B3"><font face="Arial" color="#000080"><strong>&nbsp; Questions/Comments etc.:</strong></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18"><font face="Arial" color="#000080"><small><textarea rows="3" name="questions" cols="30"></textarea></small></font></td>
        </tr>
        <tr>
          <td width="33%" height="18"></td>
          <td width="67%" height="18">¡@<br>
          <input type="submit" value="Submit" name="Submit" style="font-family: sans-serif"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" value="Reset" name="Reset" style="font-family: sans-serif"></td>
        </tr>
      </table>
    </form>
    <p><small><small><font face="Arial" color="#000080">| <a style="color: rgb(0,0,128)" href="textpayterm.htm">Payment terms</a> | </font></small></small></p>
    <p><font face="Arial" color="#000080"><br>
    <small>Don't forget to send us a copy of your mark either by e-mail or by post.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    </small></font></td>
    <td width="10%"></td>
  </tr>
  <tr>
    <td width="7%"></td>
    <td width="85%"></td>
    <td width="9%"></td>
  </tr>
</table>
<?php } ?>
</body>
</html>