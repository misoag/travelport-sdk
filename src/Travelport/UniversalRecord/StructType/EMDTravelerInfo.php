<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDTravelerInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: EMD traveler information. Supported providers are 1G/1V/1P
 * @subpackage Structs
 */
class EMDTravelerInfo extends AbstractStructBase
{
    /**
     * The NameInfo
     * @var \Travelport\UniversalRecord\StructType\NameInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\NameInfo $NameInfo = null;
    /**
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Defines the type of traveler used for booking which could be a non-defining type (Companion, Web-fare, etc), or a standard type (Adult, Child, etc). | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * @var string|null
     */
    public ?string $TravelerType = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: Age of the traveler
     * @var int|null
     */
    public ?int $Age = null;
    /**
     * Constructor method for EMDTravelerInfo
     * @uses EMDTravelerInfo::setNameInfo()
     * @uses EMDTravelerInfo::setTravelerType()
     * @uses EMDTravelerInfo::setAge()
     * @param \Travelport\UniversalRecord\StructType\NameInfo $nameInfo
     * @param string $travelerType
     * @param int $age
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\NameInfo $nameInfo = null, ?string $travelerType = null, ?int $age = null)
    {
        $this
            ->setNameInfo($nameInfo)
            ->setTravelerType($travelerType)
            ->setAge($age);
    }
    /**
     * Get NameInfo value
     * @return \Travelport\UniversalRecord\StructType\NameInfo|null
     */
    public function getNameInfo(): ?\Travelport\UniversalRecord\StructType\NameInfo
    {
        return $this->NameInfo;
    }
    /**
     * Set NameInfo value
     * @param \Travelport\UniversalRecord\StructType\NameInfo $nameInfo
     * @return \Travelport\UniversalRecord\StructType\EMDTravelerInfo
     */
    public function setNameInfo(?\Travelport\UniversalRecord\StructType\NameInfo $nameInfo = null): self
    {
        $this->NameInfo = $nameInfo;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDTravelerInfo
     */
    public function setTravelerType(?string $travelerType = null): self
    {
        $this->TravelerType = $travelerType;
        
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
     * @return \Travelport\UniversalRecord\StructType\EMDTravelerInfo
     */
    public function setAge(?int $age = null): self
    {
        $this->Age = $age;
        
        return $this;
    }
}
