<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingTravelerRef StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference Element for Booking Traveler. | Reference Element for Booking Traveler and Loyalty cards
 * @subpackage Structs
 */
class BookingTravelerRef extends AbstractStructBase
{
    /**
     * The LoyaltyCardRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: LoyaltyCardRef
     * @var \StructType\LoyaltyCardRef[]
     */
    protected ?array $LoyaltyCardRef = null;
    /**
     * The DriversLicenseRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DriversLicenseRef
     * @var \StructType\DriversLicenseRef|null
     */
    protected ?\StructType\DriversLicenseRef $DriversLicenseRef = null;
    /**
     * The DiscountCardRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: DiscountCardRef
     * @var \StructType\DiscountCardRef[]
     */
    protected ?array $DiscountCardRef = null;
    /**
     * The PaymentRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: PaymentRef
     * @var \StructType\PaymentRef[]
     */
    protected ?array $PaymentRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional | required
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * Constructor method for BookingTravelerRef
     * @uses BookingTravelerRef::setLoyaltyCardRef()
     * @uses BookingTravelerRef::setDriversLicenseRef()
     * @uses BookingTravelerRef::setDiscountCardRef()
     * @uses BookingTravelerRef::setPaymentRef()
     * @uses BookingTravelerRef::setKey()
     * @param \StructType\LoyaltyCardRef[] $loyaltyCardRef
     * @param \StructType\DriversLicenseRef $driversLicenseRef
     * @param \StructType\DiscountCardRef[] $discountCardRef
     * @param \StructType\PaymentRef[] $paymentRef
     * @param string $key
     */
    public function __construct(?array $loyaltyCardRef = null, ?\StructType\DriversLicenseRef $driversLicenseRef = null, ?array $discountCardRef = null, ?array $paymentRef = null, ?string $key = null)
    {
        $this
            ->setLoyaltyCardRef($loyaltyCardRef)
            ->setDriversLicenseRef($driversLicenseRef)
            ->setDiscountCardRef($discountCardRef)
            ->setPaymentRef($paymentRef)
            ->setKey($key);
    }
    /**
     * Get LoyaltyCardRef value
     * @return \StructType\LoyaltyCardRef[]
     */
    public function getLoyaltyCardRef(): ?array
    {
        return $this->LoyaltyCardRef;
    }
    /**
     * This method is responsible for validating the values passed to the setLoyaltyCardRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCardRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardRefForArrayConstraintsFromSetLoyaltyCardRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingTravelerRefLoyaltyCardRefItem) {
            // validation for constraint: itemType
            if (!$bookingTravelerRefLoyaltyCardRefItem instanceof \StructType\LoyaltyCardRef) {
                $invalidValues[] = is_object($bookingTravelerRefLoyaltyCardRefItem) ? get_class($bookingTravelerRefLoyaltyCardRefItem) : sprintf('%s(%s)', gettype($bookingTravelerRefLoyaltyCardRefItem), var_export($bookingTravelerRefLoyaltyCardRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCardRef property can only contain items of type \StructType\LoyaltyCardRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LoyaltyCardRef value
     * @throws InvalidArgumentException
     * @param \StructType\LoyaltyCardRef[] $loyaltyCardRef
     * @return \StructType\BookingTravelerRef
     */
    public function setLoyaltyCardRef(?array $loyaltyCardRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardRefArrayErrorMessage = self::validateLoyaltyCardRefForArrayConstraintsFromSetLoyaltyCardRef($loyaltyCardRef))) {
            throw new InvalidArgumentException($loyaltyCardRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($loyaltyCardRef) && count($loyaltyCardRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($loyaltyCardRef)), __LINE__);
        }
        $this->LoyaltyCardRef = $loyaltyCardRef;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCardRef value
     * @throws InvalidArgumentException
     * @param \StructType\LoyaltyCardRef $item
     * @return \StructType\BookingTravelerRef
     */
    public function addToLoyaltyCardRef(\StructType\LoyaltyCardRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LoyaltyCardRef) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCardRef property can only contain items of type \StructType\LoyaltyCardRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LoyaltyCardRef) && count($this->LoyaltyCardRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LoyaltyCardRef)), __LINE__);
        }
        $this->LoyaltyCardRef[] = $item;
        
        return $this;
    }
    /**
     * Get DriversLicenseRef value
     * @return \StructType\DriversLicenseRef|null
     */
    public function getDriversLicenseRef(): ?\StructType\DriversLicenseRef
    {
        return $this->DriversLicenseRef;
    }
    /**
     * Set DriversLicenseRef value
     * @param \StructType\DriversLicenseRef $driversLicenseRef
     * @return \StructType\BookingTravelerRef
     */
    public function setDriversLicenseRef(?\StructType\DriversLicenseRef $driversLicenseRef = null): self
    {
        $this->DriversLicenseRef = $driversLicenseRef;
        
        return $this;
    }
    /**
     * Get DiscountCardRef value
     * @return \StructType\DiscountCardRef[]
     */
    public function getDiscountCardRef(): ?array
    {
        return $this->DiscountCardRef;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountCardRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountCardRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountCardRefForArrayConstraintsFromSetDiscountCardRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingTravelerRefDiscountCardRefItem) {
            // validation for constraint: itemType
            if (!$bookingTravelerRefDiscountCardRefItem instanceof \StructType\DiscountCardRef) {
                $invalidValues[] = is_object($bookingTravelerRefDiscountCardRefItem) ? get_class($bookingTravelerRefDiscountCardRefItem) : sprintf('%s(%s)', gettype($bookingTravelerRefDiscountCardRefItem), var_export($bookingTravelerRefDiscountCardRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscountCardRef property can only contain items of type \StructType\DiscountCardRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscountCardRef value
     * @throws InvalidArgumentException
     * @param \StructType\DiscountCardRef[] $discountCardRef
     * @return \StructType\BookingTravelerRef
     */
    public function setDiscountCardRef(?array $discountCardRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($discountCardRefArrayErrorMessage = self::validateDiscountCardRefForArrayConstraintsFromSetDiscountCardRef($discountCardRef))) {
            throw new InvalidArgumentException($discountCardRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($discountCardRef) && count($discountCardRef) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($discountCardRef)), __LINE__);
        }
        $this->DiscountCardRef = $discountCardRef;
        
        return $this;
    }
    /**
     * Add item to DiscountCardRef value
     * @throws InvalidArgumentException
     * @param \StructType\DiscountCardRef $item
     * @return \StructType\BookingTravelerRef
     */
    public function addToDiscountCardRef(\StructType\DiscountCardRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DiscountCardRef) {
            throw new InvalidArgumentException(sprintf('The DiscountCardRef property can only contain items of type \StructType\DiscountCardRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->DiscountCardRef) && count($this->DiscountCardRef) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->DiscountCardRef)), __LINE__);
        }
        $this->DiscountCardRef[] = $item;
        
        return $this;
    }
    /**
     * Get PaymentRef value
     * @return \StructType\PaymentRef[]
     */
    public function getPaymentRef(): ?array
    {
        return $this->PaymentRef;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentRefForArrayConstraintsFromSetPaymentRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingTravelerRefPaymentRefItem) {
            // validation for constraint: itemType
            if (!$bookingTravelerRefPaymentRefItem instanceof \StructType\PaymentRef) {
                $invalidValues[] = is_object($bookingTravelerRefPaymentRefItem) ? get_class($bookingTravelerRefPaymentRefItem) : sprintf('%s(%s)', gettype($bookingTravelerRefPaymentRefItem), var_export($bookingTravelerRefPaymentRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentRef property can only contain items of type \StructType\PaymentRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentRef value
     * @throws InvalidArgumentException
     * @param \StructType\PaymentRef[] $paymentRef
     * @return \StructType\BookingTravelerRef
     */
    public function setPaymentRef(?array $paymentRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($paymentRefArrayErrorMessage = self::validatePaymentRefForArrayConstraintsFromSetPaymentRef($paymentRef))) {
            throw new InvalidArgumentException($paymentRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($paymentRef) && count($paymentRef) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($paymentRef)), __LINE__);
        }
        $this->PaymentRef = $paymentRef;
        
        return $this;
    }
    /**
     * Add item to PaymentRef value
     * @throws InvalidArgumentException
     * @param \StructType\PaymentRef $item
     * @return \StructType\BookingTravelerRef
     */
    public function addToPaymentRef(\StructType\PaymentRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PaymentRef) {
            throw new InvalidArgumentException(sprintf('The PaymentRef property can only contain items of type \StructType\PaymentRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->PaymentRef) && count($this->PaymentRef) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->PaymentRef)), __LINE__);
        }
        $this->PaymentRef[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \StructType\BookingTravelerRef
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
}
