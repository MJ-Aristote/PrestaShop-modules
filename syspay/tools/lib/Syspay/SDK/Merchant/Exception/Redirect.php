<?php
/**
 * @author    SysPay Ltd.
 * @copyright 2012-2014 SysPay Ltd.
 * @license   http://opensource.org/licenses/MIT MIT License
 */

/**
 * Exception thrown when the results given in a redirection cannot be validated
 */
class Syspay_Merchant_RedirectException extends RuntimeException
{
    const CODE_MISSING_PARAM    = 0;
    const CODE_INVALID_CHECKSUM = 1;
    const CODE_INVALID_CONTENT  = 2;
    const CODE_UNKNOWN          = 3;
    const CODE_UNKNOWN_MERCHANT = 5;

    public function __construct($message = '', $code = 0, $previous = null)
    {
        if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
            parent::__construct($message, $code, $previous);
        } else {
            parent::__construct($message, $code);
        }
    }
}
