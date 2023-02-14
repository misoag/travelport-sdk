<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFareBreak EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of fare break.
 * @subpackage Enumerations
 */
class TypeFareBreak extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MustBreak'
     * Meta information extracted from the WSDL
     * - documentation: Break Fare at the associated segment. Multiple Breaks or No Breaks may be allowed.
     * @return string 'MustBreak'
     */
    const VALUE_MUST_BREAK = 'MustBreak';
    /**
     * Constant for value 'MustOnlyBreak'
     * Meta information extracted from the WSDL
     * - documentation: Only Break Fare at the associated segment. Fare Break in the entire itinerary is allowed only at the concerned segment.
     * @return string 'MustOnlyBreak'
     */
    const VALUE_MUST_ONLY_BREAK = 'MustOnlyBreak';
    /**
     * Constant for value 'MustNotBreak'
     * Meta information extracted from the WSDL
     * - documentation: No Fare Break allowed at the associated segment.
     * @return string 'MustNotBreak'
     */
    const VALUE_MUST_NOT_BREAK = 'MustNotBreak';
    /**
     * Return allowed values
     * @uses self::VALUE_MUST_BREAK
     * @uses self::VALUE_MUST_ONLY_BREAK
     * @uses self::VALUE_MUST_NOT_BREAK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MUST_BREAK,
            self::VALUE_MUST_ONLY_BREAK,
            self::VALUE_MUST_NOT_BREAK,
        ];
    }
}
