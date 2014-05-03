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

    Pic[0] = 'images/walkers/cameltrail.jpg'
    Pic[1] = 'images/walkers/highcliff.jpg'

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

<style type="text/css">
    <!--
    .style1 {
        font-size: xx-large
    }

    .style2 {
        font-family: "Times New Roman", Times, serif
    }

    -->
</style>


<table width="600" border="0" cellpadding="0">
    <tr>
        <td width="242"><span class="Room_Name">Walkers and Cylists</span></td>
        <td width="175">
            <div align="center"><img src="images/walkers/cyclistswelcome.jpg" width="150" height="150" /></div>
        </td>
        <td width="175">
            <div align="center"><img src="images/walkers/walkerswelcome.jpg" width="150" height="150" /></div>
        </td>
    </tr>
</table>
<br />
<div class="centered">
    <img src="images/walkers/cameltrail.jpg" name="SlideShow" width="500" height="333" />
</div>

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
