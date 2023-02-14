<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FlightType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type of flights to be returned. Values are 'NonStop', 'Direct', 'SingleConnection' and 'NoRestrictions'. Available in AirExchangeMultiQuoteReq only.
 * @subpackage Enumerations
 */
class FlightType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Direct'
     * @return string 'Direct'
     */
    const VALUE_DIRECT = 'Direct';
    /**
     * Constant for value 'NonStop'
     * @return string 'NonStop'
     */
    const VALUE_NON_STOP = 'NonStop';
    /**
     * Constant for value 'SingleConnection'
     * @return string 'SingleConnection'
     */
    const VALUE_SINGLE_CONNECTION = 'SingleConnection';
    /**
     * Constant for value 'NoRestrictions'
     * @return string 'NoRestrictions'
     */
    const VALUE_NO_RESTRICTIONS = 'NoRestrictions';
    /**
     * Return allowed values
     * @uses self::VALUE_DIRECT
     * @uses self::VALUE_NON_STOP
     * @uses self::VALUE_SINGLE_CONNECTION
     * @uses self::VALUE_NO_RESTRICTIONS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DIRECT,
            self::VALUE_NON_STOP,
            self::VALUE_SINGLE_CONNECTION,
            self::VALUE_NO_RESTRICTIONS,
        ];
    }
}
