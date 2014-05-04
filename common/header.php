<?

function getSiteName() {
    $subFolder = $_SERVER['DOCUMENT_ROOT'];
    $folders = explode('/', $subFolder);
    return $folders[5];
}

function getCurrentPage() {
    return $_SERVER['SCRIPT_NAME'];
}

include_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');

function generateHeader() {
    $links = getLinks();
    ob_start(); ?>

    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="description" content="Quality Five Star Gold Award Bed and Breakfast in Boscastle, Cornwall" />
        <meta name="keywords" content="Boscastle, Cornwall, North Cornwall, Bed and Breakfast, Quality, Luxury, Reddivallen, Redivallen, Reddivalen, Eden Project" />
        <title>Reddivallen, Quality Bed and Breakfast in Boscastle, Cornwall</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://www.henrysearle.com/common/static/flat-ui/css/flat-ui.css" rel="stylesheet">
        <link href="/static/common.css" rel="stylesheet">
        <link href="/redboscastle.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    <div class="header">
        <div class="container background-color">
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
    <div class="container nav-page-content">
        <div class="row same-column-height">
            <div class="col-sm-4 col-md-3 background-color hang-left rounded-bottom">
                <div class="sidebar-nav">
                    <div class="navbar" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <span class="visible-xs navbar-brand">Sidebar menu</span>
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

            <div class="col-sm-8 col-md-9 background-color rounded-bottom">


    <?
    return ob_get_clean();

}

function generateFooter() {
    ob_start(); ?>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>

    <script type="text/javascript">
        _uacct = "UA-2731216-1";
        urchinTracker();
    </script>

    </body>
    </html>
    <?
    return ob_get_clean();
}