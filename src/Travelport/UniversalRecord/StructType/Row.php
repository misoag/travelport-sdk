<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Row StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the row of in a seat map
 * @subpackage Structs
 */
class Row extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $Number;
    /**
     * The Facility
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Facility
     * @var \Travelport\UniversalRecord\StructType\Facility[]
     */
    public ?array $Facility = null;
    /**
     * The Characteristic
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Characteristic
     * @var \Travelport\UniversalRecord\StructType\Characteristic[]
     */
    public ?array $Characteristic = null;
    /**
     * The SearchTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SearchTravelerRef = null;
    /**
     * Constructor method for Row
     * @uses Row::setNumber()
     * @uses Row::setFacility()
     * @uses Row::setCharacteristic()
     * @uses Row::setSearchTravelerRef()
     * @param int $number
     * @param \Travelport\UniversalRecord\StructType\Facility[] $facility
     * @param \Travelport\UniversalRecord\StructType\Characteristic[] $characteristic
     * @param string $searchTravelerRef
     */
    public function __construct(int $number, ?array $facility = null, ?array $characteristic = null, ?string $searchTravelerRef = null)
    {
        $this
            ->setNumber($number)
            ->setFacility($facility)
            ->setCharacteristic($characteristic)
            ->setSearchTravelerRef($searchTravelerRef);
    }
    /**
     * Get Number value
     * @return int
     */
    public function getNumber(): int
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function setNumber(int $number): self
    {
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get Facility value
     * @return \Travelport\UniversalRecord\StructType\Facility[]
     */
    public function getFacility(): ?array
    {
        return $this->Facility;
    }
    /**
     * Set Facility value
     * @param \Travelport\UniversalRecord\StructType\Facility[] $facility
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function setFacility(?array $facility = null): self
    {
        $this->Facility = $facility;
        
        return $this;
    }
    /**
     * Add item to Facility value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Facility $item
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function addToFacility(\Travelport\UniversalRecord\StructType\Facility $item): self
    {
        $this->Facility[] = $item;
        
        return $this;
    }
    /**
     * Get Characteristic value
     * @return \Travelport\UniversalRecord\StructType\Characteristic[]
     */
    public function getCharacteristic(): ?array
    {
        return $this->Characteristic;
    }
    /**
     * Set Characteristic value
     * @param \Travelport\UniversalRecord\StructType\Characteristic[] $characteristic
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function setCharacteristic(?array $characteristic = null): self
    {
        $this->Characteristic = $characteristic;
        
        return $this;
    }
    /**
     * Add item to Characteristic value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Characteristic $item
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function addToCharacteristic(\Travelport\UniversalRecord\StructType\Characteristic $item): self
    {
        $this->Characteristic[] = $item;
        
        return $this;
    }
    /**
     * Get SearchTravelerRef value
     * @return string|null
     */
    public function getSearchTravelerRef(): ?string
    {
        return $this->SearchTravelerRef;
    }
    /**
     * Set SearchTravelerRef value
     * @param string $searchTravelerRef
     * @return \Travelport\UniversalRecord\StructType\Row
     */
    public function setSearchTravelerRef(?string $searchTravelerRef = null): self
    {
        $this->SearchTravelerRef = $searchTravelerRef;
        
        return $this;
    }
}
