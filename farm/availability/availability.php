<?php
require_once('/var/www/henrysearle/calendar/cal.php');
$col_counter=0;
$year = $_GET['year'];
$month = $_GET['month'];
$rooms = array(
  // room id  => array(Name, Image)
  23 => array('name' => "Reddivallen Suite",  'image' => "reddivallen_suite"),
  22 => array('name' => "Monk's Room",        'image' => "monks_room"),

)
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="/calendar_style.css" rel="stylesheet" type="text/css" />
</head>

<body style="margin:0px;">
<br />
<table width="100%">
  <tr>
<?php foreach($rooms as $room_id => $room) : 
		$col_counter++;  ?>
    <td>
      <span class="roomname"><?php echo $room['name']?></span><br />
      <img src="/images/availability/<?php echo $room['image']?>.jpg" width="125" />
    </td>
    <td>
  <?php echo generate_calendar($year, $month, $room_id); ?>
    </td>
<?php if ($col_counter == 2){
			$col_counter = 0;
			echo "  </tr>\n  <tr>\n";
		}
		endforeach; ?>
  </tr>
</table>

<table align="center" style="margin-top: 20px;">
    <tr>
        <td>
            <a href="http://barn.redboscastle.com" target="_top"><img width="200" src="/images/barn/barn.jpg" /></a>
        </td>
        <td>
            <h3 style="text-align: left">
                <a href="http://barn.redboscastle.com" target="_top" style="text-decoration: none">Reddivallen Barn</a>
            </h3>
            <p>
                Can't find availability for the nights you are looking for?
            </p>
            <p>
                Find more accommodation in <a href="http://barn.redboscastle.com" target="top">Reddivallen Barn</a>
            </p>
        </td>
    </tr>
</table>

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
