<?php

namespace Application;


class BowlingClubCherkassy extends BowlingClubAbstract
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
     * @var array Store: bowling track => date => time
     */
    private $_timeGraphic = array(
        1 => array(
            '2013-10-01' => array(
                0 => array(
                    '08:00', '10:00'
                ),
                1 => array(
                    '12:00', '16:00'
                )
            ),
            '2013-10-02' => array(
                0 => array(
                    '07:00', '11:00'
                ),
                1 => array(
                    '11:00', '12:00'
                )
            ),
            '2013-10-03' => array(
                0 => array(
                    '09:00', '10:00'
                ),
                1 => array(
                    '14:00', '15:00'
                )
            )
        ),
        2 => array(
            '2013-10-01' => array(
                0 => array(
                    '08:00', '10:00'
                ),
                1 => array(
                    '12:00', '16:00'
                )
            ),
            '2013-10-02' => array(
                0 => array(
                    '07:00', '11:00'
                ),
                1 => array(
                    '11:00', '12:00'
                )
            ),
            '2013-10-03' => array(
                0 => array(
                    '09:00', '10:00'
                ),
                1 => array(
                    '14:00', '15:00'
                )
            )
        ),
        3 => array(
            '2013-10-01' => array(
                0 => array(
                    '08:00', '10:00'
                ),
                1 => array(
                    '12:00', '16:00'
                )
            ),
            '2013-10-02' => array(
                0 => array(
                    '07:00', '11:00'
                ),
                1 => array(
                    '11:00', '12:00'
                )
            ),
            '2013-10-03' => array(
                0 => array(
                    '09:00', '10:00'
                ),
                1 => array(
                    '14:00', '15:00'
                )
            )
        ),
        4 => array(
            '2013-10-01' => array(
                0 => array(
                    '08:00', '10:00'
                ),
                1 => array(
                    '12:00', '16:00'
                )
            ),
            '2013-10-02' => array(
                0 => array(
                    '07:00', '11:00'
                ),
                1 => array(
                    '11:00', '12:00'
                )
            ),
            '2013-10-03' => array(
                0 => array(
                    '09:00', '10:00'
                ),
                1 => array(
                    '14:00', '15:00'
                )
            )
        ),
        5 => array(
            '2013-10-01' => array(
                0 => array(
                    '08:00', '10:00'
                ),
                1 => array(
                    '12:00', '16:00'
                )
            ),
            '2013-10-02' => array(
                0 => array(
                    '07:00', '11:00'
                ),
                1 => array(
                    '11:00', '12:00'
                )
            ),
            '2013-10-03' => array(
                0 => array(
                    '09:00', '10:00'
                ),
                1 => array(
                    '14:00', '15:00'
                )
            )
        ),
        6 => array(
            '2013-10-01' => array(
                0 => array(
                    '08:00', '10:00'
                ),
                1 => array(
                    '12:00', '16:00'
                )
            ),
            '2013-10-02' => array(
                0 => array(
                    '07:00', '11:00'
                ),
                1 => array(
                    '11:00', '12:00'
                )
            ),
            '2013-10-03' => array(
                0 => array(
                    '09:00', '10:00'
                ),
                1 => array(
                    '14:00', '15:00'
                )
            )
        ),
        7 => array(
            '2013-10-01' => array(
                0 => array(
                    '08:00', '10:00'
                ),
                1 => array(
                    '12:00', '16:00'
                )
            ),
            '2013-10-02' => array(
                0 => array(
                    '07:00', '11:00'
                ),
                1 => array(
                    '11:00', '12:00'
                )
            ),
            '2013-10-03' => array(
                0 => array(
                    '09:00', '10:00'
                ),
                1 => array(
                    '14:00', '15:00'
                )
            )
        ),
        8 => array(
            '2013-10-01' => array(
                0 => array(
                    '08:00', '10:00'
                ),
                1 => array(
                    '12:00', '16:00'
                )
            ),
            '2013-10-02' => array(
                0 => array(
                    '07:00', '11:00'
                ),
                1 => array(
                    '11:00', '12:00'
                )
            ),
            '2013-10-03' => array(
                0 => array(
                    '09:00', '10:00'
                ),
                1 => array(
                    '14:00', '15:00'
                )
            )
        ),
    );

    function __get($name)
    {
        $name = 'get' . ucfirst($name);
        if (method_exists($this, $name)) {
            $this->$name();
        }
    }

    function __set($name, $value)
    {
        $name = 'set' . ucfirst($name);
        if (method_exists($this, $name)) {
            $this->$name($value);
        }
    }

    /**
     * @param mixed $maxNumberOfPerson
     */
    public function setMaxNumberOfPlayers($maxNumberOfPerson)
    {
        $this->_maxNumberOfPlayers = $maxNumberOfPerson;
    }

    /**
     * @return mixed
     */
    public function getMaxNumberOfPlayers()
    {
        return $this->_maxNumberOfPlayers;
    }

    /**
     * @param mixed $nameOfClub
     */
    public function setNameOfClub($nameOfClub)
    {
        $this->_nameOfClub = $nameOfClub;
    }

    /**
     * @return mixed
     */
    public function getNameOfClub()
    {
        return $this->_nameOfClub;
    }

    /**
     * @param mixed $pricePerHour
     */
    public function setPricePerHour($pricePerHour)
    {
        $this->_pricePerHour = $pricePerHour;
    }

    /**
     * @return mixed
     */
    public function getPricePerHour()
    {
        return $this->_pricePerHour;
    }

    /**
     * @param $track integer
     * @param $dateWithTime string
     * @param $duration integer
     * @param $numberOfPlayers integer
     */
    public function reserveBowlingTrack($track, $dateWithTime, $duration, $numberOfPlayers)
    {
        try {
            if (!is_numeric($track) || !is_numeric($duration) || !is_numeric($numberOfPlayers)) {
               throw new \Exception('Value of $track, $duration and $numberOfPlayers should be an integer');
            }

            if (!preg_match('/^\d{4}-\d{2}-\d{2}\s\d{2}:\d{2}$/', $dateWithTime)) {
                throw new \Exception('Value of $dateWithTime should be in format Y-m-d H:i');
            }

            if (!array_key_exists($track, $this->_timeGraphic)) {
                throw new \Exception('Invalid track number');
            }

            if ($numberOfPlayers > $this->_maxNumberOfPlayers) {
                throw new \Exception('Maximum number of players is ' . $this->_maxNumberOfPlayers);
            }

            $trackSchedule = $this->_timeGraphic[$track];

            $startDate = self::_getDateTimeObject($dateWithTime);

            $endDate = clone $startDate;

            $endDate->add(new \DateInterval('PT' . $duration . 'M'));

            if (array_key_exists($startDate->format('Y-m-d'), $trackSchedule)) {
                $trackDateSchedule = $trackSchedule[$startDate->format('Y-m-d')];
                foreach ($trackDateSchedule as $timePeriod) {
                    $busyStartTime = \DateTime::createFromFormat('Y-m-d H:i', $startDate->format('Y-m-d') . $timePeriod[0]);
                    $busyEndTime = \DateTime::createFromFormat('Y-m-d H:i', $startDate->format('Y-m-d') . $timePeriod[1]);

                    if (($startDate >= $busyStartTime) && ($startDate < $busyEndTime)) {
                        throw new \Exception('Track ' . $track . ' is busy from ' .
                                $busyStartTime->format('Y-m-d H:i') . ' to ' . $busyEndTime->format('Y-m-d H:i'));
                    }
                }
            }

            $this->_timeGraphic[$track][$startDate->format('Y-m-d')][] = array(
                $startDate->format('H:i'),
                $endDate->format('H:i')
            );
        } catch (\Exception $e) {
            error_log($e->getMessage());
            echo 'Oppps: ' , $e->getMessage() . PHP_EOL;
        }
    }
}