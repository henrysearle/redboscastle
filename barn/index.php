<? include('../common/header.php'); ?>

<?= generateHeader() ?>

    <div style="text-align:center;">
test

        <table align="center">
            <tr>
                <td>
                    <a href="http://farm.redboscastle.com"><img width="200" src="/images/farmhouse/farmhouse.jpg" /></a>
                </td>
                <td>
                    <h2 style="text-align: left">
                        <a href="http://farm.redboscastle.com" style="text-decoration: none">Reddivallen Farmhouse</a>
                    </h2>
                    Find more accommodation in <a href="http://farm.redboscastle.com">Reddivallen Farmhouse</a>
                </td>
            </tr>
        </table>

        <hr />

        <p>Quality Bed and Breakfast In Boscastle, Cornwall</p>

        <p><span style="font-weight : bold;">SPECIAL OFFER</span><br/>
            Throughout the months of February, March, April and October <br />(with the exception of Easter and
            Bank Holidays)<br /> <strong>Stay 2 nights or more and stay an extra night for free</strong>
        </p>

        <p>Open from February to October</p>

        <p><img src="/images/wifilogo.png" style="position: relative; top: 6px;"/> Free WiFi in all rooms</p>

        <img src="images/barn/barn.jpg" name='SlideShow' alt="" />

        <p>
            Reddivallen is tucked away in a secluded location offering the
            tranquil of the countryside. Your hosts, pride
            themselves on the quality of service they offer to make your stay at
            Reddivallen something to remember.
        </p>

        <p>
            At Reddivallen you can immerse yourself in nature and capture the
            inspiring bio-diversity of the countryside. &nbsp;Situated just a few
            minutes away from the breathtaking coastline of North Cornwall.
        </p>

        <p>
            The grounds are landscaped with grass and shrubs with a fishing
            lake. Guests can either fish or stroll around the lake taking in all the
            wildlife and surrounding valley. Sometimes Roe Deer can be seen, or a
            Cormorant that frequents the lake! and maybe the occasional fox.<br />
            Walkers and cyclists are welcome
        </p>
    </div>


    <script type="text/javascript">

        function changeSrc(imagename) {
            document.getElementById("Main_Image").src = imagename;
        }


        // (C) 2000 www.CodeLifter.com
        // http://www.codelifter.com
        // Free for all users, but leave in this  header
        // NS4-6,IE4-6
        // Fade effect only in IE; degrades gracefully

        // =======================================
        // set the following variables
        // =======================================


        // Set slideShowSpeed (milliseconds)
        var slideShowSpeed = 2000;

        // Duration of crossfade (seconds)
        var crossFadeDuration = 1;

        // Specify the image files
        var Pic = new Array(); // don't touch this

        // to add more images, just continue
        // the pattern, adding to the array below


        Pic[0] = 'images/main/farm.jpg';
        Pic[1] = 'images/main/patio.jpg';
        Pic[2] = 'images/main/sunset.jpg';
        Pic[3] = 'images/barn/barn.jpg';
        Pic[4] = 'images/barn/tredole.jpg';
        Pic[5] = 'images/barn/dining room.jpg';
        Pic[6] = 'images/barn/tregaina.jpg';
        Pic[7] = 'images/barn/lake.jpg';
        Pic[8] = 'images/barn/treforda.jpg';
        Pic[9] = 'images/barn/lounge.jpg';
        Pic[10] = 'images/barn/treweens.jpg';
        Pic[11] = 'images/barn/path.jpg';

        // =======================================
        // do not edit anything below this line
        // =======================================

        var t;
        var j = 0;
        var p = Pic.length;

        var preLoad = new Array();
        for (i = 0; i < p; i++) {
            preLoad[i] = new Image();
            preLoad[i].src = Pic[i]
        }

        function runSlideShow() {
            if (document.all) {
                document.images.SlideShow.style.filter = "blendTrans(duration=2)";
                document.images.SlideShow.style.filter = "blendTrans(duration=crossFadeDuration)";
                document.images.SlideShow.filters.blendTrans.Apply()
            }

            document.images.SlideShow.src = preLoad[j].src;
            if (document.all) {
                document.images.SlideShow.filters.blendTrans.Play()
            }

            j = j + 1;
            if (j > (p - 1)) j = 0;
            t = setTimeout('runSlideShow()', slideShowSpeed)
        }

        runSlideShow();

    </script>

<?= generateFooter() ?>