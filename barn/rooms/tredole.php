<? include_once('header.php'); ?>

<?= generateRoomHeader() ?>

<?
$room = (object) array(
    'name'        => 'Tredole',
    'image1'      => 'tredole.jpg',
    'image2'      => 'tredole_wet_room.jpg',
    'roomId'      => 24,
    'prices'      => array(
        '1-3 nights:' => '&pound;36 pppn',
        '4-6 nights:' => '&pound;34 pppn',
        '7+ nights:'  => '&pound;32 pppn'
    ),
    'description' => '
        <p>There is a &pound;25 single supplement for this room.<br />
            A minimum stay of two nights over a weekend applies to all rooms.</p>
        <p>Comfortable ground floor double bedroom, tastefully furnished with a double oak bed and furniture including a wet room consisiting of shower, toilet and washbasin.</p>
        <p>Suitable for the less able.</p>'
);
?>

<?= generateRoomContent($room) ?>

<?= generateRoomFooter() ?>