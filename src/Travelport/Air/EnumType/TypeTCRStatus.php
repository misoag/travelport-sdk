<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeTCRStatus EnumType
 * @subpackage Enumerations
 */
class TypeTCRStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Confirmed'
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'Refunded'
     * @return string 'Refunded'
     */
    const VALUE_REFUNDED = 'Refunded';
    /**
     * Constant for value 'Exchanged'
     * @return string 'Exchanged'
     */
    const VALUE_EXCHANGED = 'Exchanged';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_REFUNDED
     * @uses self::VALUE_EXCHANGED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_PENDING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_CONFIRMED,
            self::VALUE_REFUNDED,
            self::VALUE_EXCHANGED,
            self::VALUE_CANCELLED,
            self::VALUE_PENDING,
        ];
    }
}
