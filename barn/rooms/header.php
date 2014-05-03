
<? include_once($_SERVER['DOCUMENT_ROOT'] . 'header.php');

function generateRoomHeader() {
    ob_start(); ?>

        <style type="text/css">
        <!--
        .style1 {font-size: 24px}
        -->
        #main_table{
          left:0;
          top:0;
          position:absolute;
          }
        .room_container {
          margin-top  : 10px;
          width       : 185px;
          text-align  : center;
        }
        .main_page .mainContent {
            padding: 0px;
        }
        </style>
        <div style="position: relative;">
            <div style="
              text-align: center; 
              width     : 185px;
              overflow  : hidden;
              float     : left;
              ">

              <div class="room_container">
                <a href="/rooms/tredole.php">
                  Tredole
                  <img src="/images/room/nav/tredole.jpg" width="175" height="117" border="0" />
                </a>
              </div>
            
              <p style="background-color:#F9F3E3; width:100%; margin:0;">&nbsp;</p>
            
              <div class="room_container">
                <a href="/rooms/treweens.php">
                  Treweens
                  <img src="/images/room/nav/treweens.jpg" width="175" height="117" border="0" />
                </a>
              </div>
              
              <p style="background-color:#F9F3E3; width:100%; margin:0;">&nbsp;</p> 
            
              <div class="room_container">
                <a href="/rooms/tregaina.php">
                  Tregaina
                  <img src="/images/room/nav/tregaina.jpg" width="175" height="117" border="0" />
                </a>
              </div>
            
              <p style="background-color:#F9F3E3; width:100%; margin:0;">&nbsp;</p>
            
              <div class="room_container">
                <a href="/rooms/treforda.php">
                  Treforda
                  <img src="/images/room/nav/treforda.jpg" width="175" height="117" />
                </a>
              </div>  
            </div>
            
            <div style="
              width     : 510px;
              float     : left;
              padding-left : 10px;
              ">
    <?
    $roomHeader = ob_get_clean();
    return (generateHeader() . $roomHeader);
}


function generateRoomFooter() {
    ob_start(); ?>

            </div>
        </div>

    <?
    $roomFooter = ob_get_clean();
    return (generateFooter() . $roomFooter);
}
