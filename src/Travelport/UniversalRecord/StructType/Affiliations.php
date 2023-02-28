<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Affiliations StructType
 * Meta information extracted from the WSDL
 * - documentation: Affiliations related for pre pay profiles
 * @subpackage Structs
 */
class Affiliations extends AbstractStructBase
{
    /**
     * The TravelArranger
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TravelArranger
     * @var \Travelport\UniversalRecord\StructType\TravelArranger[]
     */
    protected ?array $TravelArranger = null;
    /**
     * Constructor method for Affiliations
     * @uses Affiliations::setTravelArranger()
     * @param \Travelport\UniversalRecord\StructType\TravelArranger[] $travelArranger
     */
    public function __construct(?array $travelArranger = null)
    {
        $this
            ->setTravelArranger($travelArranger);
    }
    /**
     * Get TravelArranger value
     * @return \Travelport\UniversalRecord\StructType\TravelArranger[]
     */
    public function getTravelArranger(): ?array
    {
        return $this->TravelArranger;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelArranger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelArranger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelArrangerForArrayConstraintFromSetTravelArranger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $affiliationsTravelArrangerItem) {
            // validation for constraint: itemType
            if (!$affiliationsTravelArrangerItem instanceof \Travelport\UniversalRecord\StructType\TravelArranger) {
                $invalidValues[] = is_object($affiliationsTravelArrangerItem) ? get_class($affiliationsTravelArrangerItem) : sprintf('%s(%s)', gettype($affiliationsTravelArrangerItem), var_export($affiliationsTravelArrangerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelArranger property can only contain items of type \Travelport\UniversalRecord\StructType\TravelArranger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TravelArranger value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelArranger[] $travelArranger
     * @return \Travelport\UniversalRecord\StructType\Affiliations
     */
    public function setTravelArranger(?array $travelArranger = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelArrangerArrayErrorMessage = self::validateTravelArrangerForArrayConstraintFromSetTravelArranger($travelArranger))) {
            throw new InvalidArgumentException($travelArrangerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($travelArranger) && count($travelArranger) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($travelArranger)), __LINE__);
        }
        $this->TravelArranger = $travelArranger;
        
        return $this;
    }
    /**
     * Add item to TravelArranger value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelArranger $item
     * @return \Travelport\UniversalRecord\StructType\Affiliations
     */
    public function addToTravelArranger(\Travelport\UniversalRecord\StructType\TravelArranger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TravelArranger) {
            throw new InvalidArgumentException(sprintf('The TravelArranger property can only contain items of type \Travelport\UniversalRecord\StructType\TravelArranger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TravelArranger) && count($this->TravelArranger) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TravelArranger)), __LINE__);
        }
        $this->TravelArranger[] = $item;
        
        return $this;
    }
}
