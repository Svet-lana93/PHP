<?php
$handle = fopen ("php://stdin","r");
$numberOfRoom = fgets($handle);
$roomsOnFloor = fgets($handle);
$floorsInBuilding = fgets($handle);

$roomsInEntrance = $floorsInBuilding * $roomsOnFloor;

$entrance = floor($numberOfRoom / $roomsInEntrance + 1 % (1 + $numberOfRoom % $roomsInEntrance));
if ($entrance > 1) {
    $floor = ceil(($numberOfRoom - (($entrance - 1) * $roomsInEntrance)) / $roomsOnFloor);
} else {
    $floor = $numberOfRoom / $roomsOnFloor;
}
echo 'Entrance is: ' . $entrance . ' ' . 'Floor is: ' . $floor;