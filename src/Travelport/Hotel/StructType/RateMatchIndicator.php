<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public string $Type;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Status;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Value = null;
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
        $this->Value = $value;
        
        return $this;
    }
}
