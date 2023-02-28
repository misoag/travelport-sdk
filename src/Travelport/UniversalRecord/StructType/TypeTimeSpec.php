<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTimeSpec StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies times as either specific times, or a time range
 * @subpackage Structs
 */
class TypeTimeSpec extends AbstractStructBase
{
    /**
     * The TimeRange
     * Meta information extracted from the WSDL
     * - choice: TimeRange | SpecificTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTimeRange|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeTimeRange $TimeRange = null;
    /**
     * The SpecificTime
     * Meta information extracted from the WSDL
     * - choice: TimeRange | SpecificTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeSpecificTime|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeSpecificTime $SpecificTime = null;
    /**
     * The PreferredTime
     * Meta information extracted from the WSDL
     * - documentation: Specifies a time that would be preferred within the time range specified.
     * - use: optional
     * @var string|null
     */
    protected ?string $PreferredTime = null;
    /**
     * Constructor method for typeTimeSpec
     * @uses TypeTimeSpec::setTimeRange()
     * @uses TypeTimeSpec::setSpecificTime()
     * @uses TypeTimeSpec::setPreferredTime()
     * @param \Travelport\UniversalRecord\StructType\TypeTimeRange $timeRange
     * @param \Travelport\UniversalRecord\StructType\TypeSpecificTime $specificTime
     * @param string $preferredTime
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeTimeRange $timeRange = null, ?\Travelport\UniversalRecord\StructType\TypeSpecificTime $specificTime = null, ?string $preferredTime = null)
    {
        $this
            ->setTimeRange($timeRange)
            ->setSpecificTime($specificTime)
            ->setPreferredTime($preferredTime);
    }
    /**
     * Get TimeRange value
     * @return \Travelport\UniversalRecord\StructType\TypeTimeRange|null
     */
    public function getTimeRange(): ?\Travelport\UniversalRecord\StructType\TypeTimeRange
    {
        return $this->TimeRange ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTimeRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTimeRange method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTimeRangeForChoiceConstraintFromSetTimeRange($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SpecificTime',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TimeRange can\'t be set as the property %s is already set. Only one property must be set among these properties: TimeRange, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TimeRange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTimeRange $timeRange
     * @return \Travelport\UniversalRecord\StructType\TypeTimeSpec
     */
    public function setTimeRange(?\Travelport\UniversalRecord\StructType\TypeTimeRange $timeRange = null): self
    {
        // validation for constraint: choice(TimeRange, SpecificTime)
        if ('' !== ($timeRangeChoiceErrorMessage = self::validateTimeRangeForChoiceConstraintFromSetTimeRange($timeRange))) {
            throw new InvalidArgumentException($timeRangeChoiceErrorMessage, __LINE__);
        }
        if (is_null($timeRange) || (is_array($timeRange) && empty($timeRange))) {
            unset($this->TimeRange);
        } else {
            $this->TimeRange = $timeRange;
        }
        
        return $this;
    }
    /**
     * Get SpecificTime value
     * @return \Travelport\UniversalRecord\StructType\TypeSpecificTime|null
     */
    public function getSpecificTime(): ?\Travelport\UniversalRecord\StructType\TypeSpecificTime
    {
        return $this->SpecificTime ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSpecificTime method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSpecificTime method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSpecificTimeForChoiceConstraintFromSetSpecificTime($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TimeRange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SpecificTime can\'t be set as the property %s is already set. Only one property must be set among these properties: SpecificTime, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SpecificTime value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeSpecificTime $specificTime
     * @return \Travelport\UniversalRecord\StructType\TypeTimeSpec
     */
    public function setSpecificTime(?\Travelport\UniversalRecord\StructType\TypeSpecificTime $specificTime = null): self
    {
        // validation for constraint: choice(TimeRange, SpecificTime)
        if ('' !== ($specificTimeChoiceErrorMessage = self::validateSpecificTimeForChoiceConstraintFromSetSpecificTime($specificTime))) {
            throw new InvalidArgumentException($specificTimeChoiceErrorMessage, __LINE__);
        }
        if (is_null($specificTime) || (is_array($specificTime) && empty($specificTime))) {
            unset($this->SpecificTime);
        } else {
            $this->SpecificTime = $specificTime;
        }
        
        return $this;
    }
    /**
     * Get PreferredTime value
     * @return string|null
     */
    public function getPreferredTime(): ?string
    {
        return $this->PreferredTime;
    }
    /**
     * Set PreferredTime value
     * @param string $preferredTime
     * @return \Travelport\UniversalRecord\StructType\TypeTimeSpec
     */
    public function setPreferredTime(?string $preferredTime = null): self
    {
        // validation for constraint: string
        if (!is_null($preferredTime) && !is_string($preferredTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preferredTime, true), gettype($preferredTime)), __LINE__);
        }
        $this->PreferredTime = $preferredTime;
        
        return $this;
    }
}
