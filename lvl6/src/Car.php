<?php

namespace Mioky\Lvl6;

use DateTime;
use Exception;

class Car
{
    /**
     * @var Booking[]
     **/
    public array $bookings = [];
    public function addBooking(Booking $booking): void
    {
        $this->bookings[] = $booking;
    }
    public function isAvailable(DateTime $start, DateTime $end): bool
    {
        $book = new Booking($start, $end);

        foreach ($this->bookings as $booking) {
            if ($booking->overlaps($book)) {
                return false;
            }
        }
        return true;
    }
}
