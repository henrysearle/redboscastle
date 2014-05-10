<?

function getSiteName() {
    $subFolder = $_SERVER['DOCUMENT_ROOT'];
    $folders = explode('/', $subFolder);
    return $folders[5];
}

function getCurrentPage() {
    return $_SERVER['SCRIPT_NAME'];
}

function getEnvironment() {
    if (strpos($_SERVER['DOCUMENT_ROOT'], 'bitnami') !== false) {
        return 'dev';
    }
    return 'prd';
}

function getDevSite() {
    return 'localhost:8080';
}

$include = str_replace('//', '/', $_SERVER['DOCUMENT_ROOT'] . '/header.php');
include_once($include);

if (getEnvironment() == 'dev') {
    error_reporting(~0);
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
}

function generateHeader() {
    $links = getLinks();
    $devSite = getDevSite();
    ob_start(); ?>

    <html>
    <head>
        <meta name="description" content="Quality Five Star Gold Award Bed and Breakfast in Boscastle, Cornwall" />
        <meta name="keywords" content="Boscastle, Cornwall, North Cornwall, Bed and Breakfast, Quality, Luxury, Reddivallen, Redivallen, Reddivalen, Eden Project" />
        <title>Reddivallen, Quality Bed and Breakfast in Boscastle, Cornwall</title>
        <? if (getEnvironment() == 'prd') { ?>
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
            <link href="http://www.henrysearle.com/common/static/flat-ui/css/flat-ui.css" rel="stylesheet">
            <link href="http://www.henrysearle.com/common/static/bootstrap-datepicker/css/datepicker.css" rel="stylesheet">
        <? } else { ?>
            <link href="http://<?= $devSite ?>/common/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="http://<?= $devSite ?>/common/static/bootstrap-datepicker/css/datepicker.css" rel="stylesheet">
            <link href="http://<?= $devSite ?>/common/static/flat-ui/css/flat-ui.css" rel="stylesheet">
        <? } ?>
        <link href="/static/common.css" rel="stylesheet">
        <link href="/redboscastle.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no">
    </head>

    <body>
    <div class="header">
        <div class="container background-color rounded-bottom-xs">
            <div class="row">
                <div class="hidden-xs image col-xs-5">
                    <img class="full-width" src="/images/nav-image.jpg">
                </div>
                <div class="col-sm-7 color-black">
                    <div class="logo">
                        <img src="/images/logo.png">
                    </div>
                    <div class="pull-right">
                        <img class="rating" src="/images/ratings/gold.png">
                        <img class="rating" src="/images/ratings/5star.png">
                    </div>
                    <div class="phone">01840 250854</div>
                    <div class="email">
                        <a class="color-black" href="mailto:enquiries@reddivallenfarm.com">
                            enquiries@reddivallenfarm.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content" class="container nav-page-content">
    <div class="row same-column-height">
    <div class="col-sm-4 col-md-3 background-color sidebar hang-left rounded-bottom rounded-top-xs">
        <div class="sidebar-nav">
            <div class="navbar" role="navigation">
                <div class="navbar-header " data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="visible-xs navbar-brand">Menu</span>
                </div>
                <div class="navbar-collapse collapse sidebar-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <? foreach ($links as $link) { ?>
                            <li class="<?= getCurrentPage() == $link->href ? 'active' : '' ?>">
                                <a href="<?= $link->href ?>"><?= $link->text ?></a>
                            </li>
                        <? } ?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>

    <div class="col-sm-8 col-md-9 background-color rounded-bottom rounded-top-xs pad-top">


    <?
    return ob_get_clean();

}

function generateFooter() {
    ob_start();
    $devSite = getDevSite();
    ?>
    </div>
    </div>
    </div>
    <? if (getEnvironment() == 'prd') { ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="http://www.henrysearle.com/common/static/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>

        <script type="text/javascript">
            _uacct = "UA-2731216-1";
            urchinTracker();
        </script>
    <? } else { ?>
        <script src="http://<?= $devSite ?>/common/static/jquery/js/jquery-1.10.2.min.js"></script>
        <script src="http://<?= $devSite ?>/common/static/bootstrap/js/bootstrap.min.js"></script>
        <script src="http://<?= $devSite ?>/common/static/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <? } ?>
    <script src="/static/common.js"></script>

    </body>
    </html>
    <?
    return ob_get_clean();
}

function generateSlideshow($slideShowImages, $height = 'medium') {

    ob_start();
    if (isset($slideShowImages)) {
        ?>
        <div id="carousel-index" class="carousel slide fixed-height fixed-height-<?= $height ?>" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <? foreach ($slideShowImages as $i => $image) { ?>
                    <li data-target="#carousel-index" data-slide-to="<?= $i ?>" class="<?=
                    $i == 0 ? 'active' : '' ?>"></li>
                <? } ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <? foreach ($slideShowImages as $i => $image) { ?>
                    <div class="item <?= $i == 0 ? 'active' : '' ?> text-center">
                        <img class="center " src="<?= $image->src ?>">
                    </div>
                <? } ?>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-index" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-index" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    <?
    }
    return ob_get_clean();
}