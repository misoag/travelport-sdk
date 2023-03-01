<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\CardRestriction[]
     */
    public ?array $CardRestriction = null;
    /**
     * The AddressRestriction
     * Meta information extracted from the WSDL
     * - ref: AddressRestriction
     * @var \Travelport\UniversalRecord\StructType\AddressRestriction|null
     */
    public ?\Travelport\UniversalRecord\StructType\AddressRestriction $AddressRestriction = null;
    /**
     * Constructor method for PaymentRestriction
     * @uses PaymentRestriction::setCardRestriction()
     * @uses PaymentRestriction::setAddressRestriction()
     * @param \Travelport\UniversalRecord\StructType\CardRestriction[] $cardRestriction
     * @param \Travelport\UniversalRecord\StructType\AddressRestriction $addressRestriction
     */
    public function __construct(?array $cardRestriction = null, ?\Travelport\UniversalRecord\StructType\AddressRestriction $addressRestriction = null)
    {
        $this
            ->setCardRestriction($cardRestriction)
            ->setAddressRestriction($addressRestriction);
    }
    /**
     * Get CardRestriction value
     * @return \Travelport\UniversalRecord\StructType\CardRestriction[]
     */
    public function getCardRestriction(): ?array
    {
        return $this->CardRestriction;
    }
    /**
     * Set CardRestriction value
     * @param \Travelport\UniversalRecord\StructType\CardRestriction[] $cardRestriction
     * @return \Travelport\UniversalRecord\StructType\PaymentRestriction
     */
    public function setCardRestriction(?array $cardRestriction = null): self
    {
        $this->CardRestriction = $cardRestriction;
        
        return $this;
    }
    /**
     * Add item to CardRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CardRestriction $item
     * @return \Travelport\UniversalRecord\StructType\PaymentRestriction
     */
    public function addToCardRestriction(\Travelport\UniversalRecord\StructType\CardRestriction $item): self
    {
        $this->CardRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get AddressRestriction value
     * @return \Travelport\UniversalRecord\StructType\AddressRestriction|null
     */
    public function getAddressRestriction(): ?\Travelport\UniversalRecord\StructType\AddressRestriction
    {
        return $this->AddressRestriction;
    }
    /**
     * Set AddressRestriction value
     * @param \Travelport\UniversalRecord\StructType\AddressRestriction $addressRestriction
     * @return \Travelport\UniversalRecord\StructType\PaymentRestriction
     */
    public function setAddressRestriction(?\Travelport\UniversalRecord\StructType\AddressRestriction $addressRestriction = null): self
    {
        $this->AddressRestriction = $addressRestriction;
        
        return $this;
    }
}
