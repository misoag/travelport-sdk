<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecondaryTypeRule StructType
 * Meta information extracted from the WSDL
 * - documentation: Lists a single secondary code for the optional / additional service.
 * @subpackage Structs
 */
class SecondaryTypeRule extends AbstractStructBase
{
    /**
     * The SecondaryType
     * Meta information extracted from the WSDL
     * - documentation: The unique type to associate a secondary type in an optional service | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $SecondaryType;
    /**
     * The ApplicationLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \StructType\OptionalServiceApplicationLimitType[]
     */
    protected ?array $ApplicationLimit = null;
    /**
     * Constructor method for SecondaryTypeRule
     * @uses SecondaryTypeRule::setSecondaryType()
     * @uses SecondaryTypeRule::setApplicationLimit()
     * @param string $secondaryType
     * @param \StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     */
    public function __construct(string $secondaryType, ?array $applicationLimit = null)
    {
        $this
            ->setSecondaryType($secondaryType)
            ->setApplicationLimit($applicationLimit);
    }
    /**
     * Get SecondaryType value
     * @return string
     */
    public function getSecondaryType(): string
    {
        return $this->SecondaryType;
    }
    /**
     * Set SecondaryType value
     * @param string $secondaryType
     * @return \StructType\SecondaryTypeRule
     */
    public function setSecondaryType(string $secondaryType): self
    {
        // validation for constraint: string
        if (!is_null($secondaryType) && !is_string($secondaryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondaryType, true), gettype($secondaryType)), __LINE__);
        }
        $this->SecondaryType = $secondaryType;
        
        return $this;
    }
    /**
     * Get ApplicationLimit value
     * @return \StructType\OptionalServiceApplicationLimitType[]
     */
    public function getApplicationLimit(): ?array
    {
        return $this->ApplicationLimit;
    }
    /**
     * This method is responsible for validating the values passed to the setApplicationLimit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplicationLimit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplicationLimitForArrayConstraintsFromSetApplicationLimit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $secondaryTypeRuleApplicationLimitItem) {
            // validation for constraint: itemType
            if (!$secondaryTypeRuleApplicationLimitItem instanceof \StructType\OptionalServiceApplicationLimitType) {
                $invalidValues[] = is_object($secondaryTypeRuleApplicationLimitItem) ? get_class($secondaryTypeRuleApplicationLimitItem) : sprintf('%s(%s)', gettype($secondaryTypeRuleApplicationLimitItem), var_export($secondaryTypeRuleApplicationLimitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ApplicationLimit property can only contain items of type \StructType\OptionalServiceApplicationLimitType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ApplicationLimit value
     * @throws InvalidArgumentException
     * @param \StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     * @return \StructType\SecondaryTypeRule
     */
    public function setApplicationLimit(?array $applicationLimit = null): self
    {
        // validation for constraint: array
        if ('' !== ($applicationLimitArrayErrorMessage = self::validateApplicationLimitForArrayConstraintsFromSetApplicationLimit($applicationLimit))) {
            throw new InvalidArgumentException($applicationLimitArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($applicationLimit) && count($applicationLimit) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($applicationLimit)), __LINE__);
        }
        $this->ApplicationLimit = $applicationLimit;
        
        return $this;
    }
    /**
     * Add item to ApplicationLimit value
     * @throws InvalidArgumentException
     * @param \StructType\OptionalServiceApplicationLimitType $item
     * @return \StructType\SecondaryTypeRule
     */
    public function addToApplicationLimit(\StructType\OptionalServiceApplicationLimitType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OptionalServiceApplicationLimitType) {
            throw new InvalidArgumentException(sprintf('The ApplicationLimit property can only contain items of type \StructType\OptionalServiceApplicationLimitType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->ApplicationLimit) && count($this->ApplicationLimit) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->ApplicationLimit)), __LINE__);
        }
        $this->ApplicationLimit[] = $item;
        
        return $this;
    }
}
