<? include_once('header.php'); ?>

<?= generateRoomHeader() ?>


<?
$room = (object) array(
    'name'        => 'Tredole',
    'image1'      => 'treforda.jpg',
    'image2'      => 'treforda_chair.jpg',
    'roomId'      => 19,
    'prices'      => array(
        '1-3 nights:' => '&pound;42 pppn',
        '4-6 nights:' => '&pound;40 pppn',
        '7+ nights:'  => '&pound;38 pppn'
    ),
    'description' => '
        <p>There is a &pound;25 single supplement for this room.<br />
            A minimum stay of two nights over a weekend applies to all rooms.</p>
        <p>Charming double bedroom with king-size oak bed and tall open ceiling with original beams.</p>
        <p>A stylish shower en-suite and seating area with countryside and distant sea views.</p>'
);
?>

<?= generateRoomContent($room) ?>

<?= generateRoomFooter() ?>