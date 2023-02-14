<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseBookingTravelerRef StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference Element for Booking Traveler and Loyalty cards
 * @subpackage Structs
 */
class CruiseBookingTravelerRef extends AbstractStructBase
{
    /**
     * The LoyaltyCardRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:LoyaltyCardRef
     * @var \Travelport\UniversalRecord\StructType\LoyaltyCardRef[]
     */
    protected ?array $LoyaltyCardRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The WaiverIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates Passenger accepts/rejects waiver or insurance from vendor.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $WaiverIndicator = null;
    /**
     * Constructor method for CruiseBookingTravelerRef
     * @uses CruiseBookingTravelerRef::setLoyaltyCardRef()
     * @uses CruiseBookingTravelerRef::setKey()
     * @uses CruiseBookingTravelerRef::setWaiverIndicator()
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardRef[] $loyaltyCardRef
     * @param string $key
     * @param bool $waiverIndicator
     */
    public function __construct(?array $loyaltyCardRef = null, ?string $key = null, ?bool $waiverIndicator = null)
    {
        $this
            ->setLoyaltyCardRef($loyaltyCardRef)
            ->setKey($key)
            ->setWaiverIndicator($waiverIndicator);
    }
    /**
     * Get LoyaltyCardRef value
     * @return \Travelport\UniversalRecord\StructType\LoyaltyCardRef[]
     */
    public function getLoyaltyCardRef(): ?array
    {
        return $this->LoyaltyCardRef;
    }
    /**
     * This method is responsible for validating the values passed to the setLoyaltyCardRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCardRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardRefForArrayConstraintsFromSetLoyaltyCardRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cruiseBookingTravelerRefLoyaltyCardRefItem) {
            // validation for constraint: itemType
            if (!$cruiseBookingTravelerRefLoyaltyCardRefItem instanceof \Travelport\UniversalRecord\StructType\LoyaltyCardRef) {
                $invalidValues[] = is_object($cruiseBookingTravelerRefLoyaltyCardRefItem) ? get_class($cruiseBookingTravelerRefLoyaltyCardRefItem) : sprintf('%s(%s)', gettype($cruiseBookingTravelerRefLoyaltyCardRefItem), var_export($cruiseBookingTravelerRefLoyaltyCardRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCardRef property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCardRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LoyaltyCardRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardRef[] $loyaltyCardRef
     * @return \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef
     */
    public function setLoyaltyCardRef(?array $loyaltyCardRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardRefArrayErrorMessage = self::validateLoyaltyCardRefForArrayConstraintsFromSetLoyaltyCardRef($loyaltyCardRef))) {
            throw new InvalidArgumentException($loyaltyCardRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($loyaltyCardRef) && count($loyaltyCardRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($loyaltyCardRef)), __LINE__);
        }
        $this->LoyaltyCardRef = $loyaltyCardRef;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCardRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LoyaltyCardRef $item
     * @return \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef
     */
    public function addToLoyaltyCardRef(\Travelport\UniversalRecord\StructType\LoyaltyCardRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\LoyaltyCardRef) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCardRef property can only contain items of type \Travelport\UniversalRecord\StructType\LoyaltyCardRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LoyaltyCardRef) && count($this->LoyaltyCardRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LoyaltyCardRef)), __LINE__);
        }
        $this->LoyaltyCardRef[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get WaiverIndicator value
     * @return bool|null
     */
    public function getWaiverIndicator(): ?bool
    {
        return $this->WaiverIndicator;
    }
    /**
     * Set WaiverIndicator value
     * @param bool $waiverIndicator
     * @return \Travelport\UniversalRecord\StructType\CruiseBookingTravelerRef
     */
    public function setWaiverIndicator(?bool $waiverIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($waiverIndicator) && !is_bool($waiverIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($waiverIndicator, true), gettype($waiverIndicator)), __LINE__);
        }
        $this->WaiverIndicator = $waiverIndicator;
        
        return $this;
    }
}
