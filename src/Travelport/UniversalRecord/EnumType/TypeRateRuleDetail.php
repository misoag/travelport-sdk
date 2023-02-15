<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRateRuleDetail EnumType
 * Meta information extracted from the WSDL
 * - documentation: 'None' returns hotel property descriptive information-supported for 1p,1g/1v. 'Complete' returns the complete hotel and room rate information-supported for 1p,1g/1v, 'RatePlansOnly' returns hotel rate information only - supported for
 * 1p.
 * @subpackage Enumerations
 */
class TypeRateRuleDetail extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Complete'
     * @return string 'Complete'
     */
    const VALUE_COMPLETE = 'Complete';
    /**
     * Constant for value 'RatePlansOnly'
     * @return string 'RatePlansOnly'
     */
    const VALUE_RATE_PLANS_ONLY = 'RatePlansOnly';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_COMPLETE
     * @uses self::VALUE_RATE_PLANS_ONLY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_COMPLETE,
            self::VALUE_RATE_PLANS_ONLY,
        ];
    }
}
