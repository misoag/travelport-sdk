<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareSearchOption EnumType
 * Meta information extracted from the WSDL
 * - documentation: Fare Search option indicator.
 * @subpackage Enumerations
 */
class TypeFareSearchOption extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Leave'
     * @return string 'Leave'
     */
    const VALUE_LEAVE = 'Leave';
    /**
     * Constant for value 'Return'
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';
    /**
     * Constant for value 'Seasonal'
     * @return string 'Seasonal'
     */
    const VALUE_SEASONAL = 'Seasonal';
    /**
     * Constant for value 'Blackout'
     * @return string 'Blackout'
     */
    const VALUE_BLACKOUT = 'Blackout';
    /**
     * Constant for value 'Advance Purchase'
     * @return string 'Advance Purchase'
     */
    const VALUE_ADVANCE_PURCHASE = 'Advance Purchase';
    /**
     * Constant for value 'Day-of-week'
     * @return string 'Day-of-week'
     */
    const VALUE_DAY_OF_WEEK = 'Day-of-week';
    /**
     * Constant for value 'Effective Date'
     * @return string 'Effective Date'
     */
    const VALUE_EFFECTIVE_DATE = 'Effective Date';
    /**
     * Return allowed values
     * @uses self::VALUE_LEAVE
     * @uses self::VALUE_RETURN
     * @uses self::VALUE_SEASONAL
     * @uses self::VALUE_BLACKOUT
     * @uses self::VALUE_ADVANCE_PURCHASE
     * @uses self::VALUE_DAY_OF_WEEK
     * @uses self::VALUE_EFFECTIVE_DATE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LEAVE,
            self::VALUE_RETURN,
            self::VALUE_SEASONAL,
            self::VALUE_BLACKOUT,
            self::VALUE_ADVANCE_PURCHASE,
            self::VALUE_DAY_OF_WEEK,
            self::VALUE_EFFECTIVE_DATE,
        ];
    }
}
