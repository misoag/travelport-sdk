<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightOption StructType
 * Meta information extracted from the WSDL
 * - documentation: List of BookingInfo available for the search air leg. | List of Options available for any search air leg.
 * @subpackage Structs
 */
class FlightOption extends AbstractStructBase
{
    /**
     * The Option
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: Option
     * @var \Travelport\Util\StructType\Option[]
     */
    protected array $Option;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Destination;
    /**
     * The LegRef
     * Meta information extracted from the WSDL
     * - documentation: Identifies the Leg Reference for this Flight Option. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $LegRef = null;
    /**
     * Constructor method for FlightOption
     * @uses FlightOption::setOption()
     * @uses FlightOption::setOrigin()
     * @uses FlightOption::setDestination()
     * @uses FlightOption::setLegRef()
     * @param \Travelport\Util\StructType\Option[] $option
     * @param string $origin
     * @param string $destination
     * @param string $legRef
     */
    public function __construct(array $option, string $origin, string $destination, ?string $legRef = null)
    {
        $this
            ->setOption($option)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setLegRef($legRef);
    }
    /**
     * Get Option value
     * @return \Travelport\Util\StructType\Option[]
     */
    public function getOption(): array
    {
        return $this->Option;
    }
    /**
     * This method is responsible for validating the values passed to the setOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionForArrayConstraintsFromSetOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightOptionOptionItem) {
            // validation for constraint: itemType
            if (!$flightOptionOptionItem instanceof \Travelport\Util\StructType\Option) {
                $invalidValues[] = is_object($flightOptionOptionItem) ? get_class($flightOptionOptionItem) : sprintf('%s(%s)', gettype($flightOptionOptionItem), var_export($flightOptionOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Option property can only contain items of type \Travelport\Util\StructType\Option, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Option value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Option[] $option
     * @return \Travelport\Util\StructType\FlightOption
     */
    public function setOption(array $option): self
    {
        // validation for constraint: array
        if ('' !== ($optionArrayErrorMessage = self::validateOptionForArrayConstraintsFromSetOption($option))) {
            throw new InvalidArgumentException($optionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($option) && count($option) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($option)), __LINE__);
        }
        $this->Option = $option;
        
        return $this;
    }
    /**
     * Add item to Option value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Option $item
     * @return \Travelport\Util\StructType\FlightOption
     */
    public function addToOption(\Travelport\Util\StructType\Option $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Option) {
            throw new InvalidArgumentException(sprintf('The Option property can only contain items of type \Travelport\Util\StructType\Option, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Option) && count($this->Option) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Option)), __LINE__);
        }
        $this->Option[] = $item;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Util\StructType\FlightOption
     */
    public function setOrigin(string $origin): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\FlightOption
     */
    public function setDestination(string $destination): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get LegRef value
     * @return string|null
     */
    public function getLegRef(): ?string
    {
        return $this->LegRef;
    }
    /**
     * Set LegRef value
     * @param string $legRef
     * @return \Travelport\Util\StructType\FlightOption
     */
    public function setLegRef(?string $legRef = null): self
    {
        // validation for constraint: string
        if (!is_null($legRef) && !is_string($legRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legRef, true), gettype($legRef)), __LINE__);
        }
        $this->LegRef = $legRef;
        
        return $this;
    }
}
