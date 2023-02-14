<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateRouteList StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the alternate routes for the request
 * @subpackage Structs
 */
class AlternateRouteList extends AbstractStructBase
{
    /**
     * The AlternateRoute
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AlternateRoute
     * @var \Travelport\UniversalRecord\StructType\AlternateRoute[]
     */
    protected ?array $AlternateRoute = null;
    /**
     * Constructor method for AlternateRouteList
     * @uses AlternateRouteList::setAlternateRoute()
     * @param \Travelport\UniversalRecord\StructType\AlternateRoute[] $alternateRoute
     */
    public function __construct(?array $alternateRoute = null)
    {
        $this
            ->setAlternateRoute($alternateRoute);
    }
    /**
     * Get AlternateRoute value
     * @return \Travelport\UniversalRecord\StructType\AlternateRoute[]
     */
    public function getAlternateRoute(): ?array
    {
        return $this->AlternateRoute;
    }
    /**
     * This method is responsible for validating the values passed to the setAlternateRoute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAlternateRoute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAlternateRouteForArrayConstraintsFromSetAlternateRoute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $alternateRouteListAlternateRouteItem) {
            // validation for constraint: itemType
            if (!$alternateRouteListAlternateRouteItem instanceof \Travelport\UniversalRecord\StructType\AlternateRoute) {
                $invalidValues[] = is_object($alternateRouteListAlternateRouteItem) ? get_class($alternateRouteListAlternateRouteItem) : sprintf('%s(%s)', gettype($alternateRouteListAlternateRouteItem), var_export($alternateRouteListAlternateRouteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AlternateRoute property can only contain items of type \Travelport\UniversalRecord\StructType\AlternateRoute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AlternateRoute value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AlternateRoute[] $alternateRoute
     * @return \Travelport\UniversalRecord\StructType\AlternateRouteList
     */
    public function setAlternateRoute(?array $alternateRoute = null): self
    {
        // validation for constraint: array
        if ('' !== ($alternateRouteArrayErrorMessage = self::validateAlternateRouteForArrayConstraintsFromSetAlternateRoute($alternateRoute))) {
            throw new InvalidArgumentException($alternateRouteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($alternateRoute) && count($alternateRoute) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($alternateRoute)), __LINE__);
        }
        $this->AlternateRoute = $alternateRoute;
        
        return $this;
    }
    /**
     * Add item to AlternateRoute value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AlternateRoute $item
     * @return \Travelport\UniversalRecord\StructType\AlternateRouteList
     */
    public function addToAlternateRoute(\Travelport\UniversalRecord\StructType\AlternateRoute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AlternateRoute) {
            throw new InvalidArgumentException(sprintf('The AlternateRoute property can only contain items of type \Travelport\UniversalRecord\StructType\AlternateRoute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AlternateRoute) && count($this->AlternateRoute) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AlternateRoute)), __LINE__);
        }
        $this->AlternateRoute[] = $item;
        
        return $this;
    }
}
