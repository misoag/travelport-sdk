<?php

declare(strict_types=1);

namespace Travelport\Hotel\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeFulfillmentIDType EnumType
 * Meta information extracted from the WSDL
 * - documentation: IdentificationType to define how the customer will identify himself when collecting the ticket
 * @subpackage Enumerations
 */
class TypeFulfillmentIDType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Bahn Card'
     * @return string 'Bahn Card'
     */
    const VALUE_BAHN_CARD = 'Bahn Card';
    /**
     * Constant for value 'Credit Card'
     * @return string 'Credit Card'
     */
    const VALUE_CREDIT_CARD = 'Credit Card';
    /**
     * Constant for value 'Euro Cheque Card'
     * @return string 'Euro Cheque Card'
     */
    const VALUE_EURO_CHEQUE_CARD = 'Euro Cheque Card';
    /**
     * Constant for value 'Collection Reference'
     * @return string 'Collection Reference'
     */
    const VALUE_COLLECTION_REFERENCE = 'Collection Reference';
    /**
     * Return allowed values
     * @uses self::VALUE_BAHN_CARD
     * @uses self::VALUE_CREDIT_CARD
     * @uses self::VALUE_EURO_CHEQUE_CARD
     * @uses self::VALUE_COLLECTION_REFERENCE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BAHN_CARD,
            self::VALUE_CREDIT_CARD,
            self::VALUE_EURO_CHEQUE_CARD,
            self::VALUE_COLLECTION_REFERENCE,
        ];
    }
}
