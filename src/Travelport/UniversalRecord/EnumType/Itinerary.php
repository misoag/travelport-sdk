<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Itinerary EnumType
 * Meta information extracted from the WSDL
 * - documentation: For an exchange request this tells if the itinerary is the original one or new one. A value of Original will only apply to 1G/1V/1P/1S/1A. A value of New will apply to 1G/1V/1P/1S/1A/ACH.
 * @subpackage Enumerations
 */
class Itinerary extends AbstractStructEnumBase
{
    /**
     * Constant for value 'New'
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Original'
     * @return string 'Original'
     */
    const VALUE_ORIGINAL = 'Original';
    /**
     * Return allowed values
     * @uses self::VALUE_NEW
     * @uses self::VALUE_ORIGINAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NEW,
            self::VALUE_ORIGINAL,
        ];
    }
}
