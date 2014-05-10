<? include('../common/header.php'); ?>

<?= generateHeader() ?>


<?

$slideShowImages = array(
    (object) array(
        'src' => 'images/farm/cow.jpg',
    ),
    (object) array(
        'src' => 'images/farm/cows.jpg',
    ),
    (object) array(
        'src' => 'images/main/farm.jpg',
    ),
    (object) array(
        'src' => 'images/main/sunset.jpg',
    ),
    (object) array(
        'src' => 'images/farm/wildlife.jpg',
    )
);

?>

<h2 class="page-top">The Farm</h2>

<p>
    Your hosts at Reddivallen pride themselves on being stewards of the countryside.
</p>

<div>
    <div class="pull-left pad-right">
        <img class="full-width" src="images/farm/award.jpg"/>
    </div>

    <p style="margin-top:0px;">Reddivallen was winning farm of the 2010 Otter Trophy Competition for encouraging wildlife conservation
        alongside a high standard of commercial farming.</p>

    <p>Reddivallen, lies just south of Boscastle in an AONB (Area of Outstanding Natural Beauty) equidistant between two
        internationally designated wildlife sites - the North Cornwall Coast and the upper Camel Valley, so that its
        place in the landscape is as important as a stepping stone for wildlife.</p>
</div>

<div>The wildlife benefits from the organic mixed farming system, with the addition of the wet
    and wooded valley bottom and extensive areas of unimproved permanent pasture.
</div>

<p>We tend to take many of the features of our countryside for granted, assuming they are naturally occurring. It is in
    fact a worked countryside and not a natural one. Most of its features were put there by farmers over many
    generations and now maintained by farmers.
</p>

<?= generateSlideshow($slideShowImages, 'large'); ?>

<p>
    The 420 acre farm produces Organic Beef and Lamb consisting of 90 Suckler Cows and 300 Breeding Ewes.
</p>

<p>Traditional Herefords are also bred at the farm. </p>

<p>The Beef can be tasted by guests when it is on the menu for Dinner!</p>

<?= generateFooter() ?>
