<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRateGuarantee EnumType
 * Meta information extracted from the WSDL
 * - documentation: The guarantee for this rate.
 * @subpackage Enumerations
 */
class TypeRateGuarantee extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Rate Guaranteed'
     * @return string 'Rate Guaranteed'
     */
    const VALUE_RATE_GUARANTEED = 'Rate Guaranteed';
    /**
     * Constant for value 'Rate Quoted'
     * @return string 'Rate Quoted'
     */
    const VALUE_RATE_QUOTED = 'Rate Quoted';
    /**
     * Constant for value 'Agent Entered'
     * @return string 'Agent Entered'
     */
    const VALUE_AGENT_ENTERED = 'Agent Entered';
    /**
     * Return allowed values
     * @uses self::VALUE_RATE_GUARANTEED
     * @uses self::VALUE_RATE_QUOTED
     * @uses self::VALUE_AGENT_ENTERED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_RATE_GUARANTEED,
            self::VALUE_RATE_QUOTED,
            self::VALUE_AGENT_ENTERED,
        ];
    }
}
