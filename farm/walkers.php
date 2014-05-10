<? include('../common/header.php'); ?>

<?= generateHeader() ?>

<?

$slideShowImages = array(
    (object) array(
        'src' => 'images/walkers/cameltrail.jpg',
    ),
    (object) array(
        'src' => 'images/walkers/highcliff.jpg',
    )
);

?>

<div class="pull-right">
    <img src="images/walkers/cyclistswelcome.jpg" width="150" height="150" />
    <img src="images/walkers/walkerswelcome.jpg" width="150" height="150" />
</div>
<h3 class="page-top">Walkers and Cylists</h3>

<div class="clearfix"></div>


<?= generateSlideshow($slideShowImages, 'large'); ?>

<p>For the keen walker or cyclist, there is a cycle store and drying room.</p>
<p>You are spoilt for choice in respect of walks - there are numerous walks along the coastpath as far as from Bude to
    Port Isaac and beyond.</p>
<p>A very popular walk is parking in Tintagel and walking to Boscastle along the coast path and then catching a bus back
    to Tintagel - or if you are very energetic, walk back again! Buses are approximately every hour. There is a footpath
    from the farm leading to Boscastle - approximately one hours walk.</p>
<p>A few cyclists stopover when cycling from John O'Groats to Land End! Alternatively the Camel Trail
    offers 17 miles of traffic free cycling. We are also on The West Country Way, Cycle Route 3 between Bude and
    Camelford.</p>

<?= generateFooter() ?>
