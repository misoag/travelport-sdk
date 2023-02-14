<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeDateSpec StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies dates as either specific date or a date range
 * @subpackage Structs
 */
class TypeDateSpec extends AbstractStructBase
{
    /**
     * The DateRange
     * Meta information extracted from the WSDL
     * - choice: DateRange | SpecificDate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeDateRange|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeDateRange $DateRange = null;
    /**
     * The SpecificDate
     * Meta information extracted from the WSDL
     * - choice: DateRange | SpecificDate
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SpecificDate = null;
    /**
     * Constructor method for typeDateSpec
     * @uses TypeDateSpec::setDateRange()
     * @uses TypeDateSpec::setSpecificDate()
     * @param \Travelport\UniversalRecord\StructType\TypeDateRange $dateRange
     * @param string $specificDate
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeDateRange $dateRange = null, ?string $specificDate = null)
    {
        $this
            ->setDateRange($dateRange)
            ->setSpecificDate($specificDate);
    }
    /**
     * Get DateRange value
     * @return \Travelport\UniversalRecord\StructType\TypeDateRange|null
     */
    public function getDateRange(): ?\Travelport\UniversalRecord\StructType\TypeDateRange
    {
        return isset($this->DateRange) ? $this->DateRange : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDateRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDateRange method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDateRangeForChoiceConstraintsFromSetDateRange($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SpecificDate',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DateRange can\'t be set as the property %s is already set. Only one property must be set among these properties: DateRange, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DateRange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeDateRange $dateRange
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec
     */
    public function setDateRange(?\Travelport\UniversalRecord\StructType\TypeDateRange $dateRange = null): self
    {
        // validation for constraint: choice(DateRange, SpecificDate)
        if ('' !== ($dateRangeChoiceErrorMessage = self::validateDateRangeForChoiceConstraintsFromSetDateRange($dateRange))) {
            throw new InvalidArgumentException($dateRangeChoiceErrorMessage, __LINE__);
        }
        if (is_null($dateRange) || (is_array($dateRange) && empty($dateRange))) {
            unset($this->DateRange);
        } else {
            $this->DateRange = $dateRange;
        }
        
        return $this;
    }
    /**
     * Get SpecificDate value
     * @return string|null
     */
    public function getSpecificDate(): ?string
    {
        return isset($this->SpecificDate) ? $this->SpecificDate : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSpecificDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificDate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSpecificDateForChoiceConstraintsFromSetSpecificDate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DateRange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SpecificDate can\'t be set as the property %s is already set. Only one property must be set among these properties: SpecificDate, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SpecificDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $specificDate
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec
     */
    public function setSpecificDate(?string $specificDate = null): self
    {
        // validation for constraint: string
        if (!is_null($specificDate) && !is_string($specificDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($specificDate, true), gettype($specificDate)), __LINE__);
        }
        // validation for constraint: choice(DateRange, SpecificDate)
        if ('' !== ($specificDateChoiceErrorMessage = self::validateSpecificDateForChoiceConstraintsFromSetSpecificDate($specificDate))) {
            throw new InvalidArgumentException($specificDateChoiceErrorMessage, __LINE__);
        }
        if (is_null($specificDate) || (is_array($specificDate) && empty($specificDate))) {
            unset($this->SpecificDate);
        } else {
            $this->SpecificDate = $specificDate;
        }
        
        return $this;
    }
}
