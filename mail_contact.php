<?php

session_start();

ob_start();

extract($_POST);



require_once('challenge.php');

$CHALLENGE_FIELD_PARAM_NAME = "vercode";

if(isset($_POST[$CHALLENGE_FIELD_PARAM_NAME])){

if(isChallengeAccepted($_POST[$CHALLENGE_FIELD_PARAM_NAME]) === FALSE) {

setcookie("name",$name);

setcookie("email",$email);

setcookie("phone",$phone);

setcookie("message",$message);





$_SESSION['ver_code_err']="1";

$_SESSION['vercode_msg']="Enter the code correctly!";

header("location:contactus.php");exit;

 }

 else{

if(isset($_POST)){


$message = '<table width="49%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolorlight="#000000">

  <tr>

    <td height="345"><table width="446"  border="0" align="center" cellpadding="5" cellspacing="0">

      <tr>

        <td height="57" colspan="5"><img src="http://imaginetventures.biz/sample/k&n/v1.1/images/logo.jpg" /></td>

      </tr>

      <tr>

        <td height="43" colspan="5"><div align="center" style="font-size: 14px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color:#CC3333;">Enquiry  form</div></td>

      </tr>

      <tr>

        <td width="46%"><div align="left">Name</div></td>

        <td width="3%">:</td>

        <td width="51%"><div align="left">'.$name.'</div></td>

      </tr>
	  <tr>

        <td width="46%"><div align="left">Email</div></td>

        <td width="3%">:</td>

        <td width="51%"><div align="left">'.$email.'</div></td>

      </tr>
	  <tr>

        <td width="46%"><div align="left">Phone</div></td>

        <td width="3%">:</td>

        <td width="51%"><div align="left">'.$phone.'</div></td>

      </tr>
	  

	  
	  <tr>

	    <td><div align="left">Message</div></td>

	    <td>:</td>

	    <td><div align="left">'.$message.'</div></td>

	    </tr>

   
	 

	   

    </table></td>

  </tr>

</table>';



$to = 'pradeep@imaginetventures.com';

$subject = 'Enquiry Form - '.$name;

$header = "From: Enquiry Form <$name>$email\r\n"; 

$header .= "Reply-to: <$email>\r\n";

$header .= "MIME-Version: 1.0\r\n";

$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 

$sent=mail($to,$subject,$message,$header);

if($sent){

$_SESSION['succ_msg']="Mail has been sent successfully!";

setcookie("name",'');
setcookie("email",'');
setcookie("phone",'');
setcookie("country",'');
setcookie("message",'');

 }
?>



<script language="javascript1.2">

window.location="contactus.php";

</script>

 <?php

     }

   }

 }

?>
