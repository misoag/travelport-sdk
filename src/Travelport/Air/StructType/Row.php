<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\Facility[]
     */
    public ?array $Facility = null;
    /**
     * The Characteristic
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Characteristic
     * @var \Travelport\Air\StructType\Characteristic[]
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
     * @param \Travelport\Air\StructType\Facility[] $facility
     * @param \Travelport\Air\StructType\Characteristic[] $characteristic
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
     * @return \Travelport\Air\StructType\Row
     */
    public function setNumber(int $number): self
    {
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get Facility value
     * @return \Travelport\Air\StructType\Facility[]
     */
    public function getFacility(): ?array
    {
        return $this->Facility;
    }
    /**
     * Set Facility value
     * @param \Travelport\Air\StructType\Facility[] $facility
     * @return \Travelport\Air\StructType\Row
     */
    public function setFacility(?array $facility = null): self
    {
        $this->Facility = $facility;
        
        return $this;
    }
    /**
     * Add item to Facility value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Facility $item
     * @return \Travelport\Air\StructType\Row
     */
    public function addToFacility(\Travelport\Air\StructType\Facility $item): self
    {
        $this->Facility[] = $item;
        
        return $this;
    }
    /**
     * Get Characteristic value
     * @return \Travelport\Air\StructType\Characteristic[]
     */
    public function getCharacteristic(): ?array
    {
        return $this->Characteristic;
    }
    /**
     * Set Characteristic value
     * @param \Travelport\Air\StructType\Characteristic[] $characteristic
     * @return \Travelport\Air\StructType\Row
     */
    public function setCharacteristic(?array $characteristic = null): self
    {
        $this->Characteristic = $characteristic;
        
        return $this;
    }
    /**
     * Add item to Characteristic value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Characteristic $item
     * @return \Travelport\Air\StructType\Row
     */
    public function addToCharacteristic(\Travelport\Air\StructType\Characteristic $item): self
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
     * @return \Travelport\Air\StructType\Row
     */
    public function setSearchTravelerRef(?string $searchTravelerRef = null): self
    {
        $this->SearchTravelerRef = $searchTravelerRef;
        
        return $this;
    }
}
