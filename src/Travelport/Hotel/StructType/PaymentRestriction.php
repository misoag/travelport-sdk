<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\CardRestriction[]
     */
    public ?array $CardRestriction = null;
    /**
     * The AddressRestriction
     * Meta information extracted from the WSDL
     * - ref: AddressRestriction
     * @var \Travelport\Hotel\StructType\AddressRestriction|null
     */
    public ?\Travelport\Hotel\StructType\AddressRestriction $AddressRestriction = null;
    /**
     * Constructor method for PaymentRestriction
     * @uses PaymentRestriction::setCardRestriction()
     * @uses PaymentRestriction::setAddressRestriction()
     * @param \Travelport\Hotel\StructType\CardRestriction[] $cardRestriction
     * @param \Travelport\Hotel\StructType\AddressRestriction $addressRestriction
     */
    public function __construct(?array $cardRestriction = null, ?\Travelport\Hotel\StructType\AddressRestriction $addressRestriction = null)
    {
        $this
            ->setCardRestriction($cardRestriction)
            ->setAddressRestriction($addressRestriction);
    }
    /**
     * Get CardRestriction value
     * @return \Travelport\Hotel\StructType\CardRestriction[]
     */
    public function getCardRestriction(): ?array
    {
        return $this->CardRestriction;
    }
    /**
     * Set CardRestriction value
     * @param \Travelport\Hotel\StructType\CardRestriction[] $cardRestriction
     * @return \Travelport\Hotel\StructType\PaymentRestriction
     */
    public function setCardRestriction(?array $cardRestriction = null): self
    {
        $this->CardRestriction = $cardRestriction;
        
        return $this;
    }
    /**
     * Add item to CardRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\CardRestriction $item
     * @return \Travelport\Hotel\StructType\PaymentRestriction
     */
    public function addToCardRestriction(\Travelport\Hotel\StructType\CardRestriction $item): self
    {
        $this->CardRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get AddressRestriction value
     * @return \Travelport\Hotel\StructType\AddressRestriction|null
     */
    public function getAddressRestriction(): ?\Travelport\Hotel\StructType\AddressRestriction
    {
        return $this->AddressRestriction;
    }
    /**
     * Set AddressRestriction value
     * @param \Travelport\Hotel\StructType\AddressRestriction $addressRestriction
     * @return \Travelport\Hotel\StructType\PaymentRestriction
     */
    public function setAddressRestriction(?\Travelport\Hotel\StructType\AddressRestriction $addressRestriction = null): self
    {
        $this->AddressRestriction = $addressRestriction;
        
        return $this;
    }
}
