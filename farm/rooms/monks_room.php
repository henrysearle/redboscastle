<? include_once($_SERVER['DOCUMENT_ROOT'] . 'rooms/header.php'); ?>

<?= generateRoomHeader() ?>

<h2>Monk's Room</h2>

<table>
	<tr>
    	<td width="275" valign="top">
			<div style="float:left; padding-right:2px;"><a href="../images/room/large/monks_annexe.jpg" target="_blank"><img src="../images/room/medium/monks_annexe.jpg" width="275" height="412"></a></div>
	  </td>
	  <td valign="top">
       	<a href="../images/room/large/monks_room.jpg" target="_blank"><img src="../images/room/medium/monks_room.jpg" alt="" name="main" width="210" height="140" border="0" /></a>
        
        <hr />
        
        <h4>Availability</h4>
       	<iframe frameborder="0" scrolling="no" name="room_frame" id="room_frame" width="205" height="175" src="http://calendar.henrysearle.com/calendars/redboscastle/oneday.php?room=22"></iframe>
			
        <hr />
         	
        <h4>Prices</h4>
        <table width="190" border="0">
                    <tr>
                        <td width="90">1-3 nights:</td>
                        <td>&pound;42 pppn </td>
                    </tr>
                    <tr>
                        <td>4-6 nights: </td>
                        <td>&pound;40 pppn </td>
                    </tr>
                    <tr>
                        <td>7+ nights:</td>
                        <td>&pound;38 pppn </td>
                    </tr>
              </table></td>
	</tr>
</table>

<p>
	There is a &pound;25 single supplement for this room.<br />
	A minimum stay of two nights over a weekend applies to all rooms.
</p>
<p>A charming bedroom with a king size bed and shower en-suite. There is an annexe through a granite doorway which sits over the front porch - a little room with a slate floor, a chair and a shelf for storage or to write on. The window looks out onto the walled front garden. Called 'The Monk's Room' because we believe it resembles a prayer room!</p>

<?= generateRoomFooter() ?>
