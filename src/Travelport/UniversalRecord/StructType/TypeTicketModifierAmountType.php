<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTicketModifierAmountType StructType
 * Meta information extracted from the WSDL
 * - documentation: Ticketing Modifier used to alter a fare amount before or during the ticketing operation.
 * @subpackage Structs
 */
class TypeTicketModifierAmountType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount associated with a ticketing modifier | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * Constructor method for typeTicketModifierAmountType
     * @uses TypeTicketModifierAmountType::setAmount()
     * @param string $amount
     */
    public function __construct(string $amount)
    {
        $this
            ->setAmount($amount);
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
}
