<?

function generateHeader() {
    ob_start(); ?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="Quality Five Star Silver Award Bed and Breakfast in Boscastle, Cornwall" />
    <meta name="keywords" content="Boscastle, Cornwall, North Cornwall, Bed and Breakfast, Quality, Luxury, Reddivallen, Redivallen, Reddivalen, Eden Project" />
    <title>Reddivallen, Quality Bed and Breakfast in Boscastle, Cornwall</title>
    <link href="/redboscastle.css" rel="stylesheet" type="text/css" />
    <script>
    function changehtml(htmlname)
      {
      document.getElementById("Main_Text").src=htmlname;
      }
    </script>
    <style type="text/css">
    <!--
    .style2 {
      font-size   : 18px;
      position    : relative;
      margin-left : 10px;
      }
    -->
    </style>
    
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
    </script>
    <script type="text/javascript">
    _uacct = "UA-2731216-1";
    urchinTracker();
    </script>
    
    </head>
    
    <body class="main_page">
    <table class="containing-table" width="925" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" bgcolor="#ECE3DE"><img src="/images/graphics/title image redfarm.jpg" width="925" height="300" /></td>
      </tr>
      <tr>
        <td width="195" valign="top" bgcolor="#ECE3DE">
          <table width="195" border="0" cellpadding="0" cellspacing="0" id="navtable">
            <tr>
              <td>
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
                  <p><a href="/location.php">Finding Reddivallen</a></p>
                  <p><a href="/access_statement.php">Access Statement</a></p>
                  <p><a href="/terms.php">Booking Terms</a></p>
                  <p><a href="/contact.php">Contact Details</a></p>
                </div>
              </td>
            </tr>
          </table>  
        </td>
        <td width="10" valign="top" bgcolor="#F9F3E3">
        </td>
        <td width="720" class="mainContentContainer" bgcolor="#ECE3DE" valign="top">
            <div class="mainContent">
    <?
    return ob_get_clean();

}

function generateFooter() {
    ob_start(); ?>
            </div>
        </td>
      </tr>
    </table>
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