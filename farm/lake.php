<? include('../common/header.php'); ?>

<?= generateHeader() ?>

<script>
    // (C) 2000 www.CodeLifter.com
    // http://www.codelifter.com
    // Free for all users, but leave in this  header
    // NS4-6,IE4-6
    // Fade effect only in IE; degrades gracefully

    // =======================================
    // set the following variables
    // =======================================

    // Set slideShowSpeed (milliseconds)
    var slideShowSpeed = 2000

    // Duration of crossfade (seconds)
    var crossFadeDuration = 1

    // Specify the image files
    var Pic = new Array() // don't touch this
    // to add more images, just continue
    // the pattern, adding to the array below

    Pic[0] = 'images/lake/lake3.jpg'
    Pic[1] = 'images/lake/barn.jpg'
    Pic[2] = 'images/lake/lake2.jpg'
    Pic[3] = 'images/lake/lake1.jpg'

    // =======================================
    // do not edit anything below this line
    // =======================================

    var t
    var j = 0
    var p = Pic.length

    var preLoad = new Array()
    for (i = 0; i < p; i++) {
        preLoad[i] = new Image()
        preLoad[i].src = Pic[i]
    }

    function runSlideShow() {
        if (document.all) {
            document.images.SlideShow.style.filter = "blendTrans(duration=2)"
            document.images.SlideShow.style.filter = "blendTrans(duration=crossFadeDuration)"
            document.images.SlideShow.filters.blendTrans.Apply()
        }
        document.images.SlideShow.src = preLoad[j].src
        if (document.all) {
            document.images.SlideShow.filters.blendTrans.Play()
        }
        j = j + 1
        if (j > (p - 1)) j = 0
        t = setTimeout('runSlideShow()', slideShowSpeed)
    }
</script>

<h2>The Lake</h2>

<div class="centered">
    <img height="333" src="images/lake/lake3.jpg" name="SlideShow" />
</div>

<p>There is a well developed Lake near the farm, where mirrored Carp have been introduced for anyone who is keen to
    fish.</p>
<p>It provides habitat for a range of species. Ducks and frogs come to mind but look a little closer and you will see
    all manner of life such as sticklebacks and water boatmen, and many more.</p>
<p>There are platforms for you to fish from overlooking the valley while you sit and wait for your catch!</p>

<?= generateFooter() ?>
