<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Helpers;

final class Helpers
{
    /**
     * getFirstValueOfArray
     *
     * @param  array $value
     * @return array
     */
    public static function getFirstValueOfArray(array $value): array
    {
        return reset($value);
    }

    /**
     * getLastValueOfArray
     *
     * @param  array $value
     * @return array
     */
    public static function getLastValueOfArray(array $value): array
    {
        $arr = array_values($value);
        return end($arr);
    }
}
