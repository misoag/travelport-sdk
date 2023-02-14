<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeItineraryOption EnumType
 * @subpackage Enumerations
 */
class TypeItineraryOption extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoFare'
     * @return string 'NoFare'
     */
    const VALUE_NO_FARE = 'NoFare';
    /**
     * Constant for value 'NoAmount'
     * @return string 'NoAmount'
     */
    const VALUE_NO_AMOUNT = 'NoAmount';
    /**
     * Constant for value 'SequenceNumber'
     * @return string 'SequenceNumber'
     */
    const VALUE_SEQUENCE_NUMBER = 'SequenceNumber';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_FARE
     * @uses self::VALUE_NO_AMOUNT
     * @uses self::VALUE_SEQUENCE_NUMBER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_FARE,
            self::VALUE_NO_AMOUNT,
            self::VALUE_SEQUENCE_NUMBER,
        ];
    }
}
