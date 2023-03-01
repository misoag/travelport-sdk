<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRailDirection EnumType
 * Meta information extracted from the WSDL
 * - documentation: The direction of travel.
 * @subpackage Enumerations
 */
class TypeRailDirection extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Inbound'
     * @return string 'Inbound'
     */
    const VALUE_INBOUND = 'Inbound';
    /**
     * Constant for value 'Outbound'
     * @return string 'Outbound'
     */
    const VALUE_OUTBOUND = 'Outbound';
    /**
     * Constant for value 'Both'
     * @return string 'Both'
     */
    const VALUE_BOTH = 'Both';
    /**
     * Return allowed values
     * @uses self::VALUE_INBOUND
     * @uses self::VALUE_OUTBOUND
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INBOUND,
            self::VALUE_OUTBOUND,
            self::VALUE_BOTH,
        ];
    }
}
