<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Helpers;

final class Helpers
{
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
