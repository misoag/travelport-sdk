<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricePointList StructType
 * Meta information extracted from the WSDL
 * - documentation: The container which holds the Non Solutioned result. Different options for each search leg requested will be returned and one option for each search leg can be selected. | Provides the list of AirPricePoint (Non Solutioned Result)
 * @subpackage Structs
 */
class AirPricePointList extends AbstractStructBase
{
    /**
     * The AirPricePoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricePoint
     * @var \Travelport\UniversalRecord\StructType\AirPricePoint[]
     */
    protected ?array $AirPricePoint = null;
    /**
     * Constructor method for AirPricePointList
     * @uses AirPricePointList::setAirPricePoint()
     * @param \Travelport\UniversalRecord\StructType\AirPricePoint[] $airPricePoint
     */
    public function __construct(?array $airPricePoint = null)
    {
        $this
            ->setAirPricePoint($airPricePoint);
    }
    /**
     * Get AirPricePoint value
     * @return \Travelport\UniversalRecord\StructType\AirPricePoint[]
     */
    public function getAirPricePoint(): ?array
    {
        return $this->AirPricePoint;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPricePoint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricePoint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricePointForArrayConstraintsFromSetAirPricePoint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricePointListAirPricePointItem) {
            // validation for constraint: itemType
            if (!$airPricePointListAirPricePointItem instanceof \Travelport\UniversalRecord\StructType\AirPricePoint) {
                $invalidValues[] = is_object($airPricePointListAirPricePointItem) ? get_class($airPricePointListAirPricePointItem) : sprintf('%s(%s)', gettype($airPricePointListAirPricePointItem), var_export($airPricePointListAirPricePointItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricePoint property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricePoint, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricePoint value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricePoint[] $airPricePoint
     * @return \Travelport\UniversalRecord\StructType\AirPricePointList
     */
    public function setAirPricePoint(?array $airPricePoint = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricePointArrayErrorMessage = self::validateAirPricePointForArrayConstraintsFromSetAirPricePoint($airPricePoint))) {
            throw new InvalidArgumentException($airPricePointArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricePoint) && count($airPricePoint) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricePoint)), __LINE__);
        }
        $this->AirPricePoint = $airPricePoint;
        
        return $this;
    }
    /**
     * Add item to AirPricePoint value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricePoint $item
     * @return \Travelport\UniversalRecord\StructType\AirPricePointList
     */
    public function addToAirPricePoint(\Travelport\UniversalRecord\StructType\AirPricePoint $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricePoint) {
            throw new InvalidArgumentException(sprintf('The AirPricePoint property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricePoint, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricePoint) && count($this->AirPricePoint) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricePoint)), __LINE__);
        }
        $this->AirPricePoint[] = $item;
        
        return $this;
    }
}
