<?php

namespace Mioky\Lvl6;

use Exception;

class Booking
{
    public \DateTime $startDate;
    public \DateTime $endDate;

    public function __construct(\DateTime $startDate, \DateTime $endDate)
    {

        if ($startDate > $endDate) {
            throw new Exception("Дата начала не может быть позже даты конца");
        }
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
    public function getDays(): int
    {
        $day = $this->startDate->diff($this->endDate);
        return (int) $day->days;
    }
    public function overlaps(Booking $other): bool
    {
        if ($this->startDate < $other->endDate && $other->startDate < $this->endDate) {
            return true;
        } else {
            return false;
        }
    }
}
