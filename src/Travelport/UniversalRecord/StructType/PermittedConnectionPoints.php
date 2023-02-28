<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedConnectionPoints StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the container to specify all permitted connection points. Applicable for 1G/1V/1P.
 * @subpackage Structs
 */
class PermittedConnectionPoints extends AbstractStructBase
{
    /**
     * The ConnectionPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:ConnectionPoint
     * @var \Travelport\UniversalRecord\StructType\TypeLocation[]
     */
    protected ?array $ConnectionPoint = null;
    /**
     * Constructor method for PermittedConnectionPoints
     * @uses PermittedConnectionPoints::setConnectionPoint()
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
     * This method is responsible for validating the value(s) passed to the setConnectionPoint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConnectionPoint method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConnectionPointForArrayConstraintFromSetConnectionPoint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $permittedConnectionPointsConnectionPointItem) {
            // validation for constraint: itemType
            if (!$permittedConnectionPointsConnectionPointItem instanceof \Travelport\UniversalRecord\StructType\TypeLocation) {
                $invalidValues[] = is_object($permittedConnectionPointsConnectionPointItem) ? get_class($permittedConnectionPointsConnectionPointItem) : sprintf('%s(%s)', gettype($permittedConnectionPointsConnectionPointItem), var_export($permittedConnectionPointsConnectionPointItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\PermittedConnectionPoints
     */
    public function setConnectionPoint(?array $connectionPoint = null): self
    {
        // validation for constraint: array
        if ('' !== ($connectionPointArrayErrorMessage = self::validateConnectionPointForArrayConstraintFromSetConnectionPoint($connectionPoint))) {
            throw new InvalidArgumentException($connectionPointArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($connectionPoint) && count($connectionPoint) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($connectionPoint)), __LINE__);
        }
        $this->ConnectionPoint = $connectionPoint;
        
        return $this;
    }
    /**
     * Add item to ConnectionPoint value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeLocation $item
     * @return \Travelport\UniversalRecord\StructType\PermittedConnectionPoints
     */
    public function addToConnectionPoint(\Travelport\UniversalRecord\StructType\TypeLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeLocation) {
            throw new InvalidArgumentException(sprintf('The ConnectionPoint property can only contain items of type \Travelport\UniversalRecord\StructType\TypeLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ConnectionPoint) && count($this->ConnectionPoint) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ConnectionPoint)), __LINE__);
        }
        $this->ConnectionPoint[] = $item;
        
        return $this;
    }
}
