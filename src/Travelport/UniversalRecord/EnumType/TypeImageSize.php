<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeImageSize EnumType
 * Meta information extracted from the WSDL
 * - documentation: C - Colossal | H - Huge | O - Original | J - Jumbo | B - Big | F - Forced | G - Guaranteed | E - Extra Large | L - Large | M - Medium | S - Small | I - Minimum | T - Thumbnail | The image size
 * @subpackage Enumerations
 */
class TypeImageSize extends AbstractStructEnumBase
{
    /**
     * Constant for value 'T'
     * @return string 'T'
     */
    const VALUE_T = 'T';
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'L'
     * @return string 'L'
     */
    const VALUE_L = 'L';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
    /**
     * Constant for value 'G'
     * @return string 'G'
     */
    const VALUE_G = 'G';
    /**
     * Constant for value 'F'
     * @return string 'F'
     */
    const VALUE_F = 'F';
    /**
     * Constant for value 'B'
     * @return string 'B'
     */
    const VALUE_B = 'B';
    /**
     * Constant for value 'J'
     * @return string 'J'
     */
    const VALUE_J = 'J';
    /**
     * Constant for value 'O'
     * @return string 'O'
     */
    const VALUE_O = 'O';
    /**
     * Constant for value 'H'
     * @return string 'H'
     */
    const VALUE_H = 'H';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Return allowed values
     * @uses self::VALUE_T
     * @uses self::VALUE_I
     * @uses self::VALUE_S
     * @uses self::VALUE_M
     * @uses self::VALUE_L
     * @uses self::VALUE_E
     * @uses self::VALUE_G
     * @uses self::VALUE_F
     * @uses self::VALUE_B
     * @uses self::VALUE_J
     * @uses self::VALUE_O
     * @uses self::VALUE_H
     * @uses self::VALUE_C
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_T,
            self::VALUE_I,
            self::VALUE_S,
            self::VALUE_M,
            self::VALUE_L,
            self::VALUE_E,
            self::VALUE_G,
            self::VALUE_F,
            self::VALUE_B,
            self::VALUE_J,
            self::VALUE_O,
            self::VALUE_H,
            self::VALUE_C,
        ];
    }
}
