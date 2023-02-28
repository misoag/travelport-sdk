<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRestriction StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Restriction
 * @subpackage Structs
 */
class FareRestriction extends AbstractStructBase
{
    /**
     * The FareRestrictionDaysOfWeek
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: FareRestrictionDaysOfWeek
     * @var \Travelport\Util\StructType\FareRestrictionDaysOfWeek[]
     */
    protected ?array $FareRestrictionDaysOfWeek = null;
    /**
     * The FareRestrictionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRestrictionDate
     * @var \Travelport\Util\StructType\FareRestrictionDate[]
     */
    protected ?array $FareRestrictionDate = null;
    /**
     * The FareRestrictionSaleDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRestrictionSaleDate
     * @var \Travelport\Util\StructType\FareRestrictionSaleDate|null
     */
    protected ?\Travelport\Util\StructType\FareRestrictionSaleDate $FareRestrictionSaleDate = null;
    /**
     * The FareRestrictionSeasonal
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRestrictionSeasonal
     * @var \Travelport\Util\StructType\FareRestrictionSeasonal[]
     */
    protected ?array $FareRestrictionSeasonal = null;
    /**
     * The FareRestrictiontype
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $FareRestrictiontype = null;
    /**
     * Constructor method for FareRestriction
     * @uses FareRestriction::setFareRestrictionDaysOfWeek()
     * @uses FareRestriction::setFareRestrictionDate()
     * @uses FareRestriction::setFareRestrictionSaleDate()
     * @uses FareRestriction::setFareRestrictionSeasonal()
     * @uses FareRestriction::setFareRestrictiontype()
     * @param \Travelport\Util\StructType\FareRestrictionDaysOfWeek[] $fareRestrictionDaysOfWeek
     * @param \Travelport\Util\StructType\FareRestrictionDate[] $fareRestrictionDate
     * @param \Travelport\Util\StructType\FareRestrictionSaleDate $fareRestrictionSaleDate
     * @param \Travelport\Util\StructType\FareRestrictionSeasonal[] $fareRestrictionSeasonal
     * @param string $fareRestrictiontype
     */
    public function __construct(?array $fareRestrictionDaysOfWeek = null, ?array $fareRestrictionDate = null, ?\Travelport\Util\StructType\FareRestrictionSaleDate $fareRestrictionSaleDate = null, ?array $fareRestrictionSeasonal = null, ?string $fareRestrictiontype = null)
    {
        $this
            ->setFareRestrictionDaysOfWeek($fareRestrictionDaysOfWeek)
            ->setFareRestrictionDate($fareRestrictionDate)
            ->setFareRestrictionSaleDate($fareRestrictionSaleDate)
            ->setFareRestrictionSeasonal($fareRestrictionSeasonal)
            ->setFareRestrictiontype($fareRestrictiontype);
    }
    /**
     * Get FareRestrictionDaysOfWeek value
     * @return \Travelport\Util\StructType\FareRestrictionDaysOfWeek[]
     */
    public function getFareRestrictionDaysOfWeek(): ?array
    {
        return $this->FareRestrictionDaysOfWeek;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareRestrictionDaysOfWeek method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRestrictionDaysOfWeek method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRestrictionDaysOfWeekForArrayConstraintFromSetFareRestrictionDaysOfWeek(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRestrictionFareRestrictionDaysOfWeekItem) {
            // validation for constraint: itemType
            if (!$fareRestrictionFareRestrictionDaysOfWeekItem instanceof \Travelport\Util\StructType\FareRestrictionDaysOfWeek) {
                $invalidValues[] = is_object($fareRestrictionFareRestrictionDaysOfWeekItem) ? get_class($fareRestrictionFareRestrictionDaysOfWeekItem) : sprintf('%s(%s)', gettype($fareRestrictionFareRestrictionDaysOfWeekItem), var_export($fareRestrictionFareRestrictionDaysOfWeekItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRestrictionDaysOfWeek property can only contain items of type \Travelport\Util\StructType\FareRestrictionDaysOfWeek, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRestrictionDaysOfWeek value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRestrictionDaysOfWeek[] $fareRestrictionDaysOfWeek
     * @return \Travelport\Util\StructType\FareRestriction
     */
    public function setFareRestrictionDaysOfWeek(?array $fareRestrictionDaysOfWeek = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRestrictionDaysOfWeekArrayErrorMessage = self::validateFareRestrictionDaysOfWeekForArrayConstraintFromSetFareRestrictionDaysOfWeek($fareRestrictionDaysOfWeek))) {
            throw new InvalidArgumentException($fareRestrictionDaysOfWeekArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($fareRestrictionDaysOfWeek) && count($fareRestrictionDaysOfWeek) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($fareRestrictionDaysOfWeek)), __LINE__);
        }
        $this->FareRestrictionDaysOfWeek = $fareRestrictionDaysOfWeek;
        
        return $this;
    }
    /**
     * Add item to FareRestrictionDaysOfWeek value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRestrictionDaysOfWeek $item
     * @return \Travelport\Util\StructType\FareRestriction
     */
    public function addToFareRestrictionDaysOfWeek(\Travelport\Util\StructType\FareRestrictionDaysOfWeek $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareRestrictionDaysOfWeek) {
            throw new InvalidArgumentException(sprintf('The FareRestrictionDaysOfWeek property can only contain items of type \Travelport\Util\StructType\FareRestrictionDaysOfWeek, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->FareRestrictionDaysOfWeek) && count($this->FareRestrictionDaysOfWeek) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->FareRestrictionDaysOfWeek)), __LINE__);
        }
        $this->FareRestrictionDaysOfWeek[] = $item;
        
        return $this;
    }
    /**
     * Get FareRestrictionDate value
     * @return \Travelport\Util\StructType\FareRestrictionDate[]
     */
    public function getFareRestrictionDate(): ?array
    {
        return $this->FareRestrictionDate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareRestrictionDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRestrictionDate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRestrictionDateForArrayConstraintFromSetFareRestrictionDate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRestrictionFareRestrictionDateItem) {
            // validation for constraint: itemType
            if (!$fareRestrictionFareRestrictionDateItem instanceof \Travelport\Util\StructType\FareRestrictionDate) {
                $invalidValues[] = is_object($fareRestrictionFareRestrictionDateItem) ? get_class($fareRestrictionFareRestrictionDateItem) : sprintf('%s(%s)', gettype($fareRestrictionFareRestrictionDateItem), var_export($fareRestrictionFareRestrictionDateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRestrictionDate property can only contain items of type \Travelport\Util\StructType\FareRestrictionDate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRestrictionDate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRestrictionDate[] $fareRestrictionDate
     * @return \Travelport\Util\StructType\FareRestriction
     */
    public function setFareRestrictionDate(?array $fareRestrictionDate = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRestrictionDateArrayErrorMessage = self::validateFareRestrictionDateForArrayConstraintFromSetFareRestrictionDate($fareRestrictionDate))) {
            throw new InvalidArgumentException($fareRestrictionDateArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRestrictionDate) && count($fareRestrictionDate) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRestrictionDate)), __LINE__);
        }
        $this->FareRestrictionDate = $fareRestrictionDate;
        
        return $this;
    }
    /**
     * Add item to FareRestrictionDate value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRestrictionDate $item
     * @return \Travelport\Util\StructType\FareRestriction
     */
    public function addToFareRestrictionDate(\Travelport\Util\StructType\FareRestrictionDate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareRestrictionDate) {
            throw new InvalidArgumentException(sprintf('The FareRestrictionDate property can only contain items of type \Travelport\Util\StructType\FareRestrictionDate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRestrictionDate) && count($this->FareRestrictionDate) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRestrictionDate)), __LINE__);
        }
        $this->FareRestrictionDate[] = $item;
        
        return $this;
    }
    /**
     * Get FareRestrictionSaleDate value
     * @return \Travelport\Util\StructType\FareRestrictionSaleDate|null
     */
    public function getFareRestrictionSaleDate(): ?\Travelport\Util\StructType\FareRestrictionSaleDate
    {
        return $this->FareRestrictionSaleDate;
    }
    /**
     * Set FareRestrictionSaleDate value
     * @param \Travelport\Util\StructType\FareRestrictionSaleDate $fareRestrictionSaleDate
     * @return \Travelport\Util\StructType\FareRestriction
     */
    public function setFareRestrictionSaleDate(?\Travelport\Util\StructType\FareRestrictionSaleDate $fareRestrictionSaleDate = null): self
    {
        $this->FareRestrictionSaleDate = $fareRestrictionSaleDate;
        
        return $this;
    }
    /**
     * Get FareRestrictionSeasonal value
     * @return \Travelport\Util\StructType\FareRestrictionSeasonal[]
     */
    public function getFareRestrictionSeasonal(): ?array
    {
        return $this->FareRestrictionSeasonal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareRestrictionSeasonal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRestrictionSeasonal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRestrictionSeasonalForArrayConstraintFromSetFareRestrictionSeasonal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRestrictionFareRestrictionSeasonalItem) {
            // validation for constraint: itemType
            if (!$fareRestrictionFareRestrictionSeasonalItem instanceof \Travelport\Util\StructType\FareRestrictionSeasonal) {
                $invalidValues[] = is_object($fareRestrictionFareRestrictionSeasonalItem) ? get_class($fareRestrictionFareRestrictionSeasonalItem) : sprintf('%s(%s)', gettype($fareRestrictionFareRestrictionSeasonalItem), var_export($fareRestrictionFareRestrictionSeasonalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRestrictionSeasonal property can only contain items of type \Travelport\Util\StructType\FareRestrictionSeasonal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRestrictionSeasonal value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRestrictionSeasonal[] $fareRestrictionSeasonal
     * @return \Travelport\Util\StructType\FareRestriction
     */
    public function setFareRestrictionSeasonal(?array $fareRestrictionSeasonal = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRestrictionSeasonalArrayErrorMessage = self::validateFareRestrictionSeasonalForArrayConstraintFromSetFareRestrictionSeasonal($fareRestrictionSeasonal))) {
            throw new InvalidArgumentException($fareRestrictionSeasonalArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRestrictionSeasonal) && count($fareRestrictionSeasonal) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRestrictionSeasonal)), __LINE__);
        }
        $this->FareRestrictionSeasonal = $fareRestrictionSeasonal;
        
        return $this;
    }
    /**
     * Add item to FareRestrictionSeasonal value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRestrictionSeasonal $item
     * @return \Travelport\Util\StructType\FareRestriction
     */
    public function addToFareRestrictionSeasonal(\Travelport\Util\StructType\FareRestrictionSeasonal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareRestrictionSeasonal) {
            throw new InvalidArgumentException(sprintf('The FareRestrictionSeasonal property can only contain items of type \Travelport\Util\StructType\FareRestrictionSeasonal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRestrictionSeasonal) && count($this->FareRestrictionSeasonal) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRestrictionSeasonal)), __LINE__);
        }
        $this->FareRestrictionSeasonal[] = $item;
        
        return $this;
    }
    /**
     * Get FareRestrictiontype value
     * @return string|null
     */
    public function getFareRestrictiontype(): ?string
    {
        return $this->FareRestrictiontype;
    }
    /**
     * Set FareRestrictiontype value
     * @uses \Travelport\Util\EnumType\TypeFareRestrictionType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFareRestrictionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fareRestrictiontype
     * @return \Travelport\Util\StructType\FareRestriction
     */
    public function setFareRestrictiontype(?string $fareRestrictiontype = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFareRestrictionType::valueIsValid($fareRestrictiontype)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFareRestrictionType', is_array($fareRestrictiontype) ? implode(', ', $fareRestrictiontype) : var_export($fareRestrictiontype, true), implode(', ', \Travelport\Util\EnumType\TypeFareRestrictionType::getValidValues())), __LINE__);
        }
        $this->FareRestrictiontype = $fareRestrictiontype;
        
        return $this;
    }
}
