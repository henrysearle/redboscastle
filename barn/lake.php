<? include('../common/header.php'); ?>

<?= generateHeader() ?>


<?

$slideShowImages = array(
    (object) array(
        'src' => 'images/lake/lake3.jpg',
    ),
    (object) array(
        'src' => 'images/lake/barn.jpg',
    ),
    (object) array(
        'src' => 'images/lake/lake2.jpg',
    ),
    (object) array(
        'src' => 'images/lake/lake1.jpg'
    ),
);

?>

<h2 class="page-top">The Lake</h2>

<?= generateSlideshow($slideShowImages, 'large'); ?>

<p>There is a well developed Lake near the farm, where mirrored Carp have been introduced for anyone who is keen to
    fish.</p>
<p>It provides habitat for a range of species. Ducks and frogs come to mind but look a little closer and you will see
    all manner of life such as sticklebacks and water boatmen, and many more.</p>
<p>There are platforms for you to fish from overlooking the valley while you sit and wait for your catch!</p>

<?= generateFooter() ?>
