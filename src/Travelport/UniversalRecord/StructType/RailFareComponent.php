<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The Discount
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\Discount[]
     */
    protected ?array $Discount = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: FareComponent amount | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $Age = null;
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
    protected ?string $PassengerTypeCode = null;
    /**
     * The SupplierPassengerType
     * Meta information extracted from the WSDL
     * - documentation: Supplier passenger type code
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierPassengerType = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $Quantity = null;
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
     * @param \Travelport\UniversalRecord\StructType\Discount[] $discount
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
     * @return \Travelport\UniversalRecord\StructType\RailFareComponent
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Discount value
     * @return \Travelport\UniversalRecord\StructType\Discount[]
     */
    public function getDiscount(): ?array
    {
        return $this->Discount;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountForArrayConstraintsFromSetDiscount(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareComponentDiscountItem) {
            // validation for constraint: itemType
            if (!$railFareComponentDiscountItem instanceof \Travelport\UniversalRecord\StructType\Discount) {
                $invalidValues[] = is_object($railFareComponentDiscountItem) ? get_class($railFareComponentDiscountItem) : sprintf('%s(%s)', gettype($railFareComponentDiscountItem), var_export($railFareComponentDiscountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Discount property can only contain items of type \Travelport\UniversalRecord\StructType\Discount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Discount value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Discount[] $discount
     * @return \Travelport\UniversalRecord\StructType\RailFareComponent
     */
    public function setDiscount(?array $discount = null): self
    {
        // validation for constraint: array
        if ('' !== ($discountArrayErrorMessage = self::validateDiscountForArrayConstraintsFromSetDiscount($discount))) {
            throw new InvalidArgumentException($discountArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($discount) && count($discount) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($discount)), __LINE__);
        }
        $this->Discount = $discount;
        
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Discount $item
     * @return \Travelport\UniversalRecord\StructType\RailFareComponent
     */
    public function addToDiscount(\Travelport\UniversalRecord\StructType\Discount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Discount) {
            throw new InvalidArgumentException(sprintf('The Discount property can only contain items of type \Travelport\UniversalRecord\StructType\Discount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->Discount) && count($this->Discount) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->Discount)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailFareComponent
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailFareComponent
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailFareComponent
     */
    public function setPassengerTypeCode(?string $passengerTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerTypeCode, true), gettype($passengerTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailFareComponent
     */
    public function setSupplierPassengerType(?string $supplierPassengerType = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierPassengerType) && !is_string($supplierPassengerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierPassengerType, true), gettype($supplierPassengerType)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailFareComponent
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
}
