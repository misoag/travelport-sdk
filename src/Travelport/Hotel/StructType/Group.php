<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public int $GroupSize;
    /**
     * The Name
     * @var \Travelport\Hotel\StructType\Name|null
     */
    public ?\Travelport\Hotel\StructType\Name $Name = null;
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: DeliveryInfo
     * @var \Travelport\Hotel\StructType\DeliveryInfo|null
     */
    public ?\Travelport\Hotel\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber[]
     */
    public ?array $PhoneNumber = null;
    /**
     * The SSRRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\SSRRef[]
     */
    public ?array $SSRRef = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\Hotel\StructType\TypeStructuredAddress $Address = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
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
    public ?string $TravelerType = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
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
     * Set PhoneNumber value
     * @param \Travelport\Hotel\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
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
     * Set SSRRef value
     * @param \Travelport\Hotel\StructType\SSRRef[] $sSRRef
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setSSRRef(?array $sSRRef = null): self
    {
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
     * Set BookingTravelerRef value
     * @param \Travelport\Hotel\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
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
     * @param string $elStat
     * @return \Travelport\Hotel\StructType\Group
     */
    public function setElStat(?string $elStat = null): self
    {
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
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
