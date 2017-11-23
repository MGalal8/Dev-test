<?php
namespace Journey\transportation;  

/**
 * Class JourneyBase
 * Base Class which contains common Methods and Properties.
 * @property-read string $departureLoc Departing point
 *
 * @property-read string $arrivalLoc Arrival Location for a boarding pass.
 *
 * @property-read string $seat Seat # for a boarding pass.
 */

 abstract class JourneyBase
{

/**
 * Class construct
 * 
 */
    function __construct($departureLoc, $arrivalLoc, $seat)
    {
        $this->departureLoc = $departureLoc;
        $this->arrivalLoc = $arrivalLoc;
        $this->seat = $seat;
    }

    protected  $departureLoc, $arrivalLoc, $seat;

    public function set($name, $value)
    {
        $this->$name = $value;
    }

    public function get($name)
    {
        return $this->$name;
    }

}
?>