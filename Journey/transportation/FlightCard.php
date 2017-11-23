<?php
namespace Journey\transportation;

use Journey\transportation\JourneyBase;

/**
 * Class flightCard
 * flightCard Boarding Pass which extends JourneyBase
 */
class FlightCard extends JourneyBase
{

/**
 * Class construct
 * 
 */

    function __construct($departureLoc, $arrivalLoc, $flight, $gate, $seat, $counter = null)
    {
        parent::__construct($departureLoc, $arrivalLoc, $seat);
        $this->flight = $flight;
        $this->gate = $gate;
        $this->counter = $counter;
    }

    /**
     * Converts into human readable instruction set.
     */
    public function toString()
    {
            return 'From ' . $this->get('departureLoc') . ', take flight ' . $this->flight . ' to ' . $this->get('arrivalLoc') . '. Gate ' . $this->gate . ', seat ' . $this->get('seat') . '. ' . ($this->counter ? 'Baggage drop at ticket counter ' . $this->counter . '.' : 'Baggage will be automatically transferred from your last leg.');
    }

}



