<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="/calendar_style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
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
</script>
</head>
<body style="margin-top:10px; text-align:center">
  <table align="center" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td style="height:20px" class="booked" width="40" height="30">&nbsp;</td>
      <td width="100"> Booked</td>
      <td style="height:20px" class="free" width="40">&nbsp;</td>
      <td width="100"> Available</td>
      <td style="height:20px" class="date_gone" width="40">&nbsp;</td>
      <td width="100"> Date Gone </td>
    </tr>
  </table>
  <br />
  <form name="date_form">
    <select name="monthselect" id="monthselect" onchange="MM_jumpMenuGo('monthselect','parent.frames[\'mainFrame\']',0)">
  <?php
  $month = date("m");
  $year = date("Y");
  $monthc = 1;
  
  for($monthc=01; $monthc<=12; $monthc++, $month++)
    {
    if ($month == 13)
      {
      $month = 1;
      $year++;
      }
    // dates need to look like this for sql queries
    if (strlen($month) == 1) {
      $month = '0'.$month;
    }
    
    $month_name = date("F",mktime(0,0,0,$month,1,$year));
    echo "    <option value=\"/availability/availability.php?month=$month&year=$year\">$month_name $year</option>\n";
    }
  ?>
    </select>
  </form>
</body>
</html>