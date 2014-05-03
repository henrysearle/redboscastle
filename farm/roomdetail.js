// JavaScript Document

function change_room(n)
{
switch(n)
{
case 1:
document.getElementById("Room").innerHTML=red_suite;
break
case 2:
document.getElementById("Room").innerHTML=monks;
break
case 3:
document.getElementById("Room").innerHTML=tredole;
break
case 4:
document.getElementById("Room").innerHTML=treweens;
break
case 5:
document.getElementById("Room").innerHTML=tregaina;
break
case 6:
document.getElementById("Room").innerHTML=treforda;
break
}
};

red_suite='  <table id="Room_Detail" width="600" height="200" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td id="Room_Image" width="300" height="200" align="center" valign="top"><a href="images/room/large/reddivallen suite.jpg" target="_blank"><img src="images/room/medium/reddivallen suite.jpg" name="main" border="0"></a></td>' + '\n' +
'      <td valign="top"><p><span class="Room_Name">Reddivallen Suite</span><br>' + '\n' +
'      </p>' + '\n' +
'        <table width="200" border="0">' + '\n' +
'          <tr>' + '\n' +
'            <td width="80">1-3 nights:</td>' + '\n' +
'            <td>&pound;35</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>3-6 nights: </td>' + '\n' +
'            <td>&pound;33</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>7+ nights:</td>' + '\n' +
'            <td>&pound;31</td>' + '\n' +
'          </tr>' + '\n' +
'        </table>' + '\n' +
'      <p>There is a &pound;15 single supplement for this room.</p></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <table width="300" border="0" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td height="67" width="100"><a href="javascript:change(\'reddivallen suite.jpg\')"><img src="images/room/thumb/reddivallen suite.jpg" width="100" height="67" border="0"></a></td>' + '\n' +
'      <td height="67" width="86">&nbsp;</td>' + '\n' +
'      <td height="67" width="100"><a href="javascript:change(\'reddivallen ensuite.jpg\')"><img src="images/room/thumb/reddivallen ensuite.jpg" width="100" height="67" border="0"></a></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <br />A very spacious room with a king size bed and sofa in a lounge area to sit and read or watch television in your own private space.There is a shower en-suite with a window looking out onto the walled front garden.';

monks='  <table id="Room_Detail" width="600" height="200" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td id="Room_Image" width="300" height="200" align="center" valign="top"><a href="images/room/large/monks room.jpg" target="_blank"><img src="images/room/medium/monks room.jpg" name="main" border="0"></a></td>' + '\n' +
'      <td valign="top"><p><span class="Room_Name">The Monk\'s Room </span><br>' + '\n' +
'      </p>' + '\n' +
'        <table width="200" border="0">' + '\n' +
'          <tr>' + '\n' +
'            <td width="80">1-3 nights:</td>' + '\n' +
'            <td>&pound;33</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>3-6 nights: </td>' + '\n' +
'            <td>&pound;31</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>7+ nights:</td>' + '\n' +
'            <td>&pound;29</td>' + '\n' +
'          </tr>' + '\n' +
'        </table>' + '\n' +
'      <p>There is a &pound;15 single supplement for this room.</p></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <table width="300" border="0" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td height="67" width="100"><a href="javascript:change(\'monks room.jpg\')"><img src="images/room/thumb/monks room.jpg" width="100" height="67" border="0"></a></td>' + '\n' +
'      <td height="67" width="86">&nbsp;</td>' + '\n' +
'      <td height="67" width="100"><div align="center"><a href="javascript:change(\'monks annexe.jpg\')"><img src="images/room/thumb/monks annexe.jpg" width="45" height="67" border="0"></a></div></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <br />A charming bedroom with a king size bed and shower en-suite.<br>' + '\n' +
'  There is an annexe through a granite doorway which sits over the front porch - a little room with a slate floor, a chair and a shelf for storage or to write on. The window looks out onto the walled front garden. Called \'The Monks Room\' because we believe it resembles a prayer room!';

tredole='  <table id="Room_Detail" width="600" height="200" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td id="Room_Image" width="300" height="200" align="center" valign="top"><a href="images/room/large/tredole.jpg" target="_blank"><img src="images/room/medium/tredole.jpg" alt="" name="main" width="300" height="200" border="0"></a></td>' + '\n' +
'      <td valign="top"><p><span class="Room_Name">Tredole </span><br>' + '\n' +
'      </p>' + '\n' +
'        <table width="200" border="0">' + '\n' +
'          <tr>' + '\n' +
'            <td width="80">1-3 nights:</td>' + '\n' +
'            <td>&pound;34</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>3-6 nights: </td>' + '\n' +
'            <td>&pound;32</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>7+ nights:</td>' + '\n' +
'            <td>&pound;30</td>' + '\n' +
'          </tr>' + '\n' +
'        </table>' + '\n' +
'      <p>There is a &pound;15 single suppliment for this room. </p></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <table width="300" border="0" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td height="67" width="100"><a href="javascript:change(\'tredole.jpg\')"><img src="images/room/thumb/tredole.jpg" width="100" height="67" border="0"></a></td>' + '\n' +
'      <td height="67" width="86">&nbsp;</td>' + '\n' +
'      <td height="67" width="100"><div align="center"><a href="javascript:change(\'tredole wet room.jpg\')"><img src="images/room/thumb/tredole wet room.jpg" width="100" height="69" border="0"></a></div></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <br>' + '\n' +
'  Comfortable ground floor double bedroom, tastefully furnished with a double oak bed and furniture including a wet room consisiting of shower, toilet and washbasin. Suitable for the less able.';

treweens='  <table id="Room_Detail" width="600" height="200" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td id="Room_Image" width="300" height="200" align="center" valign="top"><a href="Drag to a file to make a link." target="_blank"><img src="images/room/medium/treweens.jpg" alt="" name="main" width="250" height="200" border="0"></a></td>' + '\n' +
'      <td valign="top"><p><span class="Room_Name">Treweens</span></p>' + '\n' +
'        <table width="200" border="0">' + '\n' +
'          <tr>' + '\n' +
'            <td width="80">1-3 nights:</td>' + '\n' +
'            <td>&pound;40</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>3-6 nights: </td>' + '\n' +
'            <td>&pound;38</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>7+ nights:</td>' + '\n' +
'            <td>&pound;36</td>' + '\n' +
'         </tr>' + '\n' +
'       </table>' + '\n' +
'      <p>There is a &pound;15 single suppliment for this room. </p></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <table width="300" border="0" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td height="67" width="100"><div align="center"><a href="javascript:change(\'treweens.jpg\')"><img src="images/room/thumb/treweens.jpg" width="84" height="67" border="0"></a></div></td>' + '\n' +
'      <td height="67" width="86">&nbsp;</td>' + '\n' +
'      <td height="67" width="100"><div align="center"><a href="javascript:change(\'treweens jacuzzi.jpg\')"><img src="images/room/thumb/treweens jacuzzi.jpg" width="100" height="67" border="0"></a></div></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <br>' + '\n' +
'  Indulge yourself in a spacious double room with a king-size and single bed sleeping up to three persons and a luxury en-suite bathroom with a jacuzzi bath and shower. Tall open ceiling with original beams, beautiful furnishings and solid oak furniture. Countryside and lake views.';

tregaina='  <table id="Room_Detail" width="600" height="200" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td id="Room_Image" width="300" height="200" align="center" valign="top"><a href="images/room/large/tregaina.jpg" target="_blank"><img src="images/room/medium/tregaina.jpg" alt="" name="main" width="267" height="200" border="0"></a></td>' + '\n' +
'      <td valign="top"><p><span class="Room_Name">Tregaina</span></p>' + '\n' +
'        <table width="200" border="0">' + '\n' +
'          <tr>' + '\n' +
'            <td width="80">1-3 nights:</td>' + '\n' +
'            <td>&pound;40</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>3-6 nights: </td>' + '\n' +
'            <td>&pound;37</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>7+ nights:</td>' + '\n' +
'            <td>&pound;34</td>' + '\n' +
'          </tr>' + '\n' +
'        </table>' + '\n' +
'      <p>&nbsp;</p></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <table width="300" border="0" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td height="67" width="100"><div align="center"><a href="javascript:change(\'tregaina.jpg\')"><img src="images/room/thumb/tregaina.jpg" width="89" height="67" border="0"></a></div></td>' + '\n' +
'      <td height="67" width="86">&nbsp;</td>' + '\n' +
'      <td height="67" width="100"><div align="center"><a href="javascript:change(\'tregaina ensuite.jpg\')"><img src="images/room/thumb/tregaina ensuite.jpg" width="45" height="67" border="0"></a></div></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <br>' + '\n' +
'  This is our single room suitable for anyone travelling alone or on business. This enchanting room overlooks the lake and countryside. Features original beams and oak furniture and offers a stylish shower en-suite.';

treforda='  <table id="Room_Detail" width="600" height="200" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td id="Room_Image" width="300" height="200" align="center" valign="top"><a href="images/room/large/treforda.jpg" target="_blank"><img src="images/room/medium/treforda.jpg" alt="" name="main" width="300" height="200" border="0"></a></td>' + '\n' +
'      <td valign="top"><p><span class="Room_Name">Treforda</span></p>' + '\n' +
'        <table width="200" border="0">' + '\n' +
'          <tr>' + '\n' +
'            <td width="80">1-3 nights:</td>' + '\n' +
'            <td>&pound;36</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>3-6 nights: </td>' + '\n' +
'            <td>&pound;34</td>' + '\n' +
'          </tr>' + '\n' +
'          <tr>' + '\n' +
'            <td>7+ nights:</td>' + '\n' +
'            <td>&pound;32</td>' + '\n' +
'          </tr>' + '\n' +
'        </table>' + '\n' +
'      <p>&nbsp;</p></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <table width="300" border="0" cellpadding="1" cellspacing="2">' + '\n' +
'    <tr>' + '\n' +
'      <td height="67" width="100"><div align="center"><a href="javascript:change(\'treforda.jpg\')"><img src="images/room/thumb/treforda.jpg" width="100" height="67" border="0"></a></div></td>' + '\n' +
'      <td height="67" width="86">&nbsp;</td>' + '\n' +
'      <td height="67" width="100"><div align="center"><a href="javascript:change(\'treforda chair.jpg\')"><img src="images/room/thumb/treforda chair.jpg" width="100" height="67" border="0"></a></div></td>' + '\n' +
'    </tr>' + '\n' +
'  </table>' + '\n' +
'  <br>' + '\n' +
'  Charming double bedroom with king-size oak bed and tall open ceiling with original beams. A stylish shower en-suite and seating area with countryside and distant sea views.';