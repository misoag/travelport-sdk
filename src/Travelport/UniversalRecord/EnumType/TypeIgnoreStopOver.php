<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeIgnoreStopOver EnumType
 * Meta information extracted from the WSDL
 * - documentation: The stop over inluded to quote fare.
 * @subpackage Enumerations
 */
class TypeIgnoreStopOver extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoStopOver'
     * Meta information extracted from the WSDL
     * - documentation: No Stop over included.
     * @return string 'NoStopOver'
     */
    const VALUE_NO_STOP_OVER = 'NoStopOver';
    /**
     * Constant for value 'StopOver'
     * Meta information extracted from the WSDL
     * - documentation: Stop over included.
     * @return string 'StopOver'
     */
    const VALUE_STOP_OVER = 'StopOver';
    /**
     * Constant for value 'IgnoreSegment'
     * Meta information extracted from the WSDL
     * - documentation: Segment Ignored.
     * @return string 'IgnoreSegment'
     */
    const VALUE_IGNORE_SEGMENT = 'IgnoreSegment';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_STOP_OVER
     * @uses self::VALUE_STOP_OVER
     * @uses self::VALUE_IGNORE_SEGMENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_STOP_OVER,
            self::VALUE_STOP_OVER,
            self::VALUE_IGNORE_SEGMENT,
        ];
    }
}
