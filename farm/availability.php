<? include('../common/header.php'); ?>

<?= generateHeader() ?>

<iframe src="/availability/dates.php" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" width="695" height="85" frameborder="0"></iframe>
<iframe src="/availability/availability.php<?php echo '?month='.date("m").'&year='.date("Y"); ?>" name="mainFrame" scrolling="No" noresize="noresize" id="mainFrame" title="mainFrame" width="695" height="600" frameborder="0"></iframe>


<noframes>
<body></body>
</noframes>

<?= generateFooter() ?>