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
                <a href="/rooms/tredole.php#content">
                    Tredole
                    <img class="full-width" src="/images/room/nav/tredole.jpg" />
                </a>
            </div>

            <hr class="visible-md visible-lg" />

            <div class="col-xs-6 col-md-12 room_container">
                <a href="/rooms/treweens.php#content">
                    Treweens
                    <img class="full-width" src="/images/room/nav/treweens.jpg" />
                </a>
            </div>

            <hr class="visible-md visible-lg" />

            <div class="col-xs-6 col-md-12 room_container">
                <a href="/rooms/tregaina.php#content">
                    Tregaina
                    <img class="full-width" src="/images/room/nav/tregaina.jpg" />
                </a>
            </div>

            <hr class="visible-md visible-lg" />

            <div class="col-xs-6 col-md-12 room_container">
                <a href="/rooms/treforda.php#content">
                    Treforda
                    <img class="full-width" src="/images/room/nav/treforda.jpg" />
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
