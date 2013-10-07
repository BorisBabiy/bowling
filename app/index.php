<?php

$loader = require realpath(dirname(__FILE__)) . '/../vendor/autoload.php';

use Application\BowlingClubCherkassy;

$BowlingClubCherkassy = new BowlingClubCherkassy();
$BowlingClubCherkassy->setNameOfClub('First bowling club in Cherkassy');
$BowlingClubCherkassy->setMaxNumberOfPlayers(5);
$BowlingClubCherkassy->setPricePerHour('75');
$BowlingClubCherkassy->reserveBowlingTrack(1, '2013-10-01 08:00', 120, 5);
$BowlingClubCherkassy->reserveBowlingTrack(2, '2013-10-03 12:00', 90, 6);
$BowlingClubCherkassy->reserveBowlingTrack(3, '2013-10-02 10:00', 60, 4);
