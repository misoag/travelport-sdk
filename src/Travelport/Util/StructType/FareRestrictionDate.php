<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestrictionDate StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare restriction based on date ranges. StartDate and EndDate are strings representing respective dates. If a year component is present then it signifies an exact date. If only day and month components are present then it signifies a
 * seasonal date, which means applicable for that date in any year
 * @subpackage Structs
 */
class FareRestrictionDate extends AbstractStructBase
{
    /**
     * The Direction
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Direction = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The EndDateIndicator
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $EndDateIndicator = null;
    /**
     * Constructor method for FareRestrictionDate
     * @uses FareRestrictionDate::setDirection()
     * @uses FareRestrictionDate::setStartDate()
     * @uses FareRestrictionDate::setEndDate()
     * @uses FareRestrictionDate::setEndDateIndicator()
     * @param string $direction
     * @param string $startDate
     * @param string $endDate
     * @param string $endDateIndicator
     */
    public function __construct(?string $direction = null, ?string $startDate = null, ?string $endDate = null, ?string $endDateIndicator = null)
    {
        $this
            ->setDirection($direction)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setEndDateIndicator($endDateIndicator);
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \Travelport\Util\EnumType\TypeFareDirectionality::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFareDirectionality::getValidValues()
     * @throws InvalidArgumentException
     * @param string $direction
     * @return \Travelport\Util\StructType\FareRestrictionDate
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFareDirectionality::valueIsValid($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFareDirectionality', is_array($direction) ? implode(', ', $direction) : var_export($direction, true), implode(', ', \Travelport\Util\EnumType\TypeFareDirectionality::getValidValues())), __LINE__);
        }
        $this->Direction = $direction;
        
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Travelport\Util\StructType\FareRestrictionDate
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Travelport\Util\StructType\FareRestrictionDate
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        
        return $this;
    }
    /**
     * Get EndDateIndicator value
     * @return string|null
     */
    public function getEndDateIndicator(): ?string
    {
        return $this->EndDateIndicator;
    }
    /**
     * Set EndDateIndicator value
     * @param string $endDateIndicator
     * @return \Travelport\Util\StructType\FareRestrictionDate
     */
    public function setEndDateIndicator(?string $endDateIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($endDateIndicator) && !is_string($endDateIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDateIndicator, true), gettype($endDateIndicator)), __LINE__);
        }
        $this->EndDateIndicator = $endDateIndicator;
        
        return $this;
    }
}
