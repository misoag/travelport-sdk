<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingTicketingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: AirPricing TicketingModifier information - used to associate Ticketing Modifiers with one or more AirPricingInfos/ProviderReservationInfo
 * @subpackage Structs
 */
class AirPricingTicketingModifiers extends AbstractStructBase
{
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    protected ?array $AirPricingInfoRef = null;
    /**
     * The TicketingModifiers
     * Meta information extracted from the WSDL
     * - ref: TicketingModifiers
     * @var \Travelport\UniversalRecord\StructType\TicketingModifiers|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TicketingModifiers $TicketingModifiers = null;
    /**
     * Constructor method for AirPricingTicketingModifiers
     * @uses AirPricingTicketingModifiers::setAirPricingInfoRef()
     * @uses AirPricingTicketingModifiers::setTicketingModifiers()
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\UniversalRecord\StructType\TicketingModifiers $ticketingModifiers
     */
    public function __construct(?array $airPricingInfoRef = null, ?\Travelport\UniversalRecord\StructType\TicketingModifiers $ticketingModifiers = null)
    {
        $this
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setTicketingModifiers($ticketingModifiers);
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPricingInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingTicketingModifiersAirPricingInfoRefItem) {
            // validation for constraint: itemType
            if (!$airPricingTicketingModifiersAirPricingInfoRefItem instanceof \Travelport\UniversalRecord\StructType\AirPricingInfoRef) {
                $invalidValues[] = is_object($airPricingTicketingModifiersAirPricingInfoRefItem) ? get_class($airPricingTicketingModifiersAirPricingInfoRefItem) : sprintf('%s(%s)', gettype($airPricingTicketingModifiersAirPricingInfoRefItem), var_export($airPricingTicketingModifiersAirPricingInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoRefArrayErrorMessage = self::validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef($airPricingInfoRef))) {
            throw new InvalidArgumentException($airPricingInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfoRef) && count($airPricingInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingInfoRef) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfoRef) && count($this->AirPricingInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get TicketingModifiers value
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers|null
     */
    public function getTicketingModifiers(): ?\Travelport\UniversalRecord\StructType\TicketingModifiers
    {
        return $this->TicketingModifiers;
    }
    /**
     * Set TicketingModifiers value
     * @param \Travelport\UniversalRecord\StructType\TicketingModifiers $ticketingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirPricingTicketingModifiers
     */
    public function setTicketingModifiers(?\Travelport\UniversalRecord\StructType\TicketingModifiers $ticketingModifiers = null): self
    {
        $this->TicketingModifiers = $ticketingModifiers;
        
        return $this;
    }
}
