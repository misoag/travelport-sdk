<?php

declare(strict_types=1);

namespace Travelport\Util\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeRateCategory EnumType
 * Meta information extracted from the WSDL
 * - documentation: The category of the rate (Best, etc)
 * @subpackage Enumerations
 */
class TypeRateCategory extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Association'
     * @return string 'Association'
     */
    const VALUE_ASSOCIATION = 'Association';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Corporate'
     * @return string 'Corporate'
     */
    const VALUE_CORPORATE = 'Corporate';
    /**
     * Constant for value 'Government'
     * @return string 'Government'
     */
    const VALUE_GOVERNMENT = 'Government';
    /**
     * Constant for value 'Industry'
     * @return string 'Industry'
     */
    const VALUE_INDUSTRY = 'Industry';
    /**
     * Constant for value 'Package'
     * @return string 'Package'
     */
    const VALUE_PACKAGE = 'Package';
    /**
     * Constant for value 'Inclusive'
     * @return string 'Inclusive'
     */
    const VALUE_INCLUSIVE = 'Inclusive';
    /**
     * Constant for value 'Promotional'
     * @return string 'Promotional'
     */
    const VALUE_PROMOTIONAL = 'Promotional';
    /**
     * Constant for value 'Credential'
     * @return string 'Credential'
     */
    const VALUE_CREDENTIAL = 'Credential';
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Consortium'
     * @return string 'Consortium'
     */
    const VALUE_CONSORTIUM = 'Consortium';
    /**
     * Constant for value 'Convention'
     * @return string 'Convention'
     */
    const VALUE_CONVENTION = 'Convention';
    /**
     * Constant for value 'Negotiated'
     * @return string 'Negotiated'
     */
    const VALUE_NEGOTIATED = 'Negotiated';
    /**
     * Constant for value 'Prepay'
     * @return string 'Prepay'
     */
    const VALUE_PREPAY = 'Prepay';
    /**
     * Return allowed values
     * @uses self::VALUE_ASSOCIATION
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_CORPORATE
     * @uses self::VALUE_GOVERNMENT
     * @uses self::VALUE_INDUSTRY
     * @uses self::VALUE_PACKAGE
     * @uses self::VALUE_INCLUSIVE
     * @uses self::VALUE_PROMOTIONAL
     * @uses self::VALUE_CREDENTIAL
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_CONSORTIUM
     * @uses self::VALUE_CONVENTION
     * @uses self::VALUE_NEGOTIATED
     * @uses self::VALUE_PREPAY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ASSOCIATION,
            self::VALUE_BUSINESS,
            self::VALUE_CORPORATE,
            self::VALUE_GOVERNMENT,
            self::VALUE_INDUSTRY,
            self::VALUE_PACKAGE,
            self::VALUE_INCLUSIVE,
            self::VALUE_PROMOTIONAL,
            self::VALUE_CREDENTIAL,
            self::VALUE_STANDARD,
            self::VALUE_CONSORTIUM,
            self::VALUE_CONVENTION,
            self::VALUE_NEGOTIATED,
            self::VALUE_PREPAY,
        ];
    }
}
