<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Itinerary StructType
 * Meta information extracted from the WSDL
 * - documentation: Allows an agency to select the itinenary option for ticket.
 * @subpackage Structs
 */
class Itinerary extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Specifies the type of itinenary option for ticket like Invoice type or Pocket itinenary.
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Option
     * Meta information extracted from the WSDL
     * - documentation: Specifies the itinerary option like NoFare,NoAmount.
     * - use: optional
     * @var string|null
     */
    protected ?string $Option = null;
    /**
     * The SeparateIndicator
     * Meta information extracted from the WSDL
     * - documentation: Set to true if one itinerary to be printed per passenger.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SeparateIndicator = null;
    /**
     * Constructor method for Itinerary
     * @uses Itinerary::setType()
     * @uses Itinerary::setOption()
     * @uses Itinerary::setSeparateIndicator()
     * @param string $type
     * @param string $option
     * @param bool $separateIndicator
     */
    public function __construct(?string $type = null, ?string $option = null, ?bool $separateIndicator = null)
    {
        $this
            ->setType($type)
            ->setOption($option)
            ->setSeparateIndicator($separateIndicator);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Travelport\UniversalRecord\EnumType\TypeItinerary::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeItinerary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Itinerary
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeItinerary::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeItinerary', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeItinerary::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Option value
     * @return string|null
     */
    public function getOption(): ?string
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @uses \Travelport\UniversalRecord\EnumType\TypeItineraryOption::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeItineraryOption::getValidValues()
     * @throws InvalidArgumentException
     * @param string $option
     * @return \Travelport\UniversalRecord\StructType\Itinerary
     */
    public function setOption(?string $option = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeItineraryOption::valueIsValid($option)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeItineraryOption', is_array($option) ? implode(', ', $option) : var_export($option, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeItineraryOption::getValidValues())), __LINE__);
        }
        $this->Option = $option;
        
        return $this;
    }
    /**
     * Get SeparateIndicator value
     * @return bool|null
     */
    public function getSeparateIndicator(): ?bool
    {
        return $this->SeparateIndicator;
    }
    /**
     * Set SeparateIndicator value
     * @param bool $separateIndicator
     * @return \Travelport\UniversalRecord\StructType\Itinerary
     */
    public function setSeparateIndicator(?bool $separateIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($separateIndicator) && !is_bool($separateIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($separateIndicator, true), gettype($separateIndicator)), __LINE__);
        }
        $this->SeparateIndicator = $separateIndicator;
        
        return $this;
    }
}
