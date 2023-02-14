<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeShowProvidersType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration of reqested type of Provider Configuration requested. An error may be returned if 'All' and the user security level is not allowed this access
 * @subpackage Enumerations
 */
class TypeShowProvidersType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Provisioned'
     * @return string 'Provisioned'
     */
    const VALUE_PROVISIONED = 'Provisioned';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_PROVISIONED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALL,
            self::VALUE_PROVISIONED,
        ];
    }
}
