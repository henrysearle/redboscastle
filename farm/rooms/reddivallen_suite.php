<? include_once($_SERVER['DOCUMENT_ROOT'] . '/rooms/header.php'); ?>

<?= generateRoomHeader() ?>

<h2>Reddivallen Suite</h2>

<table>
    <tr>
        <td width="275" valign="top">
            <div style="float:left; padding-right:2px;">
                <a href="../images/room/large/reddivallen_suite.jpg" target="_blank"><img src="../images/room/medium/reddivallen_suite.jpg" alt="" name="main" width="275" height="412" border="0" /></a>
            </div>
        </td>
        <td valign="top">
            <a href="../images/room/large/reddivallen_ensuite.jpg" target="_blank"><img src="../images/room/medium/reddivallen_ensuite.jpg" width="210" height="140" /></a><br />

            <hr />

            <h4>Availability</h4>
            <iframe frameborder="0" scrolling="no" name="room_frame" id="room_frame" width="205" height="175" src="http://calendar.henrysearle.com/calendars/redboscastle/oneday.php?room=23"></iframe>

            <hr />

            <h4>Prices</h4>
            <table width="190" border="0">
                <tr>
                    <td width="90">1-3 nights:</td>
                    <td>&pound;47 pppn</td>
                </tr>
                <tr>
                    <td>4-6 nights:</td>
                    <td>&pound;45 pppn</td>
                </tr>
                <tr>
                    <td>7+ nights:</td>
                    <td>&pound;43 pppn</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<p>Minimum occupancy of 2 persons.<br />
    A minimum stay of two nights over a weekend applies to all rooms.</p>
<p>A very spacious room with a king size bed and sofa in a lounge area to sit and read or watch television in your own
    private space. There is a shower en-suite with a window looking out onto the walled front garden.</p>

<?= generateRoomFooter() ?>
