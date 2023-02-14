<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeConnectionIndicator EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of connection indicator : AvailabilityAndPricing : Specified availability and pricing connection; TurnAround : Specified turn around; Stopover : Specified stopover;
 * @subpackage Enumerations
 */
class TypeConnectionIndicator extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AvailabilityAndPricing'
     * @return string 'AvailabilityAndPricing'
     */
    const VALUE_AVAILABILITY_AND_PRICING = 'AvailabilityAndPricing';
    /**
     * Constant for value 'TurnAround'
     * @return string 'TurnAround'
     */
    const VALUE_TURN_AROUND = 'TurnAround';
    /**
     * Constant for value 'Stopover'
     * @return string 'Stopover'
     */
    const VALUE_STOPOVER = 'Stopover';
    /**
     * Return allowed values
     * @uses self::VALUE_AVAILABILITY_AND_PRICING
     * @uses self::VALUE_TURN_AROUND
     * @uses self::VALUE_STOPOVER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AVAILABILITY_AND_PRICING,
            self::VALUE_TURN_AROUND,
            self::VALUE_STOPOVER,
        ];
    }
}
