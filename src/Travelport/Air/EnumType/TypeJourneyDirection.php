<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeJourneyDirection EnumType
 * Meta information extracted from the WSDL
 * - documentation: Outbound and Return directions.
 * @subpackage Enumerations
 */
class TypeJourneyDirection extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Outward'
     * @return string 'Outward'
     */
    const VALUE_OUTWARD = 'Outward';
    /**
     * Constant for value 'Return'
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';
    /**
     * Return allowed values
     * @uses self::VALUE_OUTWARD
     * @uses self::VALUE_RETURN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OUTWARD,
            self::VALUE_RETURN,
        ];
    }
}
