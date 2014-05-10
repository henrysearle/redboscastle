<? include_once('header.php'); ?>

<?= generateRoomHeader() ?>

<?
$room = (object) array(
    'name'        => 'Treweens',
    'image1'      => 'treweens.jpg',
    'image2'      => 'treweens_jacuzzi.jpg',
    'roomId'      => 24,
    'prices'      => array(
        '1-3 nights:' => '&pound;50 pppn',
        '4-6 nights:' => '&pound;48 pppn',
        '7+ nights:'  => '&pound;46 pppn'
    ),
    'description' => '
        <p>
            Minimum occupancy of 2 persons.<br />
            A minimum stay of two nights over a weekend applies to all rooms.
        </p>
        <p>
            Indulge yourself in a spacious double room with a king-size bed, lounge area and a
            luxury en-suite bathroom with a whirlpool bath and shower.<br />
            Tall open ceiling with original beams, beautiful furnishings and solid oak
            furniture. Countryside and lake views.
        </p>
'
);
?>

<?= generateRoomContent($room) ?>




<?= generateRoomFooter() ?>