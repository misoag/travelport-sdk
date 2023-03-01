<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeItinerary EnumType
 * @subpackage Enumerations
 */
class TypeItinerary extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Invoice'
     * @return string 'Invoice'
     */
    const VALUE_INVOICE = 'Invoice';
    /**
     * Constant for value 'Pocket'
     * @return string 'Pocket'
     */
    const VALUE_POCKET = 'Pocket';
    /**
     * Return allowed values
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_POCKET
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INVOICE,
            self::VALUE_POCKET,
        ];
    }
}
