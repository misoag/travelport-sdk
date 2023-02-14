<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeProviderSupplierCapabilityType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration of ProviderSupplier capability
 * @subpackage Enumerations
 */
class TypeProviderSupplierCapabilityType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Yes'
     * @return string 'Yes'
     */
    const VALUE_YES = 'Yes';
    /**
     * Constant for value 'No'
     * @return string 'No'
     */
    const VALUE_NO = 'No';
    /**
     * Constant for value 'Partial'
     * @return string 'Partial'
     */
    const VALUE_PARTIAL = 'Partial';
    /**
     * Return allowed values
     * @uses self::VALUE_YES
     * @uses self::VALUE_NO
     * @uses self::VALUE_PARTIAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_YES,
            self::VALUE_NO,
            self::VALUE_PARTIAL,
        ];
    }
}
