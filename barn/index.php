<? include('../common/header.php'); ?>

<?= generateHeader() ?>

<?

$slideShowImages = array(
    (object) array(
        'src' => 'images/main/farm.jpg',
    ),
    (object) array(
        'src' => 'images/main/patio.jpg',
    ),
    (object) array(
        'src' => 'images/main/sunset.jpg',
    ),
    (object) array(
        'src' => 'images/barn/barn.jpg',
    ),
    (object) array(
        'src' => 'images/barn/tredole.jpg',
    ),
    (object) array(
        'src' => 'images/barn/dining room.jpg',
    ),
    (object) array(
        'src' => 'images/barn/tregaina.jpg',
    ),
    (object) array(
        'src' => 'images/barn/lake.jpg',
    ),
    (object) array(
        'src' => 'images/barn/treforda.jpg',
    ),
    (object) array(
        'src' => 'images/barn/lounge.jpg',
    ),
    (object) array(
        'src' => 'images/barn/treweens.jpg',
    ),
    (object) array(
        'src' => 'images/barn/path.jpg',
    ),
);

?>

    <div class="text-center">

        <div class="cross-sell row hidden-xs">
            <div class="col-sm-4">
                <a href="http://farm.redboscastle.com"><img class="full-width" src="/images/farmhouse/farmhouse.jpg" /></a>
            </div>
            <div class="col-sm-8 text-left">
                <h5>
                    <a href="http://farm.redboscastle.com">Reddivallen Farmhouse</a>
                </h5>
                Find more accommodation at <a href="http://barn.redboscastle.com">Reddivallen Farmhouse</a>
            </div>
            <div class="clearfix"></div>
            <hr />
        </div>

        <p>Quality Bed and Breakfast In Boscastle, Cornwall</p>

        <p><span style="font-weight : bold;">SPECIAL OFFER</span><br />
            Throughout the months of February, March, April and October <br />(with the exception of Easter and
            Bank Holidays)<br /> <strong>Stay 2 nights or more and stay an extra night for free</strong>
        </p>

        <p>Open from February to October</p>

        <p><img src="/images/wifilogo.png" style="position: relative; top: 6px;" /> Free WiFi in all rooms</p>

        <?= generateSlideshow($slideShowImages) ?>

        <p>
            Reddivallen is tucked away in a secluded location offering the
            tranquil of the countryside. Your hosts, pride
            themselves on the quality of service they offer to make your stay at
            Reddivallen something to remember.
        </p>

        <p>
            At Reddivallen you can immerse yourself in nature and capture the
            inspiring bio-diversity of the countryside. &nbsp;Situated just a few
            minutes away from the breathtaking coastline of North Cornwall.
        </p>

        <p>
            The grounds are landscaped with grass and shrubs with a fishing
            lake. Guests can either fish or stroll around the lake taking in all the
            wildlife and surrounding valley. Sometimes Roe Deer can be seen, or a
            Cormorant that frequents the lake! and maybe the occasional fox.<br />
            Walkers and cyclists are welcome
        </p>
    </div>

<?= generateFooter() ?>
