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
<title>Order Online</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">


<meta name="Microsoft Theme" content="none">
<meta name="Microsoft Border" content="none">
</head>

<body>

<p>
<font LANG="ZH-TW" color="#000080">
    <?php if($msg) { echo $msg; } ?>
    <?php if(!$msg) { ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �ж�g�������, 
    �ڭ̷|���ֻP �դU�p���C
    <?php } ?>
</font><br>
</p>

<?php if(!$msg) { ?>
<table border="0" cellpadding="0" cellspacing="0" width="98%" style="background-color: rgb(255,255,255); border-left: medium none rgb(255,255,255); border-right: medium none rgb(255,255,255); border-top: thin none rgb(0,0,128); border-bottom: thin none rgb(0,0,128)">
  <tr>
    <td width="10%"></td>
    <td width="63%">
    <form method="POST" target="_self" action="ordertm.php" onSubmit="" webbot-action="--WEBBOT-SELF--">
      <!--webbot bot="SaveResults" s-email-format="TEXT/PRE" s-email-address="info@trademark.com.hk" b-email-label-fields="TRUE" s-builtin-fields="Date Time" u-confirmation-url="confirmation.htm" startspan --><input TYPE="hidden" NAME="VTI-GROUP" VALUE="0"><!--webbot bot="SaveResults" endspan i-checksum="43374" -->
      <input style="display: none" type="text" name="country" />
      <table border="0" cellpadding="0" cellspacing="0" width="103%" height="375">
        <tr>
          <td width="100%" colspan="2" bgcolor="#FFD9B3" height="21"><font color="#000080"><strong>&nbsp; 
          <font lang="ZH-TW">�p�����:</font></strong></font></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="21%" height="25"><small><font LANG="ZH-TW" color="#000080">�m�W:</font></small></td>
          <td width="97%" height="25"><font color="#000080"><small><input type="text" name="Name" size="28"></small></font></td>
        </tr>
        <tr>
          <td width="21%" height="25"><small><font LANG="ZH-TW" color="#000080">���q�W��:</font></small></td>
          <td width="97%" height="25"><font color="#000080"><small><input type="text" name="Company" size="28"></small></font></td>
        </tr>
        <tr>
          <td width="21%" height="1"><small><font LANG="ZH-TW" color="#000080">�q�ܸ��X:</font></small></td>
          <td width="97%" height="1"><font color="#000080"><small><input type="text" name="Telephone" size="28"></small></font></td>
        </tr>
        <tr>
          <td width="21%" height="18"><small><font LANG="ZH-TW" color="#000080">�ǯu���X:</font></small></td>
          <td width="97%" height="18"><font color="#000080"><small><input type="text" name="Fax" size="28"></small></font></td>
        </tr>
        <tr>
          <td width="21%" height="18"><small><font LANG="ZH-TW" color="#000080">�q�l�a�}:</font></small></td>
          <td width="97%" height="18"><font face="Arial" color="#000080"><small><input type="text" name="E_mail" size="28"></small></font></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="100%" colspan="2" bgcolor="#FFD9B3" height="21"><strong><font face="Arial" color="#000080">&nbsp; </font><font FACE="�s�ө���" LANG="ZH-TW">��ܪA��</font><font face="Arial" color="#000080">:</font></strong></td>
        </tr>
        <tr>
          <td width="100%" colspan="2" bgcolor="#FFFFFF" height="21"></td>
        </tr>
        <tr>
          <td width="21%" height="18"><small><font face="�s�ө���" color="#000080" LANG="ZH-TW">�п��</font><font face="�s�ө���" color="#000080">:</font></small></td>
          <td width="97%" height="18"><font face="�s�ө���" color="#000080"><select name="services[]" size="4" multiple style="color: rgb(0,0,128); font-family: �s�ө���, Times New Roman">
            <option value="�ӼЬd��(�Y�d�U)">�ӼЬd��(�Y�d�U)</option>
            <option value="�Ӽе��U">�Ӽе��U</option>
            <option value="�Ӽ����">�Ӽ����</option>
            <option value="�Ӽ�����">�Ӽ�����</option>
            <option value="�ܧ�n�O�W�٢��a�}">�ܧ�n�O�W�٢��a�}</option>
            <option value="�ɵo���U��">�ɵo���U��</option>
            <option value="���P���U�Ӽ�">���P���U�Ӽ�</option>
            <option value="�ӽ��ҩ����">�ӽ��ҩ����</option>
            <option value="���X��ĳ">���X��ĳ</option>
            <option value="�ӼШϥγ\�i�X�P�Ʈ�">�ӼШϥγ\�i�X�P�Ʈ�</option>
            <option value="��^�Ӽд_�f">��^�Ӽд_�f</option>
            <option value="�Ӽв�ĳ���w�_�f">�Ӽв�ĳ���w�_�f</option>
            <option value="�ӼЪ�ĳ�P�M">�ӼЪ�ĳ�P�M</option>
            <option value="�M�P�Ӽе��U">�M�P�Ӽе��U</option>
            <option value="��^�M�P�Ӽе��U�_�f">��^�M�P�Ӽе��U�_�f</option>
            <option value="��^�Ӽ������_�f">��^�Ӽ������_�f</option>
            <option value="��^�Ӽ�����_�f">��^�Ӽ�����_�f</option>
          </select></font></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="21%" height="18"><input type="checkbox" name="others" value="Others"><small><font face="Arial" color="#000080">&nbsp; </font><font face="�s�ө���" color="#000080" LANG="ZH-TW">�䥦:</font></small></td>
          <td width="97%" height="18"><textarea rows="2" name="other" cols="25"></textarea><br>
          <font FACE="�s�ө���" LANG="ZH-TW">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font><small><font face="�s�ө���" color="#000080" LANG="ZH-TW">��</font><font color="#000080"><font LANG="ZH-TW">����</font>&nbsp;</font></small></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2"></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2" bgcolor="#FFD9B3"><strong><font face="Arial" color="#000080">&nbsp; </font><font FACE="�s�ө���" LANG="ZH-TW">�ӽФH�ԲӸ��:</font></strong></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2"></td>
        </tr>
        <tr>
          <td width="21%" height="18"><font FACE="�s�ө���" LANG="ZH-TW" color="#000080"><small>���q�W�� 
          </small><br>
          <small>(�^��) :</small></font></td>
          <td width="97%" height="18"><small><font face="Arial" color="#000080"><input type="text" name="co_eng" size="28"></font></small></td>
        </tr>
        <tr>
          <td width="21%" height="18"><font FACE="�s�ө���" LANG="ZH-TW" color="#000080"><small>���q�W�� 
          </small><br>
          <small>(����) :</small></font></td>
          <td width="97%" height="18"><small><font face="Arial" color="#000080"><input type="text" name="co_chinese" size="28"></font></small></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="21%" height="18"><font FACE="�s�ө���" LANG="ZH-TW" color="#000080"><small>���U�a�}:</small></font></td>
          <td width="97%" height="18"><font face="Arial" color="#000080"><small><textarea rows="2" name="Reg_address" cols="27"></textarea></small></font></td>
        </tr>
        <tr>
          <td width="21%" height="25"></td>
          <td width="97%" height="25"></td>
        </tr>
        <tr>
          <td width="21%" height="18"><font FACE="�s�ө���" LANG="ZH-TW" color="#000080"><small>���q���O:</small></font></td>
          <td width="97%" height="18"><font face="Arial" color="#000080"><select name="type_corporation" size="2" style="color: rgb(0,0,128); font-family: �s�ө���, Times New Roman">
            <option value="�������q">�������q</option>
            <option value="�X�Ѹg��">�X�Ѹg��</option>
            <option value="�W��g��">�W��g��</option>
            <option value="�^�ݳB�k�s�q���U���q">�^�ݳB�k�s�q���U���q</option>
            <option value="�䥦��a���U���q">�䥦��a���U���q</option>
          </select></font></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="21%" height="18"><small><font FACE="�s�ө���" LANG="ZH-TW" color="#000080">���q���U�a�I:</font></small></td>
          <td width="97%" height="18"><font face="Arial" color="#000080"><input type="text" name="country_corporation" size="27"></font></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="100%" height="21" colspan="2" bgcolor="#FFD9B3"><strong><font face="Arial" color="#000080">&nbsp; </font><font FACE="�s�ө���" LANG="ZH-TW" color="#000080">�Ӽи��</font><big><font face="Arial" color="#000080">:</font></big></strong></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="21%" height="18"><small><font color="#000080">���U��a</font><font face="Arial" color="#000080">:</font></small></td>
          <td width="97%" height="18"><font face="Arial" color="#000080"><input type="text" name="countries_to_register" size="28"></font></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2"></td>
        </tr>
        <tr>
          <td width="21%" height="18"><small><font FACE="�s�ө���" LANG="ZH-TW" color="#000080">���U���O</font><font face="Arial" color="#000080">:</font></small></td>
          <td width="97%" height="18"><input type="text" name="class" size="15"><small><font color="#0000FF" face="Arial"><small> &nbsp;</small> </font><font FACE="�s�ө���" LANG="ZH-TW" color="#000080">(�������X1-45)</font></small></td>
        </tr>
        <tr>
          <td width="132%" height="33" colspan="2"><font FACE="�s�ө���" LANG="ZH-TW" color="#000080"><small>�p�G �դU���M�����U���O, �Ы�<a href="../../trademark/intclchin1.htm" style="color: rgb(0,0,128)">���B</a>�κ|�����ڭ̴��A��g�C</small></font></td>
        </tr>
        <tr>
          <td width="100%" height="18" colspan="2"></td>
        </tr>
        <tr>
          <td width="21%" height="18"><small><font FACE="�s�ө���" LANG="ZH-TW" color="#000080">�ӫ~/�A�ȸԲӻ���</font><font face="Arial" color="#000080">:</font></small></td>
          <td width="97%" height="18"><font face="Arial" color="#000080"><textarea rows="3" name="specification" cols="27"></textarea></font></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="100%" height="21" colspan="2" bgcolor="#FFD9B3"><strong><font face="Arial" color="#000080">&nbsp; </font><font FACE="�s�ө���" LANG="ZH-TW" color="#000080">���D���N����:</font></strong></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18"><font face="Arial" color="#000080"><small><textarea rows="3" name="questions" cols="27"></textarea></small></font></td>
        </tr>
        <tr>
          <td width="21%" height="18"></td>
          <td width="97%" height="18">�@<br>
          <input type="submit" value="����" name="Submit" style="font-family: sans-serif"> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="reset" value="���s��z" name="Reset" style="font-family: sans-serif"></td>
        </tr>
      </table>
    </form>
    <p><font FACE="�s�ө���" LANG="ZH-TW" color="#000080">�ФŧѰO�q�l�ζl�H�@���Ӽм˥��������q, 
    �H�@�ӽФ��ΡC</font><font color="#000080"><br>
    <br>
    </font><small><font face="Arial" color="#000080"><small>| </small></font><a style="color: rgb(0,0,128)" href="payterms.htm"><font FACE="�s�ө���" LANG="ZH-TW" color="#000080">�I�ڲӫh</font></a><small><font color="#000080"> </font><font face="Arial" color="#000080">| </font></small></small></p>
    <p align="right">�@</td>
    <td width="15%"></td>
  </tr>
</table>
<?php } ?>
</body>
</html>