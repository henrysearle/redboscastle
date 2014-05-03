<html>
<head>
<title>Availability</title>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2731216-1";
urchinTracker();
</script>

</head>

<?php

$room = $_REQUEST["room"];
$guesthouse = $_REQUEST["guesthouse"];

$month = date("m");
$year = date("y");

if (strlen($month) == 1)
  {
  $month = '0'.$month;
  }  
  
if (strlen($year) == 2)
  {
  $year = '20'.$year;
  }  

?>

<frameset rows="65,*" frameborder="no" border="0" framespacing="0">
  <frame src="DateNav.php<?php echo '?page=aval&room='.$room.'&guesthouse='.$guesthouse; ?>" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frame src="availability.php<?php echo '?guesthouse='.$guesthouse.'&month='.$month.'&year='.$year; ?>" name="mainFrame" id="mainFrame" title="mainFrame" />
</frameset>
<noframes><body>
</body>
</noframes></html>
