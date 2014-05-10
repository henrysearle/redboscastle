<?

$include = str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'] . '/../common/header.php');
include_once($include);


$include = str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'] . '/../common/room_header.php');
include_once($include);

function generateRoomHeader() {
ob_start(); ?>

<div class="row">
    <div class="col-md-3">
        <div class="row">
            <div class="col-xs-6 col-md-12 room_container">
                <a href="/rooms/reddivallen_suite.php#content">
                    Reddivallen Suite
                    <img class="full-width" src="/images/room/nav/reddivallen_suite.jpg" />
                </a>
            </div>

            <hr class="visible-md visible-lg" />

            <div class="col-xs-6 col-md-12 room_container">
                <a href="/rooms/monks_room.php#content">
                    Monk's Room
                    <img class="full-width" src="/images/room/nav/monks_room.jpg" />
                </a>
            </div>
        </div>
    </div>


    <hr class="visible-xs visible-sm" />

    <div class="col-md-9">
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
