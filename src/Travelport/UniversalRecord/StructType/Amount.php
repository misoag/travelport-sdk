<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amount StructType
 * Meta information extracted from the WSDL
 * - type: typeMoney
 * - use: optional | required
 * @subpackage Structs
 */
class Amount extends AbstractStructBase
{
    /**
     * The Type
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The AmountDuePaid
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $AmountDuePaid = null;
    /**
     * Constructor method for Amount
     * @uses Amount::setType()
     * @uses Amount::setAmountDuePaid()
     * @param string $type
     * @param string $amountDuePaid
     */
    public function __construct(?string $type = null, ?string $amountDuePaid = null)
    {
        $this
            ->setType($type)
            ->setAmountDuePaid($amountDuePaid);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Amount
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get AmountDuePaid value
     * @return string|null
     */
    public function getAmountDuePaid(): ?string
    {
        return $this->AmountDuePaid;
    }
    /**
     * Set AmountDuePaid value
     * @param string $amountDuePaid
     * @return \Travelport\UniversalRecord\StructType\Amount
     */
    public function setAmountDuePaid(?string $amountDuePaid = null): self
    {
        $this->AmountDuePaid = $amountDuePaid;
        
        return $this;
    }
}
