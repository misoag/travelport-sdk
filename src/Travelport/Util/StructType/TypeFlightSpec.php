<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeFlightSpec StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies flight number as either specific flight number or a flight number range
 * @subpackage Structs
 */
class TypeFlightSpec extends AbstractStructBase
{
    /**
     * The FlightNumberRange
     * Meta information extracted from the WSDL
     * - choice: FlightNumberRange | SpecificFlightNumber
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeFlightNumberRange|null
     */
    protected ?\Travelport\Util\StructType\TypeFlightNumberRange $FlightNumberRange = null;
    /**
     * The SpecificFlightNumber
     * Meta information extracted from the WSDL
     * - choice: FlightNumberRange | SpecificFlightNumber
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeSpecificFlightNumber|null
     */
    protected ?\Travelport\Util\StructType\TypeSpecificFlightNumber $SpecificFlightNumber = null;
    /**
     * Constructor method for typeFlightSpec
     * @uses TypeFlightSpec::setFlightNumberRange()
     * @uses TypeFlightSpec::setSpecificFlightNumber()
     * @param \Travelport\Util\StructType\TypeFlightNumberRange $flightNumberRange
     * @param \Travelport\Util\StructType\TypeSpecificFlightNumber $specificFlightNumber
     */
    public function __construct(?\Travelport\Util\StructType\TypeFlightNumberRange $flightNumberRange = null, ?\Travelport\Util\StructType\TypeSpecificFlightNumber $specificFlightNumber = null)
    {
        $this
            ->setFlightNumberRange($flightNumberRange)
            ->setSpecificFlightNumber($specificFlightNumber);
    }
    /**
     * Get FlightNumberRange value
     * @return \Travelport\Util\StructType\TypeFlightNumberRange|null
     */
    public function getFlightNumberRange(): ?\Travelport\Util\StructType\TypeFlightNumberRange
    {
        return isset($this->FlightNumberRange) ? $this->FlightNumberRange : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFlightNumberRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightNumberRange method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFlightNumberRangeForChoiceConstraintsFromSetFlightNumberRange($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SpecificFlightNumber',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FlightNumberRange can\'t be set as the property %s is already set. Only one property must be set among these properties: FlightNumberRange, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FlightNumberRange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeFlightNumberRange $flightNumberRange
     * @return \Travelport\Util\StructType\TypeFlightSpec
     */
    public function setFlightNumberRange(?\Travelport\Util\StructType\TypeFlightNumberRange $flightNumberRange = null): self
    {
        // validation for constraint: choice(FlightNumberRange, SpecificFlightNumber)
        if ('' !== ($flightNumberRangeChoiceErrorMessage = self::validateFlightNumberRangeForChoiceConstraintsFromSetFlightNumberRange($flightNumberRange))) {
            throw new InvalidArgumentException($flightNumberRangeChoiceErrorMessage, __LINE__);
        }
        if (is_null($flightNumberRange) || (is_array($flightNumberRange) && empty($flightNumberRange))) {
            unset($this->FlightNumberRange);
        } else {
            $this->FlightNumberRange = $flightNumberRange;
        }
        
        return $this;
    }
    /**
     * Get SpecificFlightNumber value
     * @return \Travelport\Util\StructType\TypeSpecificFlightNumber|null
     */
    public function getSpecificFlightNumber(): ?\Travelport\Util\StructType\TypeSpecificFlightNumber
    {
        return isset($this->SpecificFlightNumber) ? $this->SpecificFlightNumber : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSpecificFlightNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificFlightNumber method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSpecificFlightNumberForChoiceConstraintsFromSetSpecificFlightNumber($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FlightNumberRange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SpecificFlightNumber can\'t be set as the property %s is already set. Only one property must be set among these properties: SpecificFlightNumber, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SpecificFlightNumber value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeSpecificFlightNumber $specificFlightNumber
     * @return \Travelport\Util\StructType\TypeFlightSpec
     */
    public function setSpecificFlightNumber(?\Travelport\Util\StructType\TypeSpecificFlightNumber $specificFlightNumber = null): self
    {
        // validation for constraint: choice(FlightNumberRange, SpecificFlightNumber)
        if ('' !== ($specificFlightNumberChoiceErrorMessage = self::validateSpecificFlightNumberForChoiceConstraintsFromSetSpecificFlightNumber($specificFlightNumber))) {
            throw new InvalidArgumentException($specificFlightNumberChoiceErrorMessage, __LINE__);
        }
        if (is_null($specificFlightNumber) || (is_array($specificFlightNumber) && empty($specificFlightNumber))) {
            unset($this->SpecificFlightNumber);
        } else {
            $this->SpecificFlightNumber = $specificFlightNumber;
        }
        
        return $this;
    }
}
