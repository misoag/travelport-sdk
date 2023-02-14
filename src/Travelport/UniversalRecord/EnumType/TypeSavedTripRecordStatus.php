<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeSavedTripRecordStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the status of the Saved Trip record.
 * @subpackage Enumerations
 */
class TypeSavedTripRecordStatus extends AbstractStructEnumBase
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
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_PAST
     * @uses self::VALUE_CURRENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALL,
            self::VALUE_PAST,
            self::VALUE_CURRENT,
        ];
    }
}
