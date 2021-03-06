<?php

namespace Journey;
use Journey\JourneyBase;

/**
 * Class Sorter
 *
 * orting algorithm .
 *
 */
class Sorter 
{

/**
 * Class construct
 * 
 */
    function __construct() {

    }

/**
 * Function sort, Create two lists departureList and arrivallist and create method to find starting location
 * then sorting remain of cards through looping based on arrival and departure location.
 * 
 */
    public static function sort(array $elems)
    {
        
        /*
         *  Creat two Lists, the departure and arrival locations,
         *  By using createDepartureList Method which check for departure locations 
         *  and createarrivalList Method which check for arrival locations.
        */
        $departureList = self::createDepartureList($elems);
        $arrivalList = self::createArrivalList($elems);

        /*
         *  Get starting Location and pass it with current location.
         */
        
        $startingLoc = self::getStartingLoc($elems, $arrivalList);
        $currentLoc = $startingLoc;

        $sortedBaseCards = array();

        /*
         * Assign relating boarding pass.
         */

        while ($currentBaseCard = (array_key_exists($currentLoc, $departureList)) ? $departureList[$currentLoc] : null) {
            /*
             *  Add Card to sorted list then move to the next location
             */
            array_push($sortedBaseCards, $currentBaseCard); 

            $currentLoc = $currentBaseCard->get('arrivalLoc');
        }
        return $sortedBaseCards;
    }



    /*
         *  Get starting Location.
         *  Starting location is not an arrival location..so using method getStartingLoc to compare with arrival locations list.
         *  returns the first departure location
     */

    private static function getStartingLoc($baseBoardingCards, $arrivalIndex)
    {
        foreach($baseBoardingCards as $baseBoardingCard){

            $departureLoc = $baseBoardingCard->get('departureLoc');

            if (!array_key_exists($departureLoc, $arrivalIndex)) {
                return $departureLoc;
            }
        }
        return null;
    }



     /**
     * Create arranged boarding cards with the _departure_ locations List .
     *
     */
    static function createDepartureList($boardingCards)
    {
        foreach ($boardingCards as $baseBoardingCard) {

            $departureList[$baseBoardingCard->get('departureLoc')] = $baseBoardingCard;
        }
        return $departureList;
    }




    /**
     * Create arranged boarding cards with the _arrival_ locations List .
     *
     */
    static function createArrivalList($boardingCards)
        {
            foreach ($boardingCards as $baseBoardingCard) {
                $arrivalList[$baseBoardingCard->get('arrivalLoc')] = $baseBoardingCard;
            }
            return $arrivalList;

        }
}
