<?

function getSiteName() {
    $subFolder = $_SERVER['DOCUMENT_ROOT'];
    $folders = explode('/', $subFolder);
    return $folders[5];
}

function generateHeader() {
    ob_start(); ?>

    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="Quality Five Star Gold Award Bed and Breakfast in Boscastle, Cornwall" />
        <meta name="keywords" content="Boscastle, Cornwall, North Cornwall, Bed and Breakfast, Quality, Luxury, Reddivallen, Redivallen, Reddivalen, Eden Project" />
        <title>Reddivallen, Quality Bed and Breakfast in Boscastle, Cornwall</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://www.henrysearle.com/common/static/flat-ui/css/flat-ui.css" rel="stylesheet">
        <link href="/redboscastle.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    <div class="header">
        <div class="container background-color">
            <img src="/images/graphics/title image copy.jpg" width="925" height="300" />
        </div>
    </div>
    <div class="container">
    <div class="row">

    <div class="col-sm-4 background-color">
        <div class="style2">
            <p><a href="/index.php">Home</a></p>
            <p><a href="/rooms.php">Rooms and Tariff</a></p>
            <p><a href="/availability.php">Availability</a></p>
            <p><a href="/enquiry.php">Enquiry Form</a></p>
            <p><a href="/farm.php">The Farm</a></p>
            <p><a href="/lake.php">The Lake</a></p>
            <p><a href="/walkers.php">Walkers and Cyclists</a></p>
            <p><a href="/surround.php">Surrounding Area</a></p>
            <p><a href="/all.php">Room Facilities </a></p>
            <p><a href="/self.php">Self Catering</a></p>
            <p><a href="/location.php">How to find us </a></p>
            <p><a href="/access_statement.php">Access Statement</a></p>
            <p><a href="/terms.php">Booking Terms</a></p>
            <p><a href="/contact.php">Contact Details</a></p>
        </div>
    </div>
    <div class="col-sm-8 background-color">

    <?
    return ob_get_clean();

}

function generateFooter() {
    ob_start(); ?>
    </div>
    </div>
    </div>
    <table width="925" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td width="75"><img src="/images/graphics/corner 4.png" width="75" height="75" /></td>
            <td width="45" class="background-color">&nbsp;</td>
            <td width="75"><img src="/images/graphics/corner 3.png" width="75" height="75" /></td>
            <td width="10">&nbsp;</td>
            <td width="75"><img src="/images/graphics/corner 4.png" width="75" height="75" /></td>
            <td width="570" class="background-color">&nbsp;</td>
            <td width="75"><img src="/images/graphics/corner 3.png" width="75" height="75" /></td>
        </tr>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>

    <script type="text/javascript">
        _uacct = "UA-2731216-1";
        urchinTracker();
    </script>

    </body>
    </html>
    <?
    return ob_get_clean();
}