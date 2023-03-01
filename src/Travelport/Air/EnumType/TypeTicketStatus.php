<?php

declare(strict_types=1);

namespace Travelport\Air\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeTicketStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: Status for the ticket (Ticketed, Voided, etc)
 * @subpackage Enumerations
 */
class TypeTicketStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'U'
     * Meta information extracted from the WSDL
     * - documentation: Code="U" Description="Unticketed"
     * @return string 'U'
     */
    const VALUE_U = 'U';
    /**
     * Constant for value 'T'
     * Meta information extracted from the WSDL
     * - documentation: Code="T" Description="Ticketed"
     * @return string 'T'
     */
    const VALUE_T = 'T';
    /**
     * Constant for value 'V'
     * Meta information extracted from the WSDL
     * - documentation: Code="V" Description="Voided"
     * @return string 'V'
     */
    const VALUE_V = 'V';
    /**
     * Constant for value 'R'
     * Meta information extracted from the WSDL
     * - documentation: Code="R" Description="Refunded"
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'X'
     * Meta information extracted from the WSDL
     * - documentation: Code="X" Description="eXchanged"
     * @return string 'X'
     */
    const VALUE_X = 'X';
    /**
     * Constant for value 'Z'
     * Meta information extracted from the WSDL
     * - documentation: Code="Z" Description="Unknown/Archived/Carrier Modified"
     * @return string 'Z'
     */
    const VALUE_Z = 'Z';
    /**
     * Constant for value 'N'
     * Meta information extracted from the WSDL
     * - documentation: Code="N" Description="Unused"
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Constant for value 'S'
     * Meta information extracted from the WSDL
     * - documentation: Code="S" Description="Used"
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Return allowed values
     * @uses self::VALUE_U
     * @uses self::VALUE_T
     * @uses self::VALUE_V
     * @uses self::VALUE_R
     * @uses self::VALUE_X
     * @uses self::VALUE_Z
     * @uses self::VALUE_N
     * @uses self::VALUE_S
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_U,
            self::VALUE_T,
            self::VALUE_V,
            self::VALUE_R,
            self::VALUE_X,
            self::VALUE_Z,
            self::VALUE_N,
            self::VALUE_S,
        ];
    }
}
