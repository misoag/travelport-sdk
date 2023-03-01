<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationInfo StructType
 * @subpackage Structs
 */
class LocationInfo extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: A descriptive name (Los Angeles Intl Airport)
     * - use: required
     * @var string
     */
    public string $Name;
    /**
     * The LocationAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:LocationAddress
     * @var \Travelport\UniversalRecord\StructType\TypeStructuredAddress[]
     */
    public ?array $LocationAddress = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:PhoneNumber
     * @var \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    public ?array $PhoneNumber = null;
    /**
     * The OperationTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: OperationTime
     * @var string[]
     */
    public ?array $OperationTime = null;
    /**
     * The ShuttleInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $ShuttleInfo = null;
    /**
     * The CounterLocation
     * Meta information extracted from the WSDL
     * - documentation: Where is the counter located
     * - use: optional
     * @var string|null
     */
    public ?string $CounterLocation = null;
    /**
     * The PreferredOption
     * Meta information extracted from the WSDL
     * - documentation: Preferred Option marker for Location.
     * - use: optional
     * @var bool|null
     */
    public ?bool $PreferredOption = null;
    /**
     * Constructor method for LocationInfo
     * @uses LocationInfo::setName()
     * @uses LocationInfo::setLocationAddress()
     * @uses LocationInfo::setPhoneNumber()
     * @uses LocationInfo::setOperationTime()
     * @uses LocationInfo::setShuttleInfo()
     * @uses LocationInfo::setCounterLocation()
     * @uses LocationInfo::setPreferredOption()
     * @param string $name
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress[] $locationAddress
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @param string[] $operationTime
     * @param string $shuttleInfo
     * @param string $counterLocation
     * @param bool $preferredOption
     */
    public function __construct(string $name, ?array $locationAddress = null, ?array $phoneNumber = null, ?array $operationTime = null, ?string $shuttleInfo = null, ?string $counterLocation = null, ?bool $preferredOption = null)
    {
        $this
            ->setName($name)
            ->setLocationAddress($locationAddress)
            ->setPhoneNumber($phoneNumber)
            ->setOperationTime($operationTime)
            ->setShuttleInfo($shuttleInfo)
            ->setCounterLocation($counterLocation)
            ->setPreferredOption($preferredOption);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setName(string $name): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get LocationAddress value
     * @return \Travelport\UniversalRecord\StructType\TypeStructuredAddress[]
     */
    public function getLocationAddress(): ?array
    {
        return $this->LocationAddress;
    }
    /**
     * Set LocationAddress value
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress[] $locationAddress
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setLocationAddress(?array $locationAddress = null): self
    {
        $this->LocationAddress = $locationAddress;
        
        return $this;
    }
    /**
     * Add item to LocationAddress value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeStructuredAddress $item
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function addToLocationAddress(\Travelport\UniversalRecord\StructType\TypeStructuredAddress $item): self
    {
        $this->LocationAddress[] = $item;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\UniversalRecord\StructType\PhoneNumber[]
     */
    public function getPhoneNumber(): ?array
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber[] $phoneNumber
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setPhoneNumber(?array $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PhoneNumber $item
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function addToPhoneNumber(\Travelport\UniversalRecord\StructType\PhoneNumber $item): self
    {
        $this->PhoneNumber[] = $item;
        
        return $this;
    }
    /**
     * Get OperationTime value
     * @return string[]
     */
    public function getOperationTime(): ?array
    {
        return $this->OperationTime;
    }
    /**
     * Set OperationTime value
     * @param string[] $operationTime
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setOperationTime(?array $operationTime = null): self
    {
        $this->OperationTime = $operationTime;
        
        return $this;
    }
    /**
     * Add item to OperationTime value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function addToOperationTime(string $item): self
    {
        $this->OperationTime[] = $item;
        
        return $this;
    }
    /**
     * Get ShuttleInfo value
     * @return string|null
     */
    public function getShuttleInfo(): ?string
    {
        return $this->ShuttleInfo;
    }
    /**
     * Set ShuttleInfo value
     * @param string $shuttleInfo
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setShuttleInfo(?string $shuttleInfo = null): self
    {
        $this->ShuttleInfo = $shuttleInfo;
        
        return $this;
    }
    /**
     * Get CounterLocation value
     * @return string|null
     */
    public function getCounterLocation(): ?string
    {
        return $this->CounterLocation;
    }
    /**
     * Set CounterLocation value
     * @param string $counterLocation
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setCounterLocation(?string $counterLocation = null): self
    {
        $this->CounterLocation = $counterLocation;
        
        return $this;
    }
    /**
     * Get PreferredOption value
     * @return bool|null
     */
    public function getPreferredOption(): ?bool
    {
        return $this->PreferredOption;
    }
    /**
     * Set PreferredOption value
     * @param bool $preferredOption
     * @return \Travelport\UniversalRecord\StructType\LocationInfo
     */
    public function setPreferredOption(?bool $preferredOption = null): self
    {
        $this->PreferredOption = $preferredOption;
        
        return $this;
    }
}
