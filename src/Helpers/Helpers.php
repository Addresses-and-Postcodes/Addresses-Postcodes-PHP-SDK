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

    /**
     * pathConverter
     *
     * @param  array $paths
     * @return string
     */
    public static function pathConverter(array $paths): string
    {
        $uri = '';
        foreach ($paths as $key => $path) {
            $uri .= ($uri) ? "&" : "";
            $uri .= "path[$key][lat]={$path['lat']}&path[$key][lng]={$path['lng']}";
        }
        return $uri;
    }
}

// path[0][lat]=1.234&path[0][lng]=-2.394&path[1][lat]=1.238&path[1][lng]=-2.040

// [['lat' => 1.234, 'lng' => -2.394], ['lat' => 1.238, 'lng' => -2.040]]