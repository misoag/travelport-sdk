<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentSpecialUpdate StructType
 * @subpackage Structs
 */
class AirSegmentSpecialUpdate extends AbstractStructBase
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Action;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - choice: AirSegment
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: air_v51_0:AirSegment
     * @var \Travelport\UniversalRecord\StructType\TypeBaseAirSegment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $AirSegment = null;
    /**
     * Constructor method for AirSegmentSpecialUpdate
     * @uses AirSegmentSpecialUpdate::setAction()
     * @uses AirSegmentSpecialUpdate::setAirSegment()
     * @param string $action
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment
     */
    public function __construct(string $action, ?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment = null)
    {
        $this
            ->setAction($action)
            ->setAirSegment($airSegment);
    }
    /**
     * Get Action value
     * @return string
     */
    public function getAction(): string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate
     */
    public function setAction(string $action): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\UniversalRecord\StructType\TypeBaseAirSegment|null
     */
    public function getAirSegment(): ?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment
    {
        return isset($this->AirSegment) ? $this->AirSegment : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAirSegment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSegment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAirSegmentForChoiceConstraintsFromSetAirSegment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AirSegment can\'t be set as the property %s is already set. Only one property must be set among these properties: AirSegment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AirSegment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment
     * @return \Travelport\UniversalRecord\StructType\AirSegmentSpecialUpdate
     */
    public function setAirSegment(?\Travelport\UniversalRecord\StructType\TypeBaseAirSegment $airSegment = null): self
    {
        // validation for constraint: choice(AirSegment)
        if ('' !== ($airSegmentChoiceErrorMessage = self::validateAirSegmentForChoiceConstraintsFromSetAirSegment($airSegment))) {
            throw new InvalidArgumentException($airSegmentChoiceErrorMessage, __LINE__);
        }
        if (is_null($airSegment) || (is_array($airSegment) && empty($airSegment))) {
            unset($this->AirSegment);
        } else {
            $this->AirSegment = $airSegment;
        }
        
        return $this;
    }
}
