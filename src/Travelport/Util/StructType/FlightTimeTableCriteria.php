<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\GeneralTimeTable|null
     */
    protected ?\Travelport\Util\StructType\GeneralTimeTable $GeneralTimeTable = null;
    /**
     * The SpecificTimeTable
     * Meta information extracted from the WSDL
     * - choice: GeneralTimeTable | SpecificTimeTable
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: SpecificTimeTable
     * @var \Travelport\Util\StructType\SpecificTimeTable|null
     */
    protected ?\Travelport\Util\StructType\SpecificTimeTable $SpecificTimeTable = null;
    /**
     * Constructor method for FlightTimeTableCriteria
     * @uses FlightTimeTableCriteria::setGeneralTimeTable()
     * @uses FlightTimeTableCriteria::setSpecificTimeTable()
     * @param \Travelport\Util\StructType\GeneralTimeTable $generalTimeTable
     * @param \Travelport\Util\StructType\SpecificTimeTable $specificTimeTable
     */
    public function __construct(?\Travelport\Util\StructType\GeneralTimeTable $generalTimeTable = null, ?\Travelport\Util\StructType\SpecificTimeTable $specificTimeTable = null)
    {
        $this
            ->setGeneralTimeTable($generalTimeTable)
            ->setSpecificTimeTable($specificTimeTable);
    }
    /**
     * Get GeneralTimeTable value
     * @return \Travelport\Util\StructType\GeneralTimeTable|null
     */
    public function getGeneralTimeTable(): ?\Travelport\Util\StructType\GeneralTimeTable
    {
        return isset($this->GeneralTimeTable) ? $this->GeneralTimeTable : null;
    }
    /**
     * This method is responsible for validating the value passed to the setGeneralTimeTable method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralTimeTable method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGeneralTimeTableForChoiceConstraintsFromSetGeneralTimeTable($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SpecificTimeTable',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property GeneralTimeTable can\'t be set as the property %s is already set. Only one property must be set among these properties: GeneralTimeTable, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set GeneralTimeTable value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\GeneralTimeTable $generalTimeTable
     * @return \Travelport\Util\StructType\FlightTimeTableCriteria
     */
    public function setGeneralTimeTable(?\Travelport\Util\StructType\GeneralTimeTable $generalTimeTable = null): self
    {
        // validation for constraint: choice(GeneralTimeTable, SpecificTimeTable)
        if ('' !== ($generalTimeTableChoiceErrorMessage = self::validateGeneralTimeTableForChoiceConstraintsFromSetGeneralTimeTable($generalTimeTable))) {
            throw new InvalidArgumentException($generalTimeTableChoiceErrorMessage, __LINE__);
        }
        if (is_null($generalTimeTable) || (is_array($generalTimeTable) && empty($generalTimeTable))) {
            unset($this->GeneralTimeTable);
        } else {
            $this->GeneralTimeTable = $generalTimeTable;
        }
        
        return $this;
    }
    /**
     * Get SpecificTimeTable value
     * @return \Travelport\Util\StructType\SpecificTimeTable|null
     */
    public function getSpecificTimeTable(): ?\Travelport\Util\StructType\SpecificTimeTable
    {
        return isset($this->SpecificTimeTable) ? $this->SpecificTimeTable : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSpecificTimeTable method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificTimeTable method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSpecificTimeTableForChoiceConstraintsFromSetSpecificTimeTable($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'GeneralTimeTable',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SpecificTimeTable can\'t be set as the property %s is already set. Only one property must be set among these properties: SpecificTimeTable, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SpecificTimeTable value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SpecificTimeTable $specificTimeTable
     * @return \Travelport\Util\StructType\FlightTimeTableCriteria
     */
    public function setSpecificTimeTable(?\Travelport\Util\StructType\SpecificTimeTable $specificTimeTable = null): self
    {
        // validation for constraint: choice(GeneralTimeTable, SpecificTimeTable)
        if ('' !== ($specificTimeTableChoiceErrorMessage = self::validateSpecificTimeTableForChoiceConstraintsFromSetSpecificTimeTable($specificTimeTable))) {
            throw new InvalidArgumentException($specificTimeTableChoiceErrorMessage, __LINE__);
        }
        if (is_null($specificTimeTable) || (is_array($specificTimeTable) && empty($specificTimeTable))) {
            unset($this->SpecificTimeTable);
        } else {
            $this->SpecificTimeTable = $specificTimeTable;
        }
        
        return $this;
    }
}
