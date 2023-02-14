<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightDetailsList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FlightDetails
 * @subpackage Structs
 */
class FlightDetailsList extends AbstractStructBase
{
    /**
     * The FlightDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FlightDetails
     * @var \Travelport\Util\StructType\FlightDetails[]
     */
    protected ?array $FlightDetails = null;
    /**
     * Constructor method for FlightDetailsList
     * @uses FlightDetailsList::setFlightDetails()
     * @param \Travelport\Util\StructType\FlightDetails[] $flightDetails
     */
    public function __construct(?array $flightDetails = null)
    {
        $this
            ->setFlightDetails($flightDetails);
    }
    /**
     * Get FlightDetails value
     * @return \Travelport\Util\StructType\FlightDetails[]
     */
    public function getFlightDetails(): ?array
    {
        return $this->FlightDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setFlightDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightDetailsForArrayConstraintsFromSetFlightDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightDetailsListFlightDetailsItem) {
            // validation for constraint: itemType
            if (!$flightDetailsListFlightDetailsItem instanceof \Travelport\Util\StructType\FlightDetails) {
                $invalidValues[] = is_object($flightDetailsListFlightDetailsItem) ? get_class($flightDetailsListFlightDetailsItem) : sprintf('%s(%s)', gettype($flightDetailsListFlightDetailsItem), var_export($flightDetailsListFlightDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightDetails property can only contain items of type \Travelport\Util\StructType\FlightDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FlightDetails[] $flightDetails
     * @return \Travelport\Util\StructType\FlightDetailsList
     */
    public function setFlightDetails(?array $flightDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightDetailsArrayErrorMessage = self::validateFlightDetailsForArrayConstraintsFromSetFlightDetails($flightDetails))) {
            throw new InvalidArgumentException($flightDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightDetails) && count($flightDetails) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightDetails)), __LINE__);
        }
        $this->FlightDetails = $flightDetails;
        
        return $this;
    }
    /**
     * Add item to FlightDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FlightDetails $item
     * @return \Travelport\Util\StructType\FlightDetailsList
     */
    public function addToFlightDetails(\Travelport\Util\StructType\FlightDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FlightDetails) {
            throw new InvalidArgumentException(sprintf('The FlightDetails property can only contain items of type \Travelport\Util\StructType\FlightDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightDetails) && count($this->FlightDetails) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightDetails)), __LINE__);
        }
        $this->FlightDetails[] = $item;
        
        return $this;
    }
}
