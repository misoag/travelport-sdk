<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingRules StructType
 * Meta information extracted from the WSDL
 * - documentation: Rules related to routing
 * @subpackage Structs
 */
class RoutingRules extends AbstractStructBase
{
    /**
     * The Routing
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\Routing[]
     */
    protected ?array $Routing = null;
    /**
     * Constructor method for RoutingRules
     * @uses RoutingRules::setRouting()
     * @param \Travelport\Util\StructType\Routing[] $routing
     */
    public function __construct(?array $routing = null)
    {
        $this
            ->setRouting($routing);
    }
    /**
     * Get Routing value
     * @return \Travelport\Util\StructType\Routing[]
     */
    public function getRouting(): ?array
    {
        return $this->Routing;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRouting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRouting method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoutingForArrayConstraintFromSetRouting(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $routingRulesRoutingItem) {
            // validation for constraint: itemType
            if (!$routingRulesRoutingItem instanceof \Travelport\Util\StructType\Routing) {
                $invalidValues[] = is_object($routingRulesRoutingItem) ? get_class($routingRulesRoutingItem) : sprintf('%s(%s)', gettype($routingRulesRoutingItem), var_export($routingRulesRoutingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Routing property can only contain items of type \Travelport\Util\StructType\Routing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Routing value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Routing[] $routing
     * @return \Travelport\Util\StructType\RoutingRules
     */
    public function setRouting(?array $routing = null): self
    {
        // validation for constraint: array
        if ('' !== ($routingArrayErrorMessage = self::validateRoutingForArrayConstraintFromSetRouting($routing))) {
            throw new InvalidArgumentException($routingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($routing) && count($routing) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($routing)), __LINE__);
        }
        $this->Routing = $routing;
        
        return $this;
    }
    /**
     * Add item to Routing value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Routing $item
     * @return \Travelport\Util\StructType\RoutingRules
     */
    public function addToRouting(\Travelport\Util\StructType\Routing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Routing) {
            throw new InvalidArgumentException(sprintf('The Routing property can only contain items of type \Travelport\Util\StructType\Routing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Routing) && count($this->Routing) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Routing)), __LINE__);
        }
        $this->Routing[] = $item;
        
        return $this;
    }
}
