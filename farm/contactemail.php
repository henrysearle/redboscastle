<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php

function  checkEmail($email) {
 if (!preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
  return false;
 }
 return true;
}

//if "email" is filled out, send email
if (isset($_POST['send'])
  && $_POST['email'] != '' && checkEmail($_POST['email'])
  && $_POST['message'] != '') :
  //check if the email address is invalid
  $message = $_POST['message'].'

----------------------------------------------
This email was sent from www.redboscastle.com
Replying to this email will reply to sender';
  
  $to = "liz@redboscastle.com";
  
  $subject = $_POST['subject'];
  
  $headers .= 'From: '. $_POST['email'] . "\r\n";

  mail($to, $subject, $message, $headers );
  mail("henry.searle@googlemail.com", $subject, $message, $headers);
  echo "Thank you for using our mail form";
elseif (isset($_POST['preview'])
  && $_POST['email'] != '' && checkEmail($_POST['email'])
  && $_POST['message'] != ''
) : ?>
<form method="post" action="contact.php">
  <table width="550" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="165">Your Email Address:</td>
      <td width="385"><input name="email" type="hidden" value="<?php echo $_POST['email']; ?>" /><?php echo $_POST['email']; ?></td>
    </tr>
    <tr>
      <td>Message Subject: </td>
      <td><input name="subject" type="hidden" value="<?php echo $_POST['subject']; ?>" /></td>
    </tr>
    <tr>
      <td>Message Text: </td>
      <td><input name="message" type="hidden" value="<?php echo $_POST['message']; ?>" /><?php echo nl2br($_POST['message']); ?></td>
    </tr>
  </table>
  <input type="submit" name="edit" value="Edit Email" />
  <input type="submit" name="send" value="Send Email" />
</form>
<?php else: ?>
<form method="post" action="contact.php">
  <?php if ( $_POST['preview'] && (
  $_POST['email'] == '' || !checkEmail($_POST['email'])
  || $_POST['message'] == '')) : ?>
  There was an error with your email:
  <ul>
    <li>
      Please fill out all required fields
    </li>
    <?php if(!checkEmail($_POST['email'])) : ?>
    <li>
      Please enter a valid email
    </li>
    <?php endif; ?>
  </ul>
  <?php endif; ?>
  <table width="550" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="165">Your Email Address: *</td>
      <td width="385"><input <?php if (isset($_POST['preview']) && ($_POST['email'] == '' || !checkEmail($_POST['email']))) echo 'class="empty" '?>name="email" type="text" value="<?php echo $_POST['email'] ?>" /></td>
    </tr>
    <tr>
      <td>Message Subject: </td>
      <td><input name="subject" type="text" value="<?php echo $_POST['subject'] ?>" /></td>
    </tr>
    <tr>
      <td>Message Text: *</td>
      <td><textarea <?php if (isset($_POST['preview']) && $_POST['message'] == '') echo 'class="empty" '?>name="message" rows="15" cols="45"><?php echo $_POST['message'] ?></textarea></td>
    </tr>
  </table>
  <input name="preview" value="Send Email" type="submit" />
</form>
<?php endif; ?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7153576-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
