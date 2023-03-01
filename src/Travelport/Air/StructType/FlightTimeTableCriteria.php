<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\GeneralTimeTable|null
     */
    public ?\Travelport\Air\StructType\GeneralTimeTable $GeneralTimeTable = null;
    /**
     * The SpecificTimeTable
     * Meta information extracted from the WSDL
     * - choice: GeneralTimeTable | SpecificTimeTable
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: SpecificTimeTable
     * @var \Travelport\Air\StructType\SpecificTimeTable|null
     */
    public ?\Travelport\Air\StructType\SpecificTimeTable $SpecificTimeTable = null;
    /**
     * Constructor method for FlightTimeTableCriteria
     * @uses FlightTimeTableCriteria::setGeneralTimeTable()
     * @uses FlightTimeTableCriteria::setSpecificTimeTable()
     * @param \Travelport\Air\StructType\GeneralTimeTable $generalTimeTable
     * @param \Travelport\Air\StructType\SpecificTimeTable $specificTimeTable
     */
    public function __construct(?\Travelport\Air\StructType\GeneralTimeTable $generalTimeTable = null, ?\Travelport\Air\StructType\SpecificTimeTable $specificTimeTable = null)
    {
        $this
            ->setGeneralTimeTable($generalTimeTable)
            ->setSpecificTimeTable($specificTimeTable);
    }
    /**
     * Get GeneralTimeTable value
     * @return \Travelport\Air\StructType\GeneralTimeTable|null
     */
    public function getGeneralTimeTable(): ?\Travelport\Air\StructType\GeneralTimeTable
    {
        return $this->GeneralTimeTable ?? null;
    }
    /**
     * Set GeneralTimeTable value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\GeneralTimeTable $generalTimeTable
     * @return \Travelport\Air\StructType\FlightTimeTableCriteria
     */
    public function setGeneralTimeTable(?\Travelport\Air\StructType\GeneralTimeTable $generalTimeTable = null): self
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
     * @return \Travelport\Air\StructType\SpecificTimeTable|null
     */
    public function getSpecificTimeTable(): ?\Travelport\Air\StructType\SpecificTimeTable
    {
        return $this->SpecificTimeTable ?? null;
    }
    /**
     * Set SpecificTimeTable value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\SpecificTimeTable $specificTimeTable
     * @return \Travelport\Air\StructType\FlightTimeTableCriteria
     */
    public function setSpecificTimeTable(?\Travelport\Air\StructType\SpecificTimeTable $specificTimeTable = null): self
    {
        if (is_null($specificTimeTable) || (is_array($specificTimeTable) && empty($specificTimeTable))) {
            unset($this->SpecificTimeTable);
        } else {
            $this->SpecificTimeTable = $specificTimeTable;
        }
        
        return $this;
    }
}
