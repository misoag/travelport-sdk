<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Amount;
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
     * @return \Travelport\Util\StructType\TypeTicketModifierAmountType
     */
    public function setAmount(string $amount): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
}
