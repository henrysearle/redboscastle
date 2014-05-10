<? include('../common/header.php'); ?>

<?= generateHeader() ?>

<?

$slideShowImages = array(
    (object) array(
        'src' => 'images/surround/boscastle.jpg',
    ),
    (object) array(
        'src' => 'images/surround/bossiny.jpg',
    ),
    (object) array(
        'src' => 'images/surround/camelford.jpg',
    ),
    (object) array(
        'src' => 'images/surround/strangles.jpg',
    ),
    (object) array(
        'src' => 'images/surround/tintagel.jpg',
    ),
    (object) array(
        'src' => 'images/surround/trebarwith.jpg',
    ),
    (object) array(
        'src' => 'images/surround/view.jpg',
    )
);

?>

<h3 class="page-top">Surrounding Area</h3>

<?= generateSlideshow($slideShowImages, 'large'); ?>

<p>You are ideally based at Reddivallen for exploring the surrounding area of wonderful beaches and coves, cliff walks,
    harbours, moorland, old churches and historic houses. There's a whole world to explore at the Eden Project.</p>
<p>Cornwall can boast of its many renowned eateries, such at Rick Stein's in Padstow and Jamie Oliver's Fifteen near
    Newquay.</p>

<?= generateFooter() ?>
