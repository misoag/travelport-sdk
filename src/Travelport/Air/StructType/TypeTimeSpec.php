<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\TypeTimeRange|null
     */
    public ?\Travelport\Air\StructType\TypeTimeRange $TimeRange = null;
    /**
     * The SpecificTime
     * Meta information extracted from the WSDL
     * - choice: TimeRange | SpecificTime
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeSpecificTime|null
     */
    public ?\Travelport\Air\StructType\TypeSpecificTime $SpecificTime = null;
    /**
     * The PreferredTime
     * Meta information extracted from the WSDL
     * - documentation: Specifies a time that would be preferred within the time range specified.
     * - use: optional
     * @var string|null
     */
    public ?string $PreferredTime = null;
    /**
     * Constructor method for typeTimeSpec
     * @uses TypeTimeSpec::setTimeRange()
     * @uses TypeTimeSpec::setSpecificTime()
     * @uses TypeTimeSpec::setPreferredTime()
     * @param \Travelport\Air\StructType\TypeTimeRange $timeRange
     * @param \Travelport\Air\StructType\TypeSpecificTime $specificTime
     * @param string $preferredTime
     */
    public function __construct(?\Travelport\Air\StructType\TypeTimeRange $timeRange = null, ?\Travelport\Air\StructType\TypeSpecificTime $specificTime = null, ?string $preferredTime = null)
    {
        $this
            ->setTimeRange($timeRange)
            ->setSpecificTime($specificTime)
            ->setPreferredTime($preferredTime);
    }
    /**
     * Get TimeRange value
     * @return \Travelport\Air\StructType\TypeTimeRange|null
     */
    public function getTimeRange(): ?\Travelport\Air\StructType\TypeTimeRange
    {
        return $this->TimeRange ?? null;
    }
    /**
     * Set TimeRange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\TypeTimeRange $timeRange
     * @return \Travelport\Air\StructType\TypeTimeSpec
     */
    public function setTimeRange(?\Travelport\Air\StructType\TypeTimeRange $timeRange = null): self
    {
        if (is_null($timeRange) || (is_array($timeRange) && empty($timeRange))) {
            unset($this->TimeRange);
        } else {
            $this->TimeRange = $timeRange;
        }
        
        return $this;
    }
    /**
     * Get SpecificTime value
     * @return \Travelport\Air\StructType\TypeSpecificTime|null
     */
    public function getSpecificTime(): ?\Travelport\Air\StructType\TypeSpecificTime
    {
        return $this->SpecificTime ?? null;
    }
    /**
     * Set SpecificTime value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\TypeSpecificTime $specificTime
     * @return \Travelport\Air\StructType\TypeTimeSpec
     */
    public function setSpecificTime(?\Travelport\Air\StructType\TypeSpecificTime $specificTime = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeTimeSpec
     */
    public function setPreferredTime(?string $preferredTime = null): self
    {
        $this->PreferredTime = $preferredTime;
        
        return $this;
    }
}
