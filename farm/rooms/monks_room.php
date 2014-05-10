<? include_once('header.php'); ?>

<?= generateRoomHeader() ?>

<?
$room = (object) array(
    'name'        => 'Monk\'s Room',
    'image1'      => 'monks_annexe.jpg',
    'image2'      => 'monks_room.jpg',
    'roomId'      => 22,
    'prices'      => array(
        '1-3 nights:' => '&pound;42 pppn',
        '4-6 nights:' => '&pound;40 pppn',
        '7+ nights:'  => '&pound;38 pppn'
    ),
    'description' => '
        <p>
            There is a &pound;25 single supplement for this room.<br />
            A minimum stay of two nights over a weekend applies to all rooms.
        </p>
        <p>
            A charming bedroom with a king size bed and shower en-suite.
            There is an annexe through a granite doorway which sits over the front porch -
            a little room with a slate floor, a chair and a shelf for storage or to write on.
            The window looks out onto the walled front garden. Called \'The Monk\'s Room\'
            because we believe it resembles a prayer room!
        </p>'
);
?>

<?= generateRoomContent($room) ?>

<?= generateRoomFooter() ?>
