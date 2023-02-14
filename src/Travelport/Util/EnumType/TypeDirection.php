<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeDirection EnumType
 * Meta information extracted from the WSDL
 * - documentation: Defines the Direction for Incoming or Outgoing
 * @subpackage Enumerations
 */
class TypeDirection extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Incoming'
     * @return string 'Incoming'
     */
    const VALUE_INCOMING = 'Incoming';
    /**
     * Constant for value 'Outgoing'
     * @return string 'Outgoing'
     */
    const VALUE_OUTGOING = 'Outgoing';
    /**
     * Return allowed values
     * @uses self::VALUE_INCOMING
     * @uses self::VALUE_OUTGOING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INCOMING,
            self::VALUE_OUTGOING,
        ];
    }
}
