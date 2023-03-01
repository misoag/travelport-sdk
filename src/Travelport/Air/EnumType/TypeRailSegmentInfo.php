<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRailSegmentInfo EnumType
 * Meta information extracted from the WSDL
 * - documentation: Extra for ExtraSegmentInfo and Vendor for VendorMessages
 * @subpackage Enumerations
 */
class TypeRailSegmentInfo extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Extra'
     * @return string 'Extra'
     */
    const VALUE_EXTRA = 'Extra';
    /**
     * Constant for value 'Vendor'
     * @return string 'Vendor'
     */
    const VALUE_VENDOR = 'Vendor';
    /**
     * Constant for value 'Services'
     * @return string 'Services'
     */
    const VALUE_SERVICES = 'Services';
    /**
     * Return allowed values
     * @uses self::VALUE_EXTRA
     * @uses self::VALUE_VENDOR
     * @uses self::VALUE_SERVICES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EXTRA,
            self::VALUE_VENDOR,
            self::VALUE_SERVICES,
        ];
    }
}
