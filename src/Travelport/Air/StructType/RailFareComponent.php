<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFareComponent StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains fare and discount information for each passenger type
 * @subpackage Structs
 */
class RailFareComponent extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The Discount
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\Discount[]
     */
    public ?array $Discount = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: FareComponent amount | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $Age = null;
    /**
     * The PassengerTypeCode
     * Meta information extracted from the WSDL
     * - documentation: The three character passenger code | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $PassengerTypeCode = null;
    /**
     * The SupplierPassengerType
     * Meta information extracted from the WSDL
     * - documentation: Supplier passenger type code
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierPassengerType = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $Quantity = null;
    /**
     * Constructor method for RailFareComponent
     * @uses RailFareComponent::setKey()
     * @uses RailFareComponent::setDiscount()
     * @uses RailFareComponent::setAmount()
     * @uses RailFareComponent::setAge()
     * @uses RailFareComponent::setPassengerTypeCode()
     * @uses RailFareComponent::setSupplierPassengerType()
     * @uses RailFareComponent::setQuantity()
     * @param string $key
     * @param \Travelport\Air\StructType\Discount[] $discount
     * @param string $amount
     * @param int $age
     * @param string $passengerTypeCode
     * @param string $supplierPassengerType
     * @param int $quantity
     */
    public function __construct(string $key, ?array $discount = null, ?string $amount = null, ?int $age = null, ?string $passengerTypeCode = null, ?string $supplierPassengerType = null, ?int $quantity = null)
    {
        $this
            ->setKey($key)
            ->setDiscount($discount)
            ->setAmount($amount)
            ->setAge($age)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setSupplierPassengerType($supplierPassengerType)
            ->setQuantity($quantity);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\RailFareComponent
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Discount value
     * @return \Travelport\Air\StructType\Discount[]
     */
    public function getDiscount(): ?array
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param \Travelport\Air\StructType\Discount[] $discount
     * @return \Travelport\Air\StructType\RailFareComponent
     */
    public function setDiscount(?array $discount = null): self
    {
        $this->Discount = $discount;
        
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Discount $item
     * @return \Travelport\Air\StructType\RailFareComponent
     */
    public function addToDiscount(\Travelport\Air\StructType\Discount $item): self
    {
        $this->Discount[] = $item;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Air\StructType\RailFareComponent
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Travelport\Air\StructType\RailFareComponent
     */
    public function setAge(?int $age = null): self
    {
        $this->Age = $age;
        
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode(): ?string
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Travelport\Air\StructType\RailFareComponent
     */
    public function setPassengerTypeCode(?string $passengerTypeCode = null): self
    {
        $this->PassengerTypeCode = $passengerTypeCode;
        
        return $this;
    }
    /**
     * Get SupplierPassengerType value
     * @return string|null
     */
    public function getSupplierPassengerType(): ?string
    {
        return $this->SupplierPassengerType;
    }
    /**
     * Set SupplierPassengerType value
     * @param string $supplierPassengerType
     * @return \Travelport\Air\StructType\RailFareComponent
     */
    public function setSupplierPassengerType(?string $supplierPassengerType = null): self
    {
        $this->SupplierPassengerType = $supplierPassengerType;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Travelport\Air\StructType\RailFareComponent
     */
    public function setQuantity(?int $quantity = null): self
    {
        $this->Quantity = $quantity;
        
        return $this;
    }
}
