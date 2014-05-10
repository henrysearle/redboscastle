<?
/*
* This is all the dynamic bits of the page, should be pretty self-explanitory
* */
$guesthouse = 'Redivallen';
$website = 'www.redboscastle.com';
$email_address = "liz@redboscastle.com";
$type = 'room';
$units = array(
    'Any Available',
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

    <p>If you have an enquiry or would just like to get in contact, here are the contact details: </p>
    <p>
        Reddivallen,<br />
        Trevalga,<br />
        Boscastle, Cornwall<br />
        PL35 0EE
    </p>
    <p>
        Telephone: 01840 250 854
    </p>

<?

function  checkEmail($email) {
    if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
        return false;
    }
    return true;
}

if (isset($_POST['preview']) // if the user has submitted something
    && $_POST['name'] != '' // and all the required fields are filled out
    && $_POST['email'] != '' && $_POST['arrive'] != '' && $_POST['depart'] != '' && checkEmail($_POST['email'])
) { // do a basic string check on the email address supplied
    ?>
    <form method="post" action="enquiry.php">
        <p class="title"><?= $guesthouse; ?> Enquiry Form:</p>
        <table width="600" border="0" cellspacing="0" cellpadding="5" id="main_table">
            <tr valign="top">
                <td width="250">Name *</td>
                <td>
                    <input type="hidden" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" />
                    <?= isset($_POST['name']) ? $_POST['name'] : '' ?>&nbsp;
                </td>
            </tr>
            <tr valign="top">
                <td>Address</td>
                <td>
                    <input type="hidden" name="address" value="<?= isset($_POST['name']) ? $_POST['address'] : '' ?>" />
                    <?= nl2br(isset($_POST['name']) ? $_POST['address'] : '') ?>&nbsp;
                </td>
            </tr>
            <tr valign="top">
                <td>Telephone</td>
                <td>
                    <input type="hidden" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" />
                    <?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>&nbsp;
                </td>
            </tr>
            <tr valign="top">
                <td>Email Address *</td>
                <td>
                    <input type="hidden" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" />
                    <?= isset($_POST['email']) ? $_POST['email'] : '' ?>&nbsp;
                </td>
            </tr>
            <tr valign="top">
                <td><?= ucfirst($type); ?></td>
                <td>
                    <input type="hidden" name="<?= $type ?>" value="<?= isset($_POST['$type']) ? $_POST[$type] : '' ?>" />
                    <?= isset($_POST['$type']) ? $_POST[$type] : '' ?>&nbsp;
                </td>
            </tr>
            <tr valign="top">
                <td>Arrival Date *</td>
                <td>
                    <input type="hidden" name="arrive" value="<?= isset($_POST['arrive']) ? $_POST['arrive'] : '' ?>" />
                    <?= isset($_POST['arrive']) ? $_POST['arrive'] : '' ?>&nbsp;
                </td>
            </tr>
            <tr valign="top">
                <td>Departure Date *</td>
                <td>
                    <input type="hidden" name="depart" value="<?= isset($_POST['depart']) ? $_POST['depart'] : '' ?>" />
                    <?= isset($_POST['depart']) ? $_POST['depart'] : '' ?>&nbsp;
                </td>
            </tr>
            <tr valign="top">
                <td>Number of People</td>
                <td>
                    <input type="hidden" name="people" value="<?= isset($_POST['people']) ? $_POST['people'] : '' ?>" />
                    <?= isset($_POST['people']) ? $_POST['people'] : '' ?>&nbsp;
                </td>
            </tr>
            <tr valign="top">
                <td>Message</td>
                <td>
                    <input type="hidden" name="message" value="<?= isset($_POST['message']) ? $_POST['message'] : '' ?>" />
                    <?= nl2br(isset($_POST['message']) ? $_POST['message'] : '') ?>&nbsp;
                </td>
            </tr>
        </table>
        <p>
            <input type="submit" name="edit" value="Edit Enquiry" />
            <input type="submit" name="send" value="Send Enquiry" />
        </p>
    </form>
<?
} elseif (isset($_POST['send'])) {
    $message = '
<html>
<body>
<p>Reddivallen Enquiry Form:</p>
<table>
  <tr>
    <td>Name:</td>
    <td>' . $_POST['name'] . '</td>
  </tr>
  <tr>
    <td>Address:</td>
    <td>' . nl2br($_POST['address']) . '</td>
  </tr>
  <tr>
    <td>Phone:</td>
    <td>' . $_POST['phone'] . '</td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</td>
  </tr>
  <tr>
    <td>' . ucfirst($type) . ':</td>
    <td>' . $_POST[$type] . '</td>
  </tr>
  <tr>
    <td>Arrival Date:</td>
    <td>' . $_POST['arrive'] . '</td>
  </tr>
  <tr>
    <td>Departure Date:</td>
    <td>' . $_POST['depart'] . '</td>
  <tr>
    <td>Number of People:</td>
    <td>' . $_POST['people'] . '</td>
  <tr>
    <td>Message:</td>
    <td>' . nl2br($_POST['message']) . '</td
  </tr>
</table>
<hr>
This enquiry was sent from ' . $website . '<br />
Replying to this email will reply to the sender with the email they left
</body>
</html>';


    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= 'From: ' . $_POST['email'] . "\r\n";
    mail("henry.searle@googlemail.com", $guesthouse . " Website Enquiry", $message, $headers);
    ?>
    <p class="title"><?= $guesthouse; ?> Enquiry Form:</p>
    <p>Thank you for submitting an enquiry.</p>
    <? if (mail($email_address, $guesthouse . " Website Enquiry", $message, $headers)) : ?>
        <p>Your enquiry has been sent, we will get back to you as soon as possible.</p>
        <? if (isset($secure_server_link) && $secure_server_link != '') : ?>
            <p>You can now
                <a href="<?= $secure_server_link; ?>" target="_self">securely submit credit card information</a></p>
        <? endif; ?>
    <? else : ?>
        <p>There was an error with our server. Please try again later.</p>
    <?
    endif;
} else {
    ?>
    <form method="post" action="enquiry.php">
        <p class="title"><?= $guesthouse; ?> Enquiry Form:</p>

        <p style="margin-top:0px;">
            <small>Please note - You must first preview your enquiry before you can send it, this will help reduce our junk e-mails.
                <small>
        </p>
        <? if (isset($_POST['preview'])) : ?>
            There was an error with your enquiry:
            <ul>
                <li>Please fill out the required fields</li>
                <? if (!checkEmail($_POST['email'])) : ?>
                    <li>The email address you entered, "<?= $_POST['email']; ?>", was invalid</li>
                <? endif; ?>
            </ul>
        <? endif; ?>
        <table width="600" border="0" cellspacing="0" cellpadding="5" id="main_table">
            <tr valign="top">
                <td width="250">Name *</td>
                <td>
                    <input <? if (isset($_POST['preview']) && $_POST['name'] == '') {
                        echo 'class="empty"';
                    } ?> name="name" type="text" id="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td valign="top">Address</td>
                <td>
                    <textarea name="address" cols="40" rows="5" id="address"><?= isset($_POST['address']) ? $_POST['address'] : '' ?></textarea>
                </td>
            </tr>
            <tr valign="top">
                <td>Telephone</td>
                <td>
                    <input name="phone" type="text" id="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Email Address *</td>
                <td>
                    <input <? if (isset($_POST['preview']) && $_POST['email'] == '') {
                        echo 'class="empty"';
                    } ?> name="email" type="text" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td><?= ucfirst($type); ?></td>
                <td>
                    <select name="<?= $type; ?>">
                        <? foreach ($units as $unit) : ?>
                            <option <? if (isset($_REQUEST[$type]) && $_REQUEST[$type] == $unit)
                                echo 'selected' // using REQUEST on purpose
                            ?> value="<?= $unit; ?>"><?= $unit; ?></option>
                        <? endforeach ?>
                    </select>
                </td>
            </tr>
            <tr valign="top">
                <td>Arrival Date *</td>
                <td>
                    <input class="datepicker <?= (isset($_POST['preview']) && $_POST['arrive'] == '') ? 'empty' : '' ?>" name="arrive" type="text" id="arrive" value="<?= isset($_REQUEST['arrive']) ? $_REQUEST['arrive'] : '' // use request here on purpose ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Departure Date *</td>
                <td>
                    <input class="datepicker <?= (isset($_POST['preview']) && $_POST['depart'] == '') ? 'empty' : '' ?>" name="depart" type="text" id="depart" value="<?= isset($_REQUEST['depart']) ? $_REQUEST['depart'] : '' // use request here on purpose ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Number of People</td>
                <td>
                    <input name="people" type="text" id="people" maxlength="1" value="<?= isset($_POST['people']) ? $_POST['people'] : '' ?>" />
                </td>
            </tr>
            <tr valign="top">
                <td>Message (optional)</td>
                <td>
                    <textarea name="message" cols="40" rows="5" id="message"><?= isset($_POST['message']) ? $_POST['message'] : '' ?></textarea>
                </td>
            </tr>
        </table>
        <p>
            <small>* Required</small>
        </p>
        <p>
            <input type="submit" name="preview" value="Preview Enquiry" />
        </p>
    </form>
<?
}
?>


<?= generateFooter() ?>