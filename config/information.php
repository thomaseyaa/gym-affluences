<?php

namespace Config;

class Informations {
    public static function Restrictions(){
       return [
           'days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
           'offDays' => ['Sat', 'Sun'],
           'openingHour' => 9,
           'closingHour' => 18,
           'reservationDuration' => 1,
           'reservationLimit' => 2,
       ];
    }
}


