<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareDirectionality EnumType
 * Meta information extracted from the WSDL
 * - documentation: A fare's directionality (e.g. one-way, return )
 * @subpackage Enumerations
 */
class TypeFareDirectionality extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Outbound'
     * @return string 'Outbound'
     */
    const VALUE_OUTBOUND = 'Outbound';
    /**
     * Constant for value 'Return'
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return allowed values
     * @uses self::VALUE_OUTBOUND
     * @uses self::VALUE_RETURN
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OUTBOUND,
            self::VALUE_RETURN,
            self::VALUE_ALL,
        ];
    }
}
