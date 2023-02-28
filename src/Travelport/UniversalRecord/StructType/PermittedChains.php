<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PermittedChains StructType
 * @subpackage Structs
 */
class PermittedChains extends AbstractStructBase
{
    /**
     * The HotelChain
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: HotelChain
     * @var \Travelport\UniversalRecord\StructType\HotelChain[]
     */
    protected ?array $HotelChain = null;
    /**
     * Constructor method for PermittedChains
     * @uses PermittedChains::setHotelChain()
     * @param \Travelport\UniversalRecord\StructType\HotelChain[] $hotelChain
     */
    public function __construct(?array $hotelChain = null)
    {
        $this
            ->setHotelChain($hotelChain);
    }
    /**
     * Get HotelChain value
     * @return \Travelport\UniversalRecord\StructType\HotelChain[]
     */
    public function getHotelChain(): ?array
    {
        return $this->HotelChain;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelChain method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelChain method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelChainForArrayConstraintFromSetHotelChain(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $permittedChainsHotelChainItem) {
            // validation for constraint: itemType
            if (!$permittedChainsHotelChainItem instanceof \Travelport\UniversalRecord\StructType\HotelChain) {
                $invalidValues[] = is_object($permittedChainsHotelChainItem) ? get_class($permittedChainsHotelChainItem) : sprintf('%s(%s)', gettype($permittedChainsHotelChainItem), var_export($permittedChainsHotelChainItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelChain property can only contain items of type \Travelport\UniversalRecord\StructType\HotelChain, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelChain value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelChain[] $hotelChain
     * @return \Travelport\UniversalRecord\StructType\PermittedChains
     */
    public function setHotelChain(?array $hotelChain = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelChainArrayErrorMessage = self::validateHotelChainForArrayConstraintFromSetHotelChain($hotelChain))) {
            throw new InvalidArgumentException($hotelChainArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelChain) && count($hotelChain) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelChain)), __LINE__);
        }
        $this->HotelChain = $hotelChain;
        
        return $this;
    }
    /**
     * Add item to HotelChain value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelChain $item
     * @return \Travelport\UniversalRecord\StructType\PermittedChains
     */
    public function addToHotelChain(\Travelport\UniversalRecord\StructType\HotelChain $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\HotelChain) {
            throw new InvalidArgumentException(sprintf('The HotelChain property can only contain items of type \Travelport\UniversalRecord\StructType\HotelChain, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelChain) && count($this->HotelChain) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelChain)), __LINE__);
        }
        $this->HotelChain[] = $item;
        
        return $this;
    }
}
