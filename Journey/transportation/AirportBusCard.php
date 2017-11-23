<?php
namespace Journey\transportation;

use Journey\transportation\JourneyBase;

/**
 * Class AirportBusCard
 * AirportBus Boarding Pass which extends JourneyBase
 */
class AirportBusCard extends JourneyBase
{

/**
 * Class construct
 * 
 */

    function __construct($departureLoc, $arrivalLoc, $seat = null)
    {
        parent::__construct($departureLoc, $arrivalLoc, $seat);

    }

    /**
     * Converts into human readable instruction set.
     */
    public function toString()
    {
        return 'Take the airport bus from ' . $this->get('departureLoc') . ' to ' . $this->get('arrivalLoc') . '. ' . ($this->get('seat') ? 'Sit in seat ' . $this->get('seat') . '.' : 'No seat assignment.');
    }

}



