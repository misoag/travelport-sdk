<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountRelatedRules StructType
 * @subpackage Structs
 */
class AccountRelatedRules extends AbstractStructBase
{
    /**
     * The BookingRules
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingRules
     * @var \Travelport\UniversalRecord\StructType\BookingRules[]
     */
    protected ?array $BookingRules = null;
    /**
     * The RoutingRules
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: RoutingRules
     * @var \Travelport\UniversalRecord\StructType\RoutingRules|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RoutingRules $RoutingRules = null;
    /**
     * Constructor method for AccountRelatedRules
     * @uses AccountRelatedRules::setBookingRules()
     * @uses AccountRelatedRules::setRoutingRules()
     * @param \Travelport\UniversalRecord\StructType\BookingRules[] $bookingRules
     * @param \Travelport\UniversalRecord\StructType\RoutingRules $routingRules
     */
    public function __construct(?array $bookingRules = null, ?\Travelport\UniversalRecord\StructType\RoutingRules $routingRules = null)
    {
        $this
            ->setBookingRules($bookingRules)
            ->setRoutingRules($routingRules);
    }
    /**
     * Get BookingRules value
     * @return \Travelport\UniversalRecord\StructType\BookingRules[]
     */
    public function getBookingRules(): ?array
    {
        return $this->BookingRules;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingRules method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingRules method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingRulesForArrayConstraintsFromSetBookingRules(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountRelatedRulesBookingRulesItem) {
            // validation for constraint: itemType
            if (!$accountRelatedRulesBookingRulesItem instanceof \Travelport\UniversalRecord\StructType\BookingRules) {
                $invalidValues[] = is_object($accountRelatedRulesBookingRulesItem) ? get_class($accountRelatedRulesBookingRulesItem) : sprintf('%s(%s)', gettype($accountRelatedRulesBookingRulesItem), var_export($accountRelatedRulesBookingRulesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingRules property can only contain items of type \Travelport\UniversalRecord\StructType\BookingRules, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingRules value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingRules[] $bookingRules
     * @return \Travelport\UniversalRecord\StructType\AccountRelatedRules
     */
    public function setBookingRules(?array $bookingRules = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingRulesArrayErrorMessage = self::validateBookingRulesForArrayConstraintsFromSetBookingRules($bookingRules))) {
            throw new InvalidArgumentException($bookingRulesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingRules) && count($bookingRules) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingRules)), __LINE__);
        }
        $this->BookingRules = $bookingRules;
        
        return $this;
    }
    /**
     * Add item to BookingRules value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingRules $item
     * @return \Travelport\UniversalRecord\StructType\AccountRelatedRules
     */
    public function addToBookingRules(\Travelport\UniversalRecord\StructType\BookingRules $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BookingRules) {
            throw new InvalidArgumentException(sprintf('The BookingRules property can only contain items of type \Travelport\UniversalRecord\StructType\BookingRules, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingRules) && count($this->BookingRules) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingRules)), __LINE__);
        }
        $this->BookingRules[] = $item;
        
        return $this;
    }
    /**
     * Get RoutingRules value
     * @return \Travelport\UniversalRecord\StructType\RoutingRules|null
     */
    public function getRoutingRules(): ?\Travelport\UniversalRecord\StructType\RoutingRules
    {
        return $this->RoutingRules;
    }
    /**
     * Set RoutingRules value
     * @param \Travelport\UniversalRecord\StructType\RoutingRules $routingRules
     * @return \Travelport\UniversalRecord\StructType\AccountRelatedRules
     */
    public function setRoutingRules(?\Travelport\UniversalRecord\StructType\RoutingRules $routingRules = null): self
    {
        $this->RoutingRules = $routingRules;
        
        return $this;
    }
}
