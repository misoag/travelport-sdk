<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredConnectionPoints StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the container to specify all preferred connection points. Applicable for 1G/1V only.
 * @subpackage Structs
 */
class PreferredConnectionPoints extends AbstractStructBase
{
    /**
     * The ConnectionPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - ref: common:ConnectionPoint
     * @var \Travelport\UniversalRecord\StructType\TypeLocation[]
     */
    protected ?array $ConnectionPoint = null;
    /**
     * Constructor method for PreferredConnectionPoints
     * @uses PreferredConnectionPoints::setConnectionPoint()
     * @param \Travelport\UniversalRecord\StructType\TypeLocation[] $connectionPoint
     */
    public function __construct(?array $connectionPoint = null)
    {
        $this
            ->setConnectionPoint($connectionPoint);
    }
    /**
     * Get ConnectionPoint value
     * @return \Travelport\UniversalRecord\StructType\TypeLocation[]
     */
    public function getConnectionPoint(): ?array
    {
        return $this->ConnectionPoint;
    }
    /**
     * This method is responsible for validating the values passed to the setConnectionPoint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConnectionPoint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConnectionPointForArrayConstraintsFromSetConnectionPoint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $preferredConnectionPointsConnectionPointItem) {
            // validation for constraint: itemType
            if (!$preferredConnectionPointsConnectionPointItem instanceof \Travelport\UniversalRecord\StructType\TypeLocation) {
                $invalidValues[] = is_object($preferredConnectionPointsConnectionPointItem) ? get_class($preferredConnectionPointsConnectionPointItem) : sprintf('%s(%s)', gettype($preferredConnectionPointsConnectionPointItem), var_export($preferredConnectionPointsConnectionPointItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConnectionPoint property can only contain items of type \Travelport\UniversalRecord\StructType\TypeLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ConnectionPoint value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeLocation[] $connectionPoint
     * @return \Travelport\UniversalRecord\StructType\PreferredConnectionPoints
     */
    public function setConnectionPoint(?array $connectionPoint = null): self
    {
        // validation for constraint: array
        if ('' !== ($connectionPointArrayErrorMessage = self::validateConnectionPointForArrayConstraintsFromSetConnectionPoint($connectionPoint))) {
            throw new InvalidArgumentException($connectionPointArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($connectionPoint) && count($connectionPoint) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($connectionPoint)), __LINE__);
        }
        $this->ConnectionPoint = $connectionPoint;
        
        return $this;
    }
    /**
     * Add item to ConnectionPoint value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeLocation $item
     * @return \Travelport\UniversalRecord\StructType\PreferredConnectionPoints
     */
    public function addToConnectionPoint(\Travelport\UniversalRecord\StructType\TypeLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeLocation) {
            throw new InvalidArgumentException(sprintf('The ConnectionPoint property can only contain items of type \Travelport\UniversalRecord\StructType\TypeLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->ConnectionPoint) && count($this->ConnectionPoint) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->ConnectionPoint)), __LINE__);
        }
        $this->ConnectionPoint[] = $item;
        
        return $this;
    }
}
