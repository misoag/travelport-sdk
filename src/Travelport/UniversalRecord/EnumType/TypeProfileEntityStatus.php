<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeProfileEntityStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: Status of the given profile/entity. Any profile with a status other than Active cannot perform most transactions.
 * @subpackage Enumerations
 */
class TypeProfileEntityStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Inactive'
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_INACTIVE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACTIVE,
            self::VALUE_INACTIVE,
        ];
    }
}
