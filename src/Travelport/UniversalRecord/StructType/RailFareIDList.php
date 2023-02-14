<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFareIDList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FareIDs
 * @subpackage Structs
 */
class RailFareIDList extends AbstractStructBase
{
    /**
     * The RailFareID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RailFareID
     * @var \Travelport\UniversalRecord\StructType\RailFareID[]
     */
    protected ?array $RailFareID = null;
    /**
     * Constructor method for RailFareIDList
     * @uses RailFareIDList::setRailFareID()
     * @param \Travelport\UniversalRecord\StructType\RailFareID[] $railFareID
     */
    public function __construct(?array $railFareID = null)
    {
        $this
            ->setRailFareID($railFareID);
    }
    /**
     * Get RailFareID value
     * @return \Travelport\UniversalRecord\StructType\RailFareID[]
     */
    public function getRailFareID(): ?array
    {
        return $this->RailFareID;
    }
    /**
     * This method is responsible for validating the values passed to the setRailFareID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareIDForArrayConstraintsFromSetRailFareID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareIDListRailFareIDItem) {
            // validation for constraint: itemType
            if (!$railFareIDListRailFareIDItem instanceof \Travelport\UniversalRecord\StructType\RailFareID) {
                $invalidValues[] = is_object($railFareIDListRailFareIDItem) ? get_class($railFareIDListRailFareIDItem) : sprintf('%s(%s)', gettype($railFareIDListRailFareIDItem), var_export($railFareIDListRailFareIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFareID property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailFareID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareID[] $railFareID
     * @return \Travelport\UniversalRecord\StructType\RailFareIDList
     */
    public function setRailFareID(?array $railFareID = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareIDArrayErrorMessage = self::validateRailFareIDForArrayConstraintsFromSetRailFareID($railFareID))) {
            throw new InvalidArgumentException($railFareIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railFareID) && count($railFareID) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railFareID)), __LINE__);
        }
        $this->RailFareID = $railFareID;
        
        return $this;
    }
    /**
     * Add item to RailFareID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareID $item
     * @return \Travelport\UniversalRecord\StructType\RailFareIDList
     */
    public function addToRailFareID(\Travelport\UniversalRecord\StructType\RailFareID $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFareID) {
            throw new InvalidArgumentException(sprintf('The RailFareID property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailFareID) && count($this->RailFareID) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailFareID)), __LINE__);
        }
        $this->RailFareID[] = $item;
        
        return $this;
    }
}
