<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRecordStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: Information on whether the Universal Record is Current, Past , Cancelled or Any status.
 * @subpackage Enumerations
 */
class TypeRecordStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Past'
     * @return string 'Past'
     */
    const VALUE_PAST = 'Past';
    /**
     * Constant for value 'Current'
     * @return string 'Current'
     */
    const VALUE_CURRENT = 'Current';
    /**
     * Constant for value 'Canceled'
     * @return string 'Canceled'
     */
    const VALUE_CANCELED = 'Canceled';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_PAST
     * @uses self::VALUE_CURRENT
     * @uses self::VALUE_CANCELED
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALL,
            self::VALUE_PAST,
            self::VALUE_CURRENT,
            self::VALUE_CANCELED,
            self::VALUE_UNKNOWN,
        ];
    }
}
