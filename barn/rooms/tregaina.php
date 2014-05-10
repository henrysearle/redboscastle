<? include_once('header.php'); ?>

<?= generateRoomHeader() ?>

<?
$room = (object) array(
    'name'        => 'Tregaina',
    'image1'      => 'tregaina.jpg',
    'image2'      => 'tregaina_ensuite.jpg',
    'roomId'      => 20,
    'prices'      => array(
        '1-3 nights:' => '&pound;45 pppn',
        '4-6 nights:' => '&pound;43 pppn',
        '7+ nights:'  => '&pound;41 pppn'
    ),
    'description' => '
        <p>
            A minimum stay of two nights over a weekend applies to all rooms.
        </p>
        <p>
            This is a single room suitable for anyone travelling alone or on business.
            This enchanting room overlooks the lake and countryside.
        </p>
        <p>
            Features original beams and oak furniture and offers a stylish shower en-suite.
        </p>'
);
?>

<?= generateRoomContent($room) ?>

<h2>Tregaina</h2>

<table>
	<tr>
    	<td width="275" valign="top">
			<div style="float:left; padding-right:2px;"><a href="../images/room/large/tregaina.jpg" target="_blank"><img src="../images/room/medium/tregaina.jpg" alt="" name="main" width="275" height="412" border="0" /></a></div>
		</td>
		<td valign="top">
       	  <a href="../images/room/large/tregaina_ensuite.jpg" target="_blank"><img src="../images/room/medium/tregaina_ensuite.jpg" width="210" height="140" /></a><br />

			<hr />

         	<h4>Availability</h4>
        	<iframe frameborder="0" scrolling="no" name="room_frame" id="room_frame" width="205" height="175" src="http://calendar.henrysearle.com/calendars/redboscastle/oneday.php?room=20"></iframe>
			
            <hr />
         	
            <h4>Prices</h4>
          <table width="190" border="0"> 
            <tr> 
              <td width="90">1-3 nights:</td> 
              <td>&pound;45 pppn </td> 
            </tr> 
            <tr> 
              <td>4-6 nights: </td> 
              <td>&pound;43 pppn </td> 
            </tr> 
            <tr> 
              <td>7+ nights:</td> 
              <td>&pound;41 pppn </td> 
            </tr> 
          </table> 
        </td>
	</tr>
</table>

<?= generateRoomFooter() ?>
