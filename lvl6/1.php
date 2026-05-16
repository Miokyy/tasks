<?php

require_once 'vendor/autoload.php';

use Mioky\Lvl6\Booking;
use Mioky\Lvl6\Car;


try {
    $car = new Car();


    $booking1 = new Booking(new DateTime('2026-06-01'), new DateTime('2026-06-05'));
    $booking2 = new Booking(new DateTime('2026-06-10'), new DateTime('2026-06-15'));

    $car->addBooking($booking1);
    $car->addBooking($booking2);

    echo "Бронь 1: Дней: {$booking1->getDays()}\n";
    echo "Бронь 2: Дней: {$booking2->getDays()}\n";


    $start = new DateTime('2026-06-06');
    $end = new DateTime('2026-06-09');

    echo $isAvailable1 = $car->isAvailable($start, $end) . PHP_EOL;


    $sstart = new DateTime('2026-06-04');
    $eend = new DateTime('2026-06-07');
    echo $isAvailable2 = $car->isAvailable($sstart, $eend) . PHP_EOL;




    $errorbooking = new Booking(new DateTime('2026-06-20'), new DateTime('2026-06-10'));

} catch (Exception $e) {

    echo "Ошибка: " . $e->getMessage() . "\n";
}