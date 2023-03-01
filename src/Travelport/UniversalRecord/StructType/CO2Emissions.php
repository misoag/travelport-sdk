<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CO2Emissions StructType
 * Meta information extracted from the WSDL
 * - documentation: The carbon emissions produced by the journey
 * @subpackage Structs
 */
class CO2Emissions extends AbstractStructBase
{
    /**
     * The CO2Emission
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: CO2Emission
     * @var \Travelport\UniversalRecord\StructType\CO2Emission[]
     */
    public ?array $CO2Emission = null;
    /**
     * The TotalValue
     * Meta information extracted from the WSDL
     * - documentation: The total CO2 emission value for the journey
     * - use: optional
     * @var float|null
     */
    public ?float $TotalValue = null;
    /**
     * The Unit
     * Meta information extracted from the WSDL
     * - documentation: The unit used in the TotalValue attribute | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Unit = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: The category name of the type of cabin, either Economy or Premium. Premium is any cabin that is not considered Economy | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: The source responsible for the values | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Source = null;
    /**
     * Constructor method for CO2Emissions
     * @uses CO2Emissions::setCO2Emission()
     * @uses CO2Emissions::setTotalValue()
     * @uses CO2Emissions::setUnit()
     * @uses CO2Emissions::setCategory()
     * @uses CO2Emissions::setSource()
     * @param \Travelport\UniversalRecord\StructType\CO2Emission[] $cO2Emission
     * @param float $totalValue
     * @param string $unit
     * @param string $category
     * @param string $source
     */
    public function __construct(?array $cO2Emission = null, ?float $totalValue = null, ?string $unit = null, ?string $category = null, ?string $source = null)
    {
        $this
            ->setCO2Emission($cO2Emission)
            ->setTotalValue($totalValue)
            ->setUnit($unit)
            ->setCategory($category)
            ->setSource($source);
    }
    /**
     * Get CO2Emission value
     * @return \Travelport\UniversalRecord\StructType\CO2Emission[]
     */
    public function getCO2Emission(): ?array
    {
        return $this->CO2Emission;
    }
    /**
     * Set CO2Emission value
     * @param \Travelport\UniversalRecord\StructType\CO2Emission[] $cO2Emission
     * @return \Travelport\UniversalRecord\StructType\CO2Emissions
     */
    public function setCO2Emission(?array $cO2Emission = null): self
    {
        $this->CO2Emission = $cO2Emission;
        
        return $this;
    }
    /**
     * Add item to CO2Emission value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CO2Emission $item
     * @return \Travelport\UniversalRecord\StructType\CO2Emissions
     */
    public function addToCO2Emission(\Travelport\UniversalRecord\StructType\CO2Emission $item): self
    {
        $this->CO2Emission[] = $item;
        
        return $this;
    }
    /**
     * Get TotalValue value
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->TotalValue;
    }
    /**
     * Set TotalValue value
     * @param float $totalValue
     * @return \Travelport\UniversalRecord\StructType\CO2Emissions
     */
    public function setTotalValue(?float $totalValue = null): self
    {
        $this->TotalValue = $totalValue;
        
        return $this;
    }
    /**
     * Get Unit value
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @param string $unit
     * @return \Travelport\UniversalRecord\StructType\CO2Emissions
     */
    public function setUnit(?string $unit = null): self
    {
        $this->Unit = $unit;
        
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\CO2Emissions
     */
    public function setCategory(?string $category = null): self
    {
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Travelport\UniversalRecord\StructType\CO2Emissions
     */
    public function setSource(?string $source = null): self
    {
        $this->Source = $source;
        
        return $this;
    }
}
