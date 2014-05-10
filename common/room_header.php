<?


function generateRoomContent($room) {
    ob_start(); ?>


    <h2 class="page-top"><?= $room->name ?></h2>

    <div class="row">
        <div class="col-sm-6">
            <a href="../images/room/large/<?= $room->image1 ?>" target="_blank">
                <img class="full-width" src="../images/room/medium/<?= $room->image1 ?>">
            </a>

            <h4>Prices</h4>

            <div class="row">
                <? foreach ($room->prices as $name => $amount) { ?>
                    <div class="col-xs-6">
                        <?= $name ?>
                    </div>
                    <div class="col-xs-6">
                        <?= $amount ?>
                    </div>
                <? } ?>
            </div>
        </div>


        <div class="col-sm-6">

            <a class="hidden-xs" href="../images/room/large/<?= $room->image2 ?>" target="_blank">
                <img class="full-width" src="../images/room/medium/<?= $room->image2 ?>" />
            </a>

            <hr />

            <h6>Availability</h6>
            <iframe frameborder="0" scrolling="no" name="room_frame" id="room_frame" width="205" height="175" src="http://calendar.henrysearle.com/calendars/redboscastle/oneday.php?room=<?= $room->roomId ?>"></iframe>

        </div>
    </div>

    <div class="pad-top pad-right">
        <?= $room->description ?>
    </div>
    <?
    return ob_get_clean();

}