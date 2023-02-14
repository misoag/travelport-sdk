<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeAlliance EnumType
 * @subpackage Enumerations
 */
class TypeAlliance extends AbstractStructEnumBase
{
    /**
     * Constant for value 'StarAlliance'
     * @return string 'StarAlliance'
     */
    const VALUE_STAR_ALLIANCE = 'StarAlliance';
    /**
     * Constant for value 'OneWorld'
     * @return string 'OneWorld'
     */
    const VALUE_ONE_WORLD = 'OneWorld';
    /**
     * Constant for value 'KLMNorthwestAlliance'
     * @return string 'KLMNorthwestAlliance'
     */
    const VALUE_KLMNORTHWEST_ALLIANCE = 'KLMNorthwestAlliance';
    /**
     * Constant for value 'SkyTeam'
     * @return string 'SkyTeam'
     */
    const VALUE_SKY_TEAM = 'SkyTeam';
    /**
     * Constant for value 'OWCode'
     * @return string 'OWCode'
     */
    const VALUE_OWCODE = 'OWCode';
    /**
     * Return allowed values
     * @uses self::VALUE_STAR_ALLIANCE
     * @uses self::VALUE_ONE_WORLD
     * @uses self::VALUE_KLMNORTHWEST_ALLIANCE
     * @uses self::VALUE_SKY_TEAM
     * @uses self::VALUE_OWCODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STAR_ALLIANCE,
            self::VALUE_ONE_WORLD,
            self::VALUE_KLMNORTHWEST_ALLIANCE,
            self::VALUE_SKY_TEAM,
            self::VALUE_OWCODE,
        ];
    }
}
