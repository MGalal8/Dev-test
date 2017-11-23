<?php

namespace Journey;

require 'vendor/autoload.php';

use Journey\transportation\JourneyBase;
use Journey\transportation\AirportBusCard;
use Journey\transportation\FlightCard;
use Journey\transportation\TrainCard;

use Journey\Travel;


    $journey = new Travel();

    $journey->Card(new FlightCard('Gerona Airport', 'Stockholm', '45B', 'SK455', '3A', '344'));
    $journey->Card(new FlightCard('Stockholm', 'New York JFK', '22', 'SK22', '7B'));
    $journey->Card(new AirportBusCard('Barcelona', 'Gerona Airport'));
    $journey->Card(new TrainCard('Madrid', 'Barcelona', '78A', '45B'));

    $journey->sortCard();

    echo ($journey->output());
?>

