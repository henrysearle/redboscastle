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

Pic[0] = 'images/surround/boscastle.jpg'
Pic[1] = 'images/surround/bossiny.jpg'
Pic[2] = 'images/surround/camelford.jpg'
Pic[3] = 'images/surround/strangles.jpg'
Pic[4] = 'images/surround/tintagel.jpg'
Pic[5] = 'images/surround/trebarwith.jpg'
Pic[6] = 'images/surround/view.jpg'


// =======================================
// do not edit anything below this line
// =======================================

var t
var j = 0
var p = Pic.length

var preLoad = new Array()
for (i = 0; i < p; i++){
   preLoad[i] = new Image()
   preLoad[i].src = Pic[i]
}

function runSlideShow(){
   if (document.all){
      document.images.SlideShow.style.filter="blendTrans(duration=2)"
      document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)"
      document.images.SlideShow.filters.blendTrans.Apply()      
   }
   document.images.SlideShow.src = preLoad[j].src
   if (document.all){
      document.images.SlideShow.filters.blendTrans.Play()
   }
   j = j + 1
   if (j > (p-1)) j=0
   t = setTimeout('runSlideShow()', slideShowSpeed)
}
</script>


<h2>Surrounding Area</h2>

<div class="centered" style="height:333px;">
  <img src="images/surround/view.jpg" name='SlideShow' />
</div>

<p>You are ideally based at Reddivallen for exploring the surrounding area of wonderful beaches and coves, cliff walks,  harbours, moorland, old churches and historic houses. There's a whole world to explore at the Eden Project.</p> 
<p>Cornwall can boast of its many renowned eateries, such at Rick Stein's in Padstow and Jamie Oliver's Fifteen near Newquay.</p>

<?= generateFooter() ?>
