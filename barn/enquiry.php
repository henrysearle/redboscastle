<?php
/*
* This is all the dynamic bits of the page, should be pretty self-explanitory
* */
$guesthouse     = 'Redivallen';
$website        = 'www.redboscastle.com';
$email_address  = "liz@redboscastle.com";
$type           = 'room';
$units          = array (
  'Any Available',
  'Reddivallen Suite',
  'Monk\'s Room',
  'Tredole',
  'Treweens',
  'Tregaina',
  'Treforda',
);

// set $secure_server_link = '' to not include the link
//$secure_server_link = 'https://dprhensim85.doteasy.com/~admin159/calendar/cards/cargurra/index.php';
$secure_server_link = '';
?>

<? include('../common/header.php'); ?>

<?= generateHeader() ?>

<?php

function  checkEmail($email) {
 if (!preg_match( "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
  return false;
 }
 return true;
}

if (isset($_POST['preview'])  // if the user has submitted something
 && $_POST['name'] != ''    // and all the required fields are filled out
 && $_POST['email'] != ''
 && $_POST['arrive'] != ''
 && $_POST['depart'] !=''
 && checkEmail($_POST['email'])) { // do a basic string check on the email address supplied
?>
  <form method="post" action="enquiry.php">
  <p class="title"><?php echo $guesthouse; ?> Enquiry Form:</p>
  <table width="480" border="0" cellspacing="0" cellpadding="0" id="main_table">
    <tr valign="top">
      <td width="160">Name *</td>
      <td>
        <input type="hidden" name="name" value="<?php echo $_POST['name'] ?>" />
        <?php echo $_POST['name'] ?>&nbsp;
      </td>
    </tr>
    <tr valign="top">
      <td>Address</td>
      <td>
        <input type="hidden" name="address" value="<?php echo $_POST['address'] ?>" />
        <?php echo nl2br($_POST['address']) ?>&nbsp;
      </td>
    </tr>
    <tr valign="top">
      <td>Telephone</td>
      <td>
        <input type="hidden" name="phone" value="<?php echo $_POST['phone'] ?>" />
        <?php echo $_POST['phone'] ?>&nbsp;
      </td>
    </tr>
    <tr valign="top">
      <td>Email Address *</td>
      <td>
        <input type="hidden" name="email" value="<?php echo $_POST['email'] ?>" />
        <?php echo $_POST['email'] ?>&nbsp;
      </td>
    </tr>
    <tr valign="top">
      <td><?php echo ucfirst($type); ?></td>
      <td>
        <input type="hidden" name="<?php echo $type ?>" value="<?php echo $_POST[$type] ?>" />
        <?php echo $_POST[$type] ?>&nbsp;
      </td>
    </tr>
    <tr valign="top">
      <td>Arrival Date *</td>
      <td>
        <input type="hidden" name="arrive" value="<?php echo $_POST['arrive'] ?>" />
        <?php echo $_POST['arrive'] ?>&nbsp;
      </td>
    </tr>
    <tr valign="top">
      <td>Departure Date *</td>
      <td>
        <input type="hidden" name="depart" value="<?php echo $_POST['depart'] ?>" />
        <?php echo $_POST['depart'] ?>&nbsp;
      </td>
    </tr>
    <tr valign="top">
      <td>Number of People</td>
      <td>
        <input type="hidden" name="people" value="<?php echo $_POST['people'] ?>" />
        <?php echo $_POST['people'] ?>&nbsp;
      </td>
    </tr>
    <tr valign="top">
      <td>Message</td>
      <td>
        <input type="hidden" name="message" value="<?php echo $_POST['message'] ?>" />
        <?php echo nl2br($_POST['message']) ?>&nbsp;
      </td>
    </tr>
  </table>
<p>
  <input type="submit" name="edit" value="Edit Enquiry" />
  <input type="submit" name="send" value="Send Enquiry" />
</p>
</form>
<?php
}
elseif (isset($_POST['send'])){
$message = '
<html>
<body>
<p>Reddivallen Enquiry Form:</p>
<table>
  <tr>
    <td>Name:</td>
    <td>'.$_POST['name'].'</td>
  </tr>
  <tr>
    <td>Address:</td>
    <td>'.nl2br($_POST['address']).'</td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td>'.$_POST['phone'].'</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><a href="mailto:'.$_POST['email'].'">'.$_POST['email'].'</td>
  </tr>
  <tr>
    <td>'.ucfirst($type).':</td>
    <td>'.$_POST[$type].'</td>
  </tr>
  <tr>
    <td>Arrival Date:</td>
    <td>'.$_POST['arrive'].'</td>
  </tr>
  <tr>
    <td>Departure Date:</td>
    <td>'.$_POST['depart'].'</td>
  <tr>
    <td>Number of People:</td>
    <td>'.$_POST['people'].'</td>
  <tr>
    <td>Message:</td>
    <td>'.nl2br($_POST['message']).'</td
  </tr>
</table>
<hr>
This enquiry was sent from '.$website.'<br />
Replying to this email will reply to the sender with the email they left
</body>
</html>';


// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: '. $_POST['email'] . "\r\n";
mail("henry.searle@googlemail.com", $guesthouse." Website Enquiry", $message, $headers);
?>
<p class="title"><?php echo $guesthouse; ?> Enquiry Form:</p>
<p>Thank you for submitting an enquiry.</p>
<?php if (mail($email_address, $guesthouse." Website Enquiry", $message, $headers)) : ?>
  <p>Your enquiry has been sent, we will get back to you as soon as possible.</p>
  <?php if (isset($secure_server_link) && $secure_server_link != '') : ?>
  <p>You can now <a href="<?php echo $secure_server_link; ?>" target="_self">securely submit credit card information</a></p>
  <?php endif; ?>
<?php else : ?>
  <p>There was an error with our server. Please try again later.</p>
<?php
endif;
  }
else { ?>
<form method="post" action="enquiry.php">
  <p class="title"><?php echo $guesthouse; ?> Enquiry Form:</p>
  <p style="margin-top:0px;"><small>Please note - You must first preview your enquiry before you can send it, this will help reduce our junk e-mails.<small></p>
  <?php if (isset($_POST['preview'])) : ?>
  There was an error with your enquiry:
    <ul>
      <li>Please fill out the required fields</li>
      <?php if (!checkEmail($_POST['email'])) : ?>
      <li>The email address you entered, "<?php echo $_POST['email']; ?>", was invalid</li>
      <?php endif; ?>
    </ul>
  <?php endif; ?>
  <table width="480" border="0" cellspacing="0" cellpadding="0" id="main_table">
    <tr valign="top">
      <td width="150">Name *</td>
      <td>
        <input <?php if (isset($_POST['preview']) && $_POST['name'] == '') echo 'class="empty"'; ?> name="name" type="text" id="name" value="<?php echo $_POST['name'] ?>" />
      </td>
    </tr>
    <tr valign="top">
      <td valign="top">Address</td>
      <td>
        <textarea name="address" cols="40" rows="5" id="address"><?php echo $_POST['address'] ?></textarea>
      </td>
    </tr>
    <tr valign="top">
      <td>Telephone</td>
      <td>
        <input name="phone" type="text" id="phone" value="<?php echo $_POST['phone'] ?>" />
      </td>
    </tr>
    <tr valign="top">
      <td>Email Address *</td>
      <td>
        <input <?php if (isset($_POST['preview']) && $_POST['email'] == '') echo 'class="empty"'?> name="email" type="text" id="email" value="<?php echo $_POST['email'] ?>" />
      </td>
    </tr>
    <tr valign="top">
      <td><?php echo ucfirst($type); ?></td>
      <td>
        <select name="<?php echo $type; ?>">
          <?php foreach($units as $unit) : ?>
          <option <?php if ($_REQUEST[$type] == $unit) echo 'selected' // using REQUEST on purpose?> value="<?php echo $unit; ?>"><?php echo $unit; ?></option>
          <?php endforeach ?>
        </select>        
      </td>
    </tr>
    <tr valign="top">
      <td>Arrival Date *</td>
      <td>
        <input <?php if (isset($_POST['preview']) && $_POST['arrive'] == '') echo 'class="empty"'?> name="arrive" type="text" id="arrive" value="<?php echo $_REQUEST['arrive'] // use request here on purpose ?>" />
      </td>
    </tr>
    <tr valign="top">
      <td>Departure Date *</td>
      <td>
        <input <?php if (isset($_POST['preview']) && $_POST['depart'] == '') echo 'class="empty"'?> name="depart" type="text" id="depart" value="<?php echo $_REQUEST['depart'] // use request here on purpose ?>" />
      </td>
    </tr>
    <tr valign="top">
      <td>Number of People</td>
      <td>
        <input name="people" type="text" id="people" maxlength="1"  value="<?php echo $_POST['people'] ?>"/>
      </td>
    </tr>
    <tr valign="top">
      <td>Message (optional)</td>
      <td><textarea name="message" cols="40" rows="5" id="message"><?php echo $_POST['message'] ?></textarea></td>
    </tr>
  </table>
<p>
  <small>* Required</small>
</p>
<p>
  <input type="submit" name="preview" value="Preview Enquiry" />
</p>
</form>
<?php
  }
?>


<?= generateFooter() ?>