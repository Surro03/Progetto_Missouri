<?php
class EInteraval {
    private $intervalId;
    private DateTime $start;
    private DateTime $end;

    public function __construct(DateTime $start, DateTime $end) {
        if ($start > $end) {
            throw new InvalidArgumentException("Start date must be before end date.");
        }
        $this->start = $start;
        $this->end = $end;
    }
    public function getStart(): DateTime {
        return $this->start;
    }
    public function getEnd(): DateTime {
        return $this->end;
    }
    public function setStart(DateTime $start): void {
        if ($start > $this->end) {
            throw new InvalidArgumentException("Start date must be before end date.");
        }
        $this->start = $start;
    }
    public function setEnd(DateTime $end): void {
        if ($end < $this->start) {
            throw new InvalidArgumentException("End date must be after start date.");
        }
        $this->end = $end;
    }

}