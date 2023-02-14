<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateMatchIndicator StructType
 * Meta information extracted from the WSDL
 * - documentation: "Match" Indicators for certain request parameters, e.g. Child Count, Extra Adults etc.
 * @subpackage Structs
 */
class RateMatchIndicator extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Status;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for RateMatchIndicator
     * @uses RateMatchIndicator::setType()
     * @uses RateMatchIndicator::setStatus()
     * @uses RateMatchIndicator::setValue()
     * @param string $type
     * @param string $status
     * @param string $value
     */
    public function __construct(string $type, string $status, ?string $value = null)
    {
        $this
            ->setType($type)
            ->setStatus($status)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Hotel\StructType\RateMatchIndicator
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Hotel\StructType\RateMatchIndicator
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\Hotel\StructType\RateMatchIndicator
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
