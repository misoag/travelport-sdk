<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentRestriction StructType
 * @subpackage Structs
 */
class PaymentRestriction extends AbstractStructBase
{
    /**
     * The CardRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: CardRestriction
     * @var \Travelport\Air\StructType\CardRestriction[]
     */
    public ?array $CardRestriction = null;
    /**
     * The AddressRestriction
     * Meta information extracted from the WSDL
     * - ref: AddressRestriction
     * @var \Travelport\Air\StructType\AddressRestriction|null
     */
    public ?\Travelport\Air\StructType\AddressRestriction $AddressRestriction = null;
    /**
     * Constructor method for PaymentRestriction
     * @uses PaymentRestriction::setCardRestriction()
     * @uses PaymentRestriction::setAddressRestriction()
     * @param \Travelport\Air\StructType\CardRestriction[] $cardRestriction
     * @param \Travelport\Air\StructType\AddressRestriction $addressRestriction
     */
    public function __construct(?array $cardRestriction = null, ?\Travelport\Air\StructType\AddressRestriction $addressRestriction = null)
    {
        $this
            ->setCardRestriction($cardRestriction)
            ->setAddressRestriction($addressRestriction);
    }
    /**
     * Get CardRestriction value
     * @return \Travelport\Air\StructType\CardRestriction[]
     */
    public function getCardRestriction(): ?array
    {
        return $this->CardRestriction;
    }
    /**
     * Set CardRestriction value
     * @param \Travelport\Air\StructType\CardRestriction[] $cardRestriction
     * @return \Travelport\Air\StructType\PaymentRestriction
     */
    public function setCardRestriction(?array $cardRestriction = null): self
    {
        $this->CardRestriction = $cardRestriction;
        
        return $this;
    }
    /**
     * Add item to CardRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\CardRestriction $item
     * @return \Travelport\Air\StructType\PaymentRestriction
     */
    public function addToCardRestriction(\Travelport\Air\StructType\CardRestriction $item): self
    {
        $this->CardRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get AddressRestriction value
     * @return \Travelport\Air\StructType\AddressRestriction|null
     */
    public function getAddressRestriction(): ?\Travelport\Air\StructType\AddressRestriction
    {
        return $this->AddressRestriction;
    }
    /**
     * Set AddressRestriction value
     * @param \Travelport\Air\StructType\AddressRestriction $addressRestriction
     * @return \Travelport\Air\StructType\PaymentRestriction
     */
    public function setAddressRestriction(?\Travelport\Air\StructType\AddressRestriction $addressRestriction = null): self
    {
        $this->AddressRestriction = $addressRestriction;
        
        return $this;
    }
}
