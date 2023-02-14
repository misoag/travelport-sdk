<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Type;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - documentation: Indicates time for Variance.
     * - use: optional
     * @var string|null
     */
    protected ?string $Time = null;
    /**
     * The Indicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates VAriance Indicator, i.e. Early, Late.
     * - use: optional
     * @var string|null
     */
    protected ?string $Indicator = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: Reason for Variance
     * - use: optional
     * @var string|null
     */
    protected ?string $Reason = null;
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
     * @uses \Travelport\Util\EnumType\TypeVarianceType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVarianceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\Util\StructType\Variance
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVarianceType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVarianceType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\Util\EnumType\TypeVarianceType::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Variance
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeVarianceIndicator::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeVarianceIndicator::getValidValues()
     * @throws InvalidArgumentException
     * @param string $indicator
     * @return \Travelport\Util\StructType\Variance
     */
    public function setIndicator(?string $indicator = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeVarianceIndicator::valueIsValid($indicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeVarianceIndicator', is_array($indicator) ? implode(', ', $indicator) : var_export($indicator, true), implode(', ', \Travelport\Util\EnumType\TypeVarianceIndicator::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Variance
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        
        return $this;
    }
}
