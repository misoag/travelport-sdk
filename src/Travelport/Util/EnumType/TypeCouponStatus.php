<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeCouponStatus EnumType
 * Meta information extracted from the WSDL
 * - documentation: ATA/IATA Standard coupon status.
 * @subpackage Enumerations
 */
class TypeCouponStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'A'
     * Meta information extracted from the WSDL
     * - documentation: Code="A" Status="Airport Controlled".
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'C'
     * Meta information extracted from the WSDL
     * - documentation: Code="C" Status="Checked In"
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'F'
     * Meta information extracted from the WSDL
     * - documentation: Code="F" Status="Flown/Used"
     * @return string 'F'
     */
    const VALUE_F = 'F';
    /**
     * Constant for value 'L'
     * Meta information extracted from the WSDL
     * - documentation: Code="L" Status="Boarded/Lifted"
     * @return string 'L'
     */
    const VALUE_L = 'L';
    /**
     * Constant for value 'O'
     * Meta information extracted from the WSDL
     * - documentation: Code="O" Status="Open"
     * @return string 'O'
     */
    const VALUE_O = 'O';
    /**
     * Constant for value 'P'
     * Meta information extracted from the WSDL
     * - documentation: Code="P" Status="Printed"
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Constant for value 'R'
     * Meta information extracted from the WSDL
     * - documentation: Code="R" Status="Refunded"
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Constant for value 'E'
     * Meta information extracted from the WSDL
     * - documentation: Code="E" Status="Exchanged"
     * @return string 'E'
     */
    const VALUE_E = 'E';
    /**
     * Constant for value 'V'
     * Meta information extracted from the WSDL
     * - documentation: Code="V" Status="Void"
     * @return string 'V'
     */
    const VALUE_V = 'V';
    /**
     * Constant for value 'Z'
     * Meta information extracted from the WSDL
     * - documentation: Code="Z" Status="Archived/Carrier Modified"
     * @return string 'Z'
     */
    const VALUE_Z = 'Z';
    /**
     * Constant for value 'U'
     * Meta information extracted from the WSDL
     * - documentation: Code="U" Status="Unavailable"
     * @return string 'U'
     */
    const VALUE_U = 'U';
    /**
     * Constant for value 'S'
     * Meta information extracted from the WSDL
     * - documentation: Code="S" Status="Suspended"
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'I'
     * Meta information extracted from the WSDL
     * - documentation: Code="I" Status="Irregular Ops"
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'D'
     * Meta information extracted from the WSDL
     * - documentation: Code="D" "Deleted/Removed"
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Return allowed values
     * @uses self::VALUE_A
     * @uses self::VALUE_C
     * @uses self::VALUE_F
     * @uses self::VALUE_L
     * @uses self::VALUE_O
     * @uses self::VALUE_P
     * @uses self::VALUE_R
     * @uses self::VALUE_E
     * @uses self::VALUE_V
     * @uses self::VALUE_Z
     * @uses self::VALUE_U
     * @uses self::VALUE_S
     * @uses self::VALUE_I
     * @uses self::VALUE_D
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_A,
            self::VALUE_C,
            self::VALUE_F,
            self::VALUE_L,
            self::VALUE_O,
            self::VALUE_P,
            self::VALUE_R,
            self::VALUE_E,
            self::VALUE_V,
            self::VALUE_Z,
            self::VALUE_U,
            self::VALUE_S,
            self::VALUE_I,
            self::VALUE_D,
        ];
    }
}
