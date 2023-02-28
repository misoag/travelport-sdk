<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateRoute StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about this Alternate Route component
 * @subpackage Structs
 */
class AlternateRoute extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The Leg
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Leg
     * @var \Travelport\UniversalRecord\StructType\Leg[]
     */
    protected ?array $Leg = null;
    /**
     * Constructor method for AlternateRoute
     * @uses AlternateRoute::setKey()
     * @uses AlternateRoute::setLeg()
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\Leg[] $leg
     */
    public function __construct(string $key, ?array $leg = null)
    {
        $this
            ->setKey($key)
            ->setLeg($leg);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\AlternateRoute
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Leg value
     * @return \Travelport\UniversalRecord\StructType\Leg[]
     */
    public function getLeg(): ?array
    {
        return $this->Leg;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLeg method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLeg method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLegForArrayConstraintFromSetLeg(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $alternateRouteLegItem) {
            // validation for constraint: itemType
            if (!$alternateRouteLegItem instanceof \Travelport\UniversalRecord\StructType\Leg) {
                $invalidValues[] = is_object($alternateRouteLegItem) ? get_class($alternateRouteLegItem) : sprintf('%s(%s)', gettype($alternateRouteLegItem), var_export($alternateRouteLegItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Leg property can only contain items of type \Travelport\UniversalRecord\StructType\Leg, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Leg value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Leg[] $leg
     * @return \Travelport\UniversalRecord\StructType\AlternateRoute
     */
    public function setLeg(?array $leg = null): self
    {
        // validation for constraint: array
        if ('' !== ($legArrayErrorMessage = self::validateLegForArrayConstraintFromSetLeg($leg))) {
            throw new InvalidArgumentException($legArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($leg) && count($leg) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($leg)), __LINE__);
        }
        $this->Leg = $leg;
        
        return $this;
    }
    /**
     * Add item to Leg value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Leg $item
     * @return \Travelport\UniversalRecord\StructType\AlternateRoute
     */
    public function addToLeg(\Travelport\UniversalRecord\StructType\Leg $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Leg) {
            throw new InvalidArgumentException(sprintf('The Leg property can only contain items of type \Travelport\UniversalRecord\StructType\Leg, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Leg) && count($this->Leg) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Leg)), __LINE__);
        }
        $this->Leg[] = $item;
        
        return $this;
    }
}
