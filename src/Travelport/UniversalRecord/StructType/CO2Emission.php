<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CO2Emission StructType
 * Meta information extracted from the WSDL
 * - documentation: Carbon emission values
 * @subpackage Structs
 */
class CO2Emission extends AbstractStructBase
{
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: The segment reference | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AirSegmentRef = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: The CO2 emission value for the air segment
     * - use: optional
     * @var float|null
     */
    protected ?float $Value = null;
    /**
     * Constructor method for CO2Emission
     * @uses CO2Emission::setAirSegmentRef()
     * @uses CO2Emission::setValue()
     * @param string $airSegmentRef
     * @param float $value
     */
    public function __construct(?string $airSegmentRef = null, ?float $value = null)
    {
        $this
            ->setAirSegmentRef($airSegmentRef)
            ->setValue($value);
    }
    /**
     * Get AirSegmentRef value
     * @return string|null
     */
    public function getAirSegmentRef(): ?string
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param string $airSegmentRef
     * @return \Travelport\UniversalRecord\StructType\CO2Emission
     */
    public function setAirSegmentRef(?string $airSegmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($airSegmentRef) && !is_string($airSegmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airSegmentRef, true), gettype($airSegmentRef)), __LINE__);
        }
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Travelport\UniversalRecord\StructType\CO2Emission
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
