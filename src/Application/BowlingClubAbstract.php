<?php
namespace Application;


abstract class BowlingClubAbstract
{
    /**
     * @var string
     */
    protected $_nameOfClub;

    /**
     * @var integer
     */
    protected $_pricePerHour;

    /**
     * @var integer
     */
    protected $_maxNumberOfPlayers;

    /**
     * @var array
     */
    private $_timeGraphic;

    /**
     * Method create DateTime object from date string
     *
     * @param $date string with date
     * @return \DateTime
     */
    protected function _getDateTimeObject($date)
    {
        return \DateTime::createFromFormat('Y-m-d H:i', $date);
    }

    /**
     * Method return diff between end date and start date
     * in seconds
     *
     * @param $startDate \DateTime
     * @param $endDate \DateTime
     * @return float integer
     */
    protected function _getDateTimeDiff($startDate, $endDate)
    {
        return floor(
            intval($endDate->getTimeStamp() - $startDate->getTimeStamp())
        );
    }

    /**
     * Method return string with availability of bowling tracks
     *
     * @return string
     */
    public function getTimeGraphic()
    {
        $string = '';
        foreach ($this->_timeGraphic as $bowlingTrack => $reservedDate) {
            $string .= 'Track: ' . $bowlingTrack . PHP_EOL;
            foreach ($reservedDate as $date => $reservedTime) {
                $string .= 'Date: ' . $date . PHP_EOL;
                foreach ($reservedTime as $time) {
                    $string .= 'Time: form ' . $time[0]  . ' to ' . $time[1] . PHP_EOL;
                }
            }
        }

        return $string;
    }

    /**
     * Method display tracks availability
     */
    public function timeGraphic()
    {
        echo nl2br($this->getTimeGraphic());
    }

    /**
     * @param $track integer
     * @param $dateWithTime string
     * @param $duration integer
     * @param $numberOfPlayers integer
     */
    public function reserveBowlingTrack($track, $dateWithTime, $duration, $numberOfPlayers)
    {

    }
}
