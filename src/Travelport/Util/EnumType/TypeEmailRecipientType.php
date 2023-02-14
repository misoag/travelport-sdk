<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeEmailRecipientType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration of the types of email recipients available for use (TO, CC, BCC)
 * @subpackage Enumerations
 */
class TypeEmailRecipientType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TO'
     * @return string 'TO'
     */
    const VALUE_TO = 'TO';
    /**
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC = 'CC';
    /**
     * Constant for value 'BCC'
     * @return string 'BCC'
     */
    const VALUE_BCC = 'BCC';
    /**
     * Return allowed values
     * @uses self::VALUE_TO
     * @uses self::VALUE_CC
     * @uses self::VALUE_BCC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TO,
            self::VALUE_CC,
            self::VALUE_BCC,
        ];
    }
}
