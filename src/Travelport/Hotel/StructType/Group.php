<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Group StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents a traveler group for Group booking and all their accompanying data. SUPPORTED PROVIDER: Worldspan.
 * @subpackage Structs
 */
class Group extends AbstractStructBase
{
    /**
     * The GroupSize
     * Meta information extracted from the WSDL
     * - documentation: Represents size of the group
     * - use: required
     * @var int
     */
    protected int $GroupSize;
    /**
     * The Name
     * @var \Travelport\Hotel\StructType\Name|null
     */
    protected ?\Travelport\Hotel\StructType\Name $Name = null;
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: DeliveryInfo
     * @var \Travelport\Hotel\StructType\DeliveryInfo|null
     */
    protected ?\Travelport\Hotel\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber[]
     */
    protected ?array $PhoneNumber = null;
    /**
     * The SSRRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\SSRRef[]
     */
    protected ?array $SSRRef = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    protected ?\Travelport\Hotel\StructType\TypeStructuredAddress $Address = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\BookingTravelerRef[]
     */
    protected ?array $BookingTravelerRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Defines the type of traveler used for booking which could be a non-defining type (Companion, Web-fare, etc), or a standard type (Adult, Child, etc). | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelerType = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for Group
     * @uses Group::setGroupSize()
     * @uses Group::setName()
     * @uses Group::setDeliveryInfo()
     * @uses Group::setPhoneNumber()
     * @uses Group::setSSRRef()
     * @uses Group::setAddress()
     * @uses Group::setBookingTravelerRef()
     * @uses Group::setKey()
     * @uses Group::setTravelerType()
     * @uses Group::setElStat()
     * @uses Group::setKeyOverride()
     * @param int $groupSize
     * @param \Travelport\Hotel\StructType\Name $name
     * @param \Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     * @param \Travelport\Hotel\StructType\SSRRef[] $sSRRef
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @param \Travelport\Hotel\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param string $key
     * @param string $travelerType
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(int $groupSize, ?\Travelport\Hotel\StructType\Name $name = null, ?\Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo = null, ?array $phoneNumber = null, ?array $sSRRef = null, ?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null, ?array $bookingTravelerRef = null, ?string $key = null, ?string $travelerType = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setGroupSize($groupSize)
            ->setName($name)
            ->setDeliveryInfo($deliveryInfo)
            ->setPhoneNumber($phoneNumber)
            ->setSSRRef($sSRRef)
            ->setAddress($address)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setKey($key)
            ->setTravelerType($travelerType)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get GroupSize value
     * @return int
     */
    public function getGroupSize(): int
    {
        return $this->GroupSize;
    }
    /**
     * Set GroupSize value
     * @param int $groupSize
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setGroupSize(int $groupSize): self
    {
        // validation for constraint: int
        if (!is_null($groupSize) && !(is_int($groupSize) || ctype_digit($groupSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupSize, true), gettype($groupSize)), __LINE__);
        }
        $this->GroupSize = $groupSize;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Hotel\StructType\Name|null
     */
    public function getName(): ?\Travelport\Hotel\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Hotel\StructType\Name $name
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setName(?\Travelport\Hotel\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get DeliveryInfo value
     * @return \Travelport\Hotel\StructType\DeliveryInfo|null
     */
    public function getDeliveryInfo(): ?\Travelport\Hotel\StructType\DeliveryInfo
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setDeliveryInfo(?\Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        $this->DeliveryInfo = $deliveryInfo;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber[]
     */
    public function getPhoneNumber(): ?array
    {
        return $this->PhoneNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setPhoneNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneNumberForArrayConstraintsFromSetPhoneNumber(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $groupPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$groupPhoneNumberItem instanceof \Travelport\Hotel\StructType\PhoneNumber) {
                $invalidValues[] = is_object($groupPhoneNumberItem) ? get_class($groupPhoneNumberItem) : sprintf('%s(%s)', gettype($groupPhoneNumberItem), var_export($groupPhoneNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumber property can only contain items of type \Travelport\Hotel\StructType\PhoneNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberArrayErrorMessage = self::validatePhoneNumberForArrayConstraintsFromSetPhoneNumber($phoneNumber))) {
            throw new InvalidArgumentException($phoneNumberArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($phoneNumber) && count($phoneNumber) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PhoneNumber $item
     * @return \Travelport\Hotel\StructType\Group
     */
    public function addToPhoneNumber(\Travelport\Hotel\StructType\PhoneNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\PhoneNumber) {
            throw new InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of type \Travelport\Hotel\StructType\PhoneNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PhoneNumber) && count($this->PhoneNumber) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PhoneNumber)), __LINE__);
        }
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
    /**
     * Get SSRRef value
     * @return \Travelport\Hotel\StructType\SSRRef[]
     */
    public function getSSRRef(): ?array
    {
        return $this->SSRRef;
    }
    /**
     * This method is responsible for validating the values passed to the setSSRRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSSRRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSSRRefForArrayConstraintsFromSetSSRRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $groupSSRRefItem) {
            // validation for constraint: itemType
            if (!$groupSSRRefItem instanceof \Travelport\Hotel\StructType\SSRRef) {
                $invalidValues[] = is_object($groupSSRRefItem) ? get_class($groupSSRRefItem) : sprintf('%s(%s)', gettype($groupSSRRefItem), var_export($groupSSRRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SSRRef property can only contain items of type \Travelport\Hotel\StructType\SSRRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SSRRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SSRRef[] $sSRRef
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setSSRRef(?array $sSRRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($sSRRefArrayErrorMessage = self::validateSSRRefForArrayConstraintsFromSetSSRRef($sSRRef))) {
            throw new InvalidArgumentException($sSRRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($sSRRef) && count($sSRRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($sSRRef)), __LINE__);
        }
        $this->SSRRef = $sSRRef;
        
        return $this;
    }
    /**
     * Add item to SSRRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SSRRef $item
     * @return \Travelport\Hotel\StructType\Group
     */
    public function addToSSRRef(\Travelport\Hotel\StructType\SSRRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\SSRRef) {
            throw new InvalidArgumentException(sprintf('The SSRRef property can only contain items of type \Travelport\Hotel\StructType\SSRRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SSRRef) && count($this->SSRRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SSRRef)), __LINE__);
        }
        $this->SSRRef[] = $item;
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\Hotel\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setAddress(?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\Hotel\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $groupBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!$groupBookingTravelerRefItem instanceof \Travelport\Hotel\StructType\BookingTravelerRef) {
                $invalidValues[] = is_object($groupBookingTravelerRefItem) ? get_class($groupBookingTravelerRefItem) : sprintf('%s(%s)', gettype($groupBookingTravelerRefItem), var_export($groupBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Hotel\StructType\BookingTravelerRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\BookingTravelerRef $item
     * @return \Travelport\Hotel\StructType\Group
     */
    public function addToBookingTravelerRef(\Travelport\Hotel\StructType\BookingTravelerRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\BookingTravelerRef) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type \Travelport\Hotel\StructType\BookingTravelerRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
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
     * @return \Travelport\Hotel\StructType\Group
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
    /**
     * Get TravelerType value
     * @return string|null
     */
    public function getTravelerType(): ?string
    {
        return $this->TravelerType;
    }
    /**
     * Set TravelerType value
     * @param string $travelerType
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setTravelerType(?string $travelerType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelerType) && !is_string($travelerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerType, true), gettype($travelerType)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $travelerType)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $travelerType)), __LINE__);
        }
        $this->TravelerType = $travelerType;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Hotel\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
