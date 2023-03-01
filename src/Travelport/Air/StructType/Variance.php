<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Variance StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates any variance in the requested flight.
 * @subpackage Structs
 */
class Variance extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Indicates type Variance, i.e. Actual, Estimated, Canceled and Diversion.
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - documentation: Indicates time for Variance.
     * - use: optional
     * @var string|null
     */
    public ?string $Time = null;
    /**
     * The Indicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates VAriance Indicator, i.e. Early, Late.
     * - use: optional
     * @var string|null
     */
    public ?string $Indicator = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Reason for Variance
     * - use: optional
     * @var string|null
     */
    public ?string $Reason = null;
    /**
     * Constructor method for Variance
     * @uses Variance::setType()
     * @uses Variance::setTime()
     * @uses Variance::setIndicator()
     * @uses Variance::setReason()
     * @param string $type
     * @param string $time
     * @param string $indicator
     * @param string $reason
     */
    public function __construct(string $type, ?string $time = null, ?string $indicator = null, ?string $reason = null)
    {
        $this
            ->setType($type)
            ->setTime($time)
            ->setIndicator($indicator)
            ->setReason($reason);
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
     * @return \Travelport\Air\StructType\Variance
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Travelport\Air\StructType\Variance
     */
    public function setTime(?string $time = null): self
    {
        $this->Time = $time;
        
        return $this;
    }
    /**
     * Get Indicator value
     * @return string|null
     */
    public function getIndicator(): ?string
    {
        return $this->Indicator;
    }
    /**
     * Set Indicator value
     * @param string $indicator
     * @return \Travelport\Air\StructType\Variance
     */
    public function setIndicator(?string $indicator = null): self
    {
        $this->Indicator = $indicator;
        
        return $this;
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \Travelport\Air\StructType\Variance
     */
    public function setReason(?string $reason = null): self
    {
        $this->Reason = $reason;
        
        return $this;
    }
}
