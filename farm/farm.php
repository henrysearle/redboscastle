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

    Pic[0] = 'images/farm/cow.jpg'
    Pic[1] = 'images/farm/cows.jpg'
    Pic[2] = 'images/farm/farm.jpg'
    Pic[3] = 'images/farm/sunset.jpg'
    Pic[4] = 'images/farm/wildlife.jpg'

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

<h2>The Farm</h2>

<p>
    Your hosts at Reddivallen pride themselves on being stewards of the countryside.
</p>

<div style="float:left; width:100%; vertical-align:top; height:234px;">
    <img src="images/farm/award.jpg" width="350" height="234" align="left" style="padding-right:5px; padding-bottom:5px;" />

    <p style="margin-top:0px;">Winning farm of the 2010 Otter Trophy Competition for encouraging wildlife conservation
        alongside a high standard of commercial farming.</p>

    <p>Reddivallen, lies just south of Boscastle in an AONB (Area of Outstanding Natural Beauty) equidistant between two
        internationally designated wildlife sites - the North Cornwall Coast and the upper Camel Valley, so that its
        place in the landscape is as important as a stepping stone for wildlife.</p>
</div>

<div style="display:block;">The wildlife benefits from the organic mixed farming system, with the addition of the wet
    and wooded valley bottom and extensive areas of unimproved permanent pasture.
</div>

<p>We tend to take many of the features of our countryside for granted, assuming they are naturally occurring. It is in
    fact a worked countryside and not a natural one. Most of its features were put there by farmers over many
    generations and now maintained by farmers.
</p>

<div class="centered">
    <img height="333" src="images/farm/cow.jpg" name='SlideShow' />
</div>



<p>
    The 420 acre farm produces Organic Beef and Lamb consisting of 90 Suckler Cows and 300 Breeding Ewes.
</p>

<p>Traditional Herefords are also bred at the farm. </p>

<p>The Beef can be tasted by guests when it is on the menu for Dinner!</p>

<?= generateFooter() ?>
