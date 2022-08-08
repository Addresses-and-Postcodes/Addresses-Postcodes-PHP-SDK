<?php

namespace AddressesAndPostcodes\Lookup\PHP\SDK\Exceptions;

/**
 * InvalidAPITokenException
 */
class InvalidAPITokenException extends ErrorException
{
    /**
     * __construct
     *
     * @param  string $message
     * @return void
     */
    public function __construct(string $message)
    {
        parent::__construct(sprintf($message));
    }
}
