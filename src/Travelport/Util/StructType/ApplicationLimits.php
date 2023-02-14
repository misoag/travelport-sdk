<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplicationLimits StructType
 * Meta information extracted from the WSDL
 * - documentation: Adds the limits on the number of options that can be selected for a particular type
 * @subpackage Structs
 */
class ApplicationLimits extends AbstractStructBase
{
    /**
     * The ApplicationLimit
     * Meta information extracted from the WSDL
     * - documentation: The application limits for a particular level
     * - maxOccurs: 10
     * @var \Travelport\Util\StructType\OptionalServiceApplicationLimitType[]
     */
    protected ?array $ApplicationLimit = null;
    /**
     * Constructor method for ApplicationLimits
     * @uses ApplicationLimits::setApplicationLimit()
     * @param \Travelport\Util\StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     */
    public function __construct(?array $applicationLimit = null)
    {
        $this
            ->setApplicationLimit($applicationLimit);
    }
    /**
     * Get ApplicationLimit value
     * @return \Travelport\Util\StructType\OptionalServiceApplicationLimitType[]
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
        foreach ($values as $applicationLimitsApplicationLimitItem) {
            // validation for constraint: itemType
            if (!$applicationLimitsApplicationLimitItem instanceof \Travelport\Util\StructType\OptionalServiceApplicationLimitType) {
                $invalidValues[] = is_object($applicationLimitsApplicationLimitItem) ? get_class($applicationLimitsApplicationLimitItem) : sprintf('%s(%s)', gettype($applicationLimitsApplicationLimitItem), var_export($applicationLimitsApplicationLimitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ApplicationLimit property can only contain items of type \Travelport\Util\StructType\OptionalServiceApplicationLimitType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ApplicationLimit value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\OptionalServiceApplicationLimitType[] $applicationLimit
     * @return \Travelport\Util\StructType\ApplicationLimits
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
     * @param \Travelport\Util\StructType\OptionalServiceApplicationLimitType $item
     * @return \Travelport\Util\StructType\ApplicationLimits
     */
    public function addToApplicationLimit(\Travelport\Util\StructType\OptionalServiceApplicationLimitType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\OptionalServiceApplicationLimitType) {
            throw new InvalidArgumentException(sprintf('The ApplicationLimit property can only contain items of type \Travelport\Util\StructType\OptionalServiceApplicationLimitType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->ApplicationLimit) && count($this->ApplicationLimit) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->ApplicationLimit)), __LINE__);
        }
        $this->ApplicationLimit[] = $item;
        
        return $this;
    }
}
