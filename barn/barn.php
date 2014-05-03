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

Pic[0] = 'images/barn/barn.jpg'
Pic[1] = 'images/barn/tredole.jpg'
Pic[2] = 'images/barn/dining room.jpg'
Pic[3] = 'images/barn/tregaina.jpg'
Pic[4] = 'images/barn/lake.jpg'
Pic[5] = 'images/barn/treforda.jpg'
Pic[6] = 'images/barn/lounge.jpg'
Pic[7] = 'images/barn/treweens.jpg'
Pic[8] = 'images/barn/path.jpg'

// =======================================
// do not edit anything below this line
// =======================================

var t
var j = 0
var p = Pic.length

var preLoad = new Array()
for (i = 0; i < p; i++)
{
   preLoad[i] = new Image()
   preLoad[i].src = Pic[i]
}

function runSlideShow(){
if (document.all)
   {
      document.images.SlideShow.style.filter="blendTrans(duration=2)"
      document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)"
      document.images.SlideShow.filters.blendTrans.Apply()      
   }
   document.images.SlideShow.src = preLoad[j].src
if (document.all)
   {
      document.images.SlideShow.filters.blendTrans.Play()
   }
   j = j + 1
   if (j > (p-1)) j=0
   t = setTimeout('runSlideShow()', slideShowSpeed)
}
</script>

<h2>The Barn</h2>

<div class="centered">
  <img height="333" src="images/barn/barn.jpg" name="SlideShow"/>
</div>

<p>The Barn conversion, run by Liz Brewer, was completed in May 2007 creating a further four en-suite bedrooms. This is situated just opposite the Farmhouse.</p> 
<p>The grounds are landscaped with grass and a fishing lake. Guests can either fish or stroll around the lake taking in all the wildlife and surrounding countryside. Sometimes we see Roe Deer, or a Cormorant that frequents the lake! and maybe the occasional fox.</p>

<?= generateFooter() ?>

