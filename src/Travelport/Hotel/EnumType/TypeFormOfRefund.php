<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFormOfRefund EnumType
 * @subpackage Enumerations
 */
class TypeFormOfRefund extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MCO'
     * @return string 'MCO'
     */
    const VALUE_MCO = 'MCO';
    /**
     * Constant for value 'FormOfPayment'
     * @return string 'FormOfPayment'
     */
    const VALUE_FORM_OF_PAYMENT = 'FormOfPayment';
    /**
     * Return allowed values
     * @uses self::VALUE_MCO
     * @uses self::VALUE_FORM_OF_PAYMENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MCO,
            self::VALUE_FORM_OF_PAYMENT,
        ];
    }
}
