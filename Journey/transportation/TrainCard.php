<?php
namespace Journey\transportation;

use Journey\transportation\JourneyBase;

/**
 * Class TrainCard
 * TrainCard Bus Boarding Pass which extends BaseBoardingCard
 */
class TrainCard extends JourneyBase
{

    function __construct($departureLoc, $arrivalLoc, $train, $seat)
    {
        parent::__construct($departureLoc, $arrivalLoc, $seat);
        $this->train = $train;
    }

    /**
     * Converts into human readable instruction set.
     */
    public function toString()
    {
            return 'Take train ' . $this->train . ' from ' . $this->get('departureLoc') . ' to ' . $this->get('arrivalLoc') . '. Sit in seat ' . $this->get('seat') . '.';
    }

}



