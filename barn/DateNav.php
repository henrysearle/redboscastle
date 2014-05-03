<?php
echo'<html>
<head>
<link href="cal/calendar.css" rel="stylesheet" type="text/css" />
<link href="redboscastle.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){
  eval(targ+".location=\'"+selObj.options[selObj.selectedIndex].value+"\'");
  if (restore) selObj.selectedIndex=0;
}

function MM_findObj(n, d) {
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_jumpMenuGo(selName,targ,restore){
  var selObj  = MM_findObj(selName); 
  if (selObj) MM_jumpMenu(targ,selObj,restore);
}
//-->
</script>';

$room = $_REQUEST["room"];
$guesthouse = $_REQUEST["guesthouse"];
$page = 'availability';

echo '

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-2731216-1";
urchinTracker();
</script>

</head>

<body>

<table width="75%" border="0" align="center">
  <tr> 
    <td width="5%" class="Date_Gone">1</td>
    <td width="27%">= Date Gone</td>    
  <td width="5%" class="Booked">2</td>
    <td width="27%">= Room Booked</td>
    <td width="5%" class="Free">3</td>
    <td width="27%">= Room Free</td>
  </tr>
  <tr>
    <td colspan="6"><form id="monthselectform" name="monthselectform" method="post" action="">
      <select name="monthselect" id="monthselect" onChange="MM_jumpMenuGo(\'monthselect\',\'parent.frames[\\\'mainFrame\\\']\',0)">';

$cmonth = date("m");
if (substr($cmonth,0,1) == '0')
  {
  $cmonth = substr($cmonth,1,1);
  }

$month = 1;

$month_name = array();
$month_name[1]= 'January';
$month_name[2]= 'February';
$month_name[3]= 'March';
$month_name[4]= 'April';
$month_name[5]= 'May';
$month_name[6]= 'June';
$month_name[7]= 'July';
$month_name[8]= 'August';
$month_name[9]= 'September';
$month_name[10]= 'October';
$month_name[11]= 'November';
$month_name[12]= 'December';

$year = date("y");

if (strlen($year) == 2)
{
$year = '20'.$year;
}
$monthc = 1;
$month = $cmonth;

while($monthc < 12) 
{
if ($month_name[$month] == $month_name[$cmonth]) $extra = ' selected'; else $extra = ''; 

echo '<option value="'.$page.'.php?month='.$month.'&year='.$year.'"'.$extra.'>'.$month_name[$month].' '.$year.'</option>
';
$month++;
$monthc++;
if ($month >= 12) {$month = 1; $year++; }

}
echo'  
     <input type="button" name="Button1" value="Go" onClick="MM_jumpMenuGo(\'monthselect\',\'parent.frames[\\\'mainFrame\\\']\',0)"></td>
 </table>
</form>
</body>
</html>';
?>