<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CO2Emissions StructType
 * Meta information extracted from the WSDL
 * - documentation: The carbon emissions produced by the journey
 * @subpackage Structs
 */
class CO2Emissions extends AbstractStructBase
{
    /**
     * The CO2Emission
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: CO2Emission
     * @var \Travelport\Util\StructType\CO2Emission[]
     */
    protected ?array $CO2Emission = null;
    /**
     * The TotalValue
     * Meta information extracted from the WSDL
     * - documentation: The total CO2 emission value for the journey
     * - use: optional
     * @var float|null
     */
    protected ?float $TotalValue = null;
    /**
     * The Unit
     * Meta information extracted from the WSDL
     * - documentation: The unit used in the TotalValue attribute | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Unit = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: The category name of the type of cabin, either Economy or Premium. Premium is any cabin that is not considered Economy | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Category = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: The source responsible for the values | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Source = null;
    /**
     * Constructor method for CO2Emissions
     * @uses CO2Emissions::setCO2Emission()
     * @uses CO2Emissions::setTotalValue()
     * @uses CO2Emissions::setUnit()
     * @uses CO2Emissions::setCategory()
     * @uses CO2Emissions::setSource()
     * @param \Travelport\Util\StructType\CO2Emission[] $cO2Emission
     * @param float $totalValue
     * @param string $unit
     * @param string $category
     * @param string $source
     */
    public function __construct(?array $cO2Emission = null, ?float $totalValue = null, ?string $unit = null, ?string $category = null, ?string $source = null)
    {
        $this
            ->setCO2Emission($cO2Emission)
            ->setTotalValue($totalValue)
            ->setUnit($unit)
            ->setCategory($category)
            ->setSource($source);
    }
    /**
     * Get CO2Emission value
     * @return \Travelport\Util\StructType\CO2Emission[]
     */
    public function getCO2Emission(): ?array
    {
        return $this->CO2Emission;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCO2Emission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCO2Emission method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCO2EmissionForArrayConstraintFromSetCO2Emission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cO2EmissionsCO2EmissionItem) {
            // validation for constraint: itemType
            if (!$cO2EmissionsCO2EmissionItem instanceof \Travelport\Util\StructType\CO2Emission) {
                $invalidValues[] = is_object($cO2EmissionsCO2EmissionItem) ? get_class($cO2EmissionsCO2EmissionItem) : sprintf('%s(%s)', gettype($cO2EmissionsCO2EmissionItem), var_export($cO2EmissionsCO2EmissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CO2Emission property can only contain items of type \Travelport\Util\StructType\CO2Emission, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CO2Emission value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CO2Emission[] $cO2Emission
     * @return \Travelport\Util\StructType\CO2Emissions
     */
    public function setCO2Emission(?array $cO2Emission = null): self
    {
        // validation for constraint: array
        if ('' !== ($cO2EmissionArrayErrorMessage = self::validateCO2EmissionForArrayConstraintFromSetCO2Emission($cO2Emission))) {
            throw new InvalidArgumentException($cO2EmissionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($cO2Emission) && count($cO2Emission) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($cO2Emission)), __LINE__);
        }
        $this->CO2Emission = $cO2Emission;
        
        return $this;
    }
    /**
     * Add item to CO2Emission value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CO2Emission $item
     * @return \Travelport\Util\StructType\CO2Emissions
     */
    public function addToCO2Emission(\Travelport\Util\StructType\CO2Emission $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CO2Emission) {
            throw new InvalidArgumentException(sprintf('The CO2Emission property can only contain items of type \Travelport\Util\StructType\CO2Emission, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->CO2Emission) && count($this->CO2Emission) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->CO2Emission)), __LINE__);
        }
        $this->CO2Emission[] = $item;
        
        return $this;
    }
    /**
     * Get TotalValue value
     * @return float|null
     */
    public function getTotalValue(): ?float
    {
        return $this->TotalValue;
    }
    /**
     * Set TotalValue value
     * @param float $totalValue
     * @return \Travelport\Util\StructType\CO2Emissions
     */
    public function setTotalValue(?float $totalValue = null): self
    {
        // validation for constraint: float
        if (!is_null($totalValue) && !(is_float($totalValue) || is_numeric($totalValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalValue, true), gettype($totalValue)), __LINE__);
        }
        $this->TotalValue = $totalValue;
        
        return $this;
    }
    /**
     * Get Unit value
     * @return string|null
     */
    public function getUnit(): ?string
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @param string $unit
     * @return \Travelport\Util\StructType\CO2Emissions
     */
    public function setUnit(?string $unit = null): self
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($unit) && mb_strlen((string) $unit) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $unit)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($unit) && mb_strlen((string) $unit) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $unit)), __LINE__);
        }
        $this->Unit = $unit;
        
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\Util\StructType\CO2Emissions
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($category) && mb_strlen((string) $category) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $category)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($category) && mb_strlen((string) $category) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Travelport\Util\StructType\CO2Emissions
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($source) && mb_strlen((string) $source) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $source)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($source) && mb_strlen((string) $source) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $source)), __LINE__);
        }
        $this->Source = $source;
        
        return $this;
    }
}
