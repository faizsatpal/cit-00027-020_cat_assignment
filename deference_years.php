<?php
class DateDiff {
    
    public $date_a, $date_b;
    public function __construct($firstDate, $secondDate) {
        $this->date_a = new DateTime($firstDate);
        $this->date_b = new DateTime($secondDate);
    }

    // return date deference
    public function yearDeference() {
        $interval_between_dates = $this->date_a->diff($this->date_b);
        return "date deference: " . $interval_between_dates->y . " years, " . $interval_between_dates->m . " months, " . $interval_between_dates->d . " days";
    }
}

$difference = new DateDiff("1990-12-08", "2020-05-02");

//result
echo $difference->yearDeference();