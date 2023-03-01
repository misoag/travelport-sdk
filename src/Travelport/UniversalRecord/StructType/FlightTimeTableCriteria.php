<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightTimeTableCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Flight Time Table Search Criteria
 * @subpackage Structs
 */
class FlightTimeTableCriteria extends AbstractStructBase
{
    /**
     * The GeneralTimeTable
     * Meta information extracted from the WSDL
     * - choice: GeneralTimeTable | SpecificTimeTable
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: GeneralTimeTable
     * @var \Travelport\UniversalRecord\StructType\GeneralTimeTable|null
     */
    public ?\Travelport\UniversalRecord\StructType\GeneralTimeTable $GeneralTimeTable = null;
    /**
     * The SpecificTimeTable
     * Meta information extracted from the WSDL
     * - choice: GeneralTimeTable | SpecificTimeTable
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: SpecificTimeTable
     * @var \Travelport\UniversalRecord\StructType\SpecificTimeTable|null
     */
    public ?\Travelport\UniversalRecord\StructType\SpecificTimeTable $SpecificTimeTable = null;
    /**
     * Constructor method for FlightTimeTableCriteria
     * @uses FlightTimeTableCriteria::setGeneralTimeTable()
     * @uses FlightTimeTableCriteria::setSpecificTimeTable()
     * @param \Travelport\UniversalRecord\StructType\GeneralTimeTable $generalTimeTable
     * @param \Travelport\UniversalRecord\StructType\SpecificTimeTable $specificTimeTable
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\GeneralTimeTable $generalTimeTable = null, ?\Travelport\UniversalRecord\StructType\SpecificTimeTable $specificTimeTable = null)
    {
        $this
            ->setGeneralTimeTable($generalTimeTable)
            ->setSpecificTimeTable($specificTimeTable);
    }
    /**
     * Get GeneralTimeTable value
     * @return \Travelport\UniversalRecord\StructType\GeneralTimeTable|null
     */
    public function getGeneralTimeTable(): ?\Travelport\UniversalRecord\StructType\GeneralTimeTable
    {
        return $this->GeneralTimeTable ?? null;
    }
    /**
     * Set GeneralTimeTable value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\GeneralTimeTable $generalTimeTable
     * @return \Travelport\UniversalRecord\StructType\FlightTimeTableCriteria
     */
    public function setGeneralTimeTable(?\Travelport\UniversalRecord\StructType\GeneralTimeTable $generalTimeTable = null): self
    {
        if (is_null($generalTimeTable) || (is_array($generalTimeTable) && empty($generalTimeTable))) {
            unset($this->GeneralTimeTable);
        } else {
            $this->GeneralTimeTable = $generalTimeTable;
        }
        
        return $this;
    }
    /**
     * Get SpecificTimeTable value
     * @return \Travelport\UniversalRecord\StructType\SpecificTimeTable|null
     */
    public function getSpecificTimeTable(): ?\Travelport\UniversalRecord\StructType\SpecificTimeTable
    {
        return $this->SpecificTimeTable ?? null;
    }
    /**
     * Set SpecificTimeTable value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\SpecificTimeTable $specificTimeTable
     * @return \Travelport\UniversalRecord\StructType\FlightTimeTableCriteria
     */
    public function setSpecificTimeTable(?\Travelport\UniversalRecord\StructType\SpecificTimeTable $specificTimeTable = null): self
    {
        if (is_null($specificTimeTable) || (is_array($specificTimeTable) && empty($specificTimeTable))) {
            unset($this->SpecificTimeTable);
        } else {
            $this->SpecificTimeTable = $specificTimeTable;
        }
        
        return $this;
    }
}
