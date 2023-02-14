<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeProfileEntityStatusWithDelete EnumType
 * Meta information extracted from the WSDL
 * - documentation: Specify whether the change is to update or delete the field.
 * @subpackage Enumerations
 */
class TypeProfileEntityStatusWithDelete extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Deleted'
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
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
     * @uses self::VALUE_DELETED
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_INACTIVE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DELETED,
            self::VALUE_ACTIVE,
            self::VALUE_INACTIVE,
        ];
    }
}
