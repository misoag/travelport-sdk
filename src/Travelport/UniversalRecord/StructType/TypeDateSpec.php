<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?\Travelport\UniversalRecord\StructType\TypeDateRange $DateRange = null;
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
    public ?string $SpecificDate = null;
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
        return $this->DateRange ?? null;
    }
    /**
     * Set DateRange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\TypeDateRange $dateRange
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec
     */
    public function setDateRange(?\Travelport\UniversalRecord\StructType\TypeDateRange $dateRange = null): self
    {
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
        return $this->SpecificDate ?? null;
    }
    /**
     * Set SpecificDate value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $specificDate
     * @return \Travelport\UniversalRecord\StructType\TypeDateSpec
     */
    public function setSpecificDate(?string $specificDate = null): self
    {
        if (is_null($specificDate) || (is_array($specificDate) && empty($specificDate))) {
            unset($this->SpecificDate);
        } else {
            $this->SpecificDate = $specificDate;
        }
        
        return $this;
    }
}
