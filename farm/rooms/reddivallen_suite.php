<? include_once('header.php'); ?>

<?= generateRoomHeader() ?>

<?
$room = (object) array(
    'name'        => 'Reddivallen Suite',
    'image1'      => 'reddivallen_suite.jpg',
    'image2'      => 'reddivallen_ensuite.jpg',
    'roomId'      => 23,
    'prices'      => array(
        '1-3 nights:' => '&pound;47 pppn',
        '4-6 nights:' => '&pound;45 pppn',
        '7+ nights:'  => '&pound;33 pppn'
    ),
    'description' => '
        <p>
            Minimum occupancy of 2 persons.<br /> A minimum stay of two nights over a weekend applies to all rooms.
        </p>
        <p>
            A very spacious room with a king size bed and sofa in a lounge area to sit and read or watch television in
            your own private space. There is a shower en-suite with a window looking out onto the walled front garden.
        </p>'
);
?>

<?= generateRoomContent($room) ?>

<?= generateRoomFooter() ?>
