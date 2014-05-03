

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

Pic[0] = 'images/farmhouse/farmhouse.jpg'
Pic[1] = 'images/farmhouse/entrace.jpg'
Pic[2] = 'images/farmhouse/monks_room.jpg'
Pic[3] = 'images/farmhouse/stairs.jpg'
Pic[4] = 'images/farmhouse/reddivallen_suite.jpg'
Pic[5] = 'images/farmhouse/farmhousemain.jpg'

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

<h2>The Farmhouse</h2>

<div class="centered">
  <img height="333" name='SlideShow' src="images/farmhouse/farmhouse.jpg"/>
</div>

<p>
  The Farmhouse, run by Anthony Brewer, is tastefully furnished and centrally heated throughout.
  The front door opens onto a slate hallway leading upstairs to the bedrooms.
  Downstairs there is a lounge for guests to sit and relax and in the winter a fire is lit for those colder evenings.
  The bedrooms enjoy the morning sun through the granite mullion windows.
</p>
<p>
  Reddivallen gets its name because of the oxide in its water supply. 
  The 17th century house was formerly the Manor House of Trevalga. 
  It is built in the shape of a letter 'E' with a central feature of a two storied gabled porch. 
  The doors and windows are of well furnished cut granite, a sign of superior status in its day, and the stone work of the walls is built of local slate set in thin layers.
</p>

<?= generateFooter() ?>
