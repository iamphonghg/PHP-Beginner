<?php

    class Weather {
        public static $tempConditions = ['cold', 'mild', 'warm'];

        public static function celsiusToFarenheit($c) {
            return $c * 9 / 5 + 32;
        }

        public static function determineTempCondition($f) {
            if ($f < 40) {
                return self::$tempConditions[0];
            } else if ($f < 70) {
                return self::$tempConditions[1];
            } else {
                return self::$tempConditions[2];
            }
        }

    }

    print_r(Weather::$tempConditions);

    echo Weather::celsiusToFarenheit(37);
    echo Weather::determineTempCondition(40);

?>