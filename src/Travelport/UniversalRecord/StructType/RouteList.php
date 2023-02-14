<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteList StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the routes and sub-routes that were requested
 * @subpackage Structs
 */
class RouteList extends AbstractStructBase
{
    /**
     * The Route
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Route
     * @var \Travelport\UniversalRecord\StructType\Route[]
     */
    protected ?array $Route = null;
    /**
     * Constructor method for RouteList
     * @uses RouteList::setRoute()
     * @param \Travelport\UniversalRecord\StructType\Route[] $route
     */
    public function __construct(?array $route = null)
    {
        $this
            ->setRoute($route);
    }
    /**
     * Get Route value
     * @return \Travelport\UniversalRecord\StructType\Route[]
     */
    public function getRoute(): ?array
    {
        return $this->Route;
    }
    /**
     * This method is responsible for validating the values passed to the setRoute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRouteForArrayConstraintsFromSetRoute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $routeListRouteItem) {
            // validation for constraint: itemType
            if (!$routeListRouteItem instanceof \Travelport\UniversalRecord\StructType\Route) {
                $invalidValues[] = is_object($routeListRouteItem) ? get_class($routeListRouteItem) : sprintf('%s(%s)', gettype($routeListRouteItem), var_export($routeListRouteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Route property can only contain items of type \Travelport\UniversalRecord\StructType\Route, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Route value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Route[] $route
     * @return \Travelport\UniversalRecord\StructType\RouteList
     */
    public function setRoute(?array $route = null): self
    {
        // validation for constraint: array
        if ('' !== ($routeArrayErrorMessage = self::validateRouteForArrayConstraintsFromSetRoute($route))) {
            throw new InvalidArgumentException($routeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($route) && count($route) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($route)), __LINE__);
        }
        $this->Route = $route;
        
        return $this;
    }
    /**
     * Add item to Route value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Route $item
     * @return \Travelport\UniversalRecord\StructType\RouteList
     */
    public function addToRoute(\Travelport\UniversalRecord\StructType\Route $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Route) {
            throw new InvalidArgumentException(sprintf('The Route property can only contain items of type \Travelport\UniversalRecord\StructType\Route, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Route) && count($this->Route) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Route)), __LINE__);
        }
        $this->Route[] = $item;
        
        return $this;
    }
}
