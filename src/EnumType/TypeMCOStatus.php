<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeMCOStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: The available status codes for an MCO
 * @subpackage Enumerations
 */
class TypeMCOStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Open'
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'Used'
     * @return string 'Used'
     */
    const VALUE_USED = 'Used';
    /**
     * Constant for value 'Refunded'
     * @return string 'Refunded'
     */
    const VALUE_REFUNDED = 'Refunded';
    /**
     * Constant for value 'Voided'
     * @return string 'Voided'
     */
    const VALUE_VOIDED = 'Voided';
    /**
     * Constant for value 'Expired'
     * @return string 'Expired'
     */
    const VALUE_EXPIRED = 'Expired';
    /**
     * Return allowed values
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_USED
     * @uses self::VALUE_REFUNDED
     * @uses self::VALUE_VOIDED
     * @uses self::VALUE_EXPIRED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OPEN,
            self::VALUE_USED,
            self::VALUE_REFUNDED,
            self::VALUE_VOIDED,
            self::VALUE_EXPIRED,
        ];
    }
}
