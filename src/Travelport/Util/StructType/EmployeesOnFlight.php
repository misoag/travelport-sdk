<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeesOnFlight StructType
 * @subpackage Structs
 */
class EmployeesOnFlight extends AbstractStructBase
{
    /**
     * The UniversalRecordLocator
     * Meta information extracted from the WSDL
     * - documentation: UniversalRecord Locator | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    protected string $UniversalRecordLocator;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Airsegment Destination | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Destination;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Airsegment Origin | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $Origin;
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - documentation: Airsegment departure date
     * - use: required
     * @var string
     */
    protected string $DepartureDate;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: Air segment flight number
     * - use: required
     * @var string
     */
    protected string $FlightNumber;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: Air Segment Carrier | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Carrier;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:Name
     * @var \Travelport\Util\StructType\Name[]
     */
    protected ?array $Name = null;
    /**
     * Constructor method for EmployeesOnFlight
     * @uses EmployeesOnFlight::setUniversalRecordLocator()
     * @uses EmployeesOnFlight::setDestination()
     * @uses EmployeesOnFlight::setOrigin()
     * @uses EmployeesOnFlight::setDepartureDate()
     * @uses EmployeesOnFlight::setFlightNumber()
     * @uses EmployeesOnFlight::setCarrier()
     * @uses EmployeesOnFlight::setName()
     * @param string $universalRecordLocator
     * @param string $destination
     * @param string $origin
     * @param string $departureDate
     * @param string $flightNumber
     * @param string $carrier
     * @param \Travelport\Util\StructType\Name[] $name
     */
    public function __construct(string $universalRecordLocator, string $destination, string $origin, string $departureDate, string $flightNumber, string $carrier, ?array $name = null)
    {
        $this
            ->setUniversalRecordLocator($universalRecordLocator)
            ->setDestination($destination)
            ->setOrigin($origin)
            ->setDepartureDate($departureDate)
            ->setFlightNumber($flightNumber)
            ->setCarrier($carrier)
            ->setName($name);
    }
    /**
     * Get UniversalRecordLocator value
     * @return string
     */
    public function getUniversalRecordLocator(): string
    {
        return $this->UniversalRecordLocator;
    }
    /**
     * Set UniversalRecordLocator value
     * @param string $universalRecordLocator
     * @return \Travelport\Util\StructType\EmployeesOnFlight
     */
    public function setUniversalRecordLocator(string $universalRecordLocator): self
    {
        // validation for constraint: string
        if (!is_null($universalRecordLocator) && !is_string($universalRecordLocator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalRecordLocator, true), gettype($universalRecordLocator)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($universalRecordLocator) && mb_strlen((string) $universalRecordLocator) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $universalRecordLocator)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($universalRecordLocator) && mb_strlen((string) $universalRecordLocator) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $universalRecordLocator)), __LINE__);
        }
        $this->UniversalRecordLocator = $universalRecordLocator;
        
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
     * @return \Travelport\Util\StructType\EmployeesOnFlight
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
     * @return \Travelport\Util\StructType\EmployeesOnFlight
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
     * Get DepartureDate value
     * @return string
     */
    public function getDepartureDate(): string
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Travelport\Util\StructType\EmployeesOnFlight
     */
    public function setDepartureDate(string $departureDate): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string
     */
    public function getFlightNumber(): string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\Util\StructType\EmployeesOnFlight
     */
    public function setFlightNumber(string $flightNumber): self
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\Util\StructType\EmployeesOnFlight
     */
    public function setCarrier(string $carrier): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Util\StructType\Name[]
     */
    public function getName(): ?array
    {
        return $this->Name;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameForArrayConstraintFromSetName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $employeesOnFlightNameItem) {
            // validation for constraint: itemType
            if (!$employeesOnFlightNameItem instanceof \Travelport\Util\StructType\Name) {
                $invalidValues[] = is_object($employeesOnFlightNameItem) ? get_class($employeesOnFlightNameItem) : sprintf('%s(%s)', gettype($employeesOnFlightNameItem), var_export($employeesOnFlightNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Name property can only contain items of type \Travelport\Util\StructType\Name, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Name value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Name[] $name
     * @return \Travelport\Util\StructType\EmployeesOnFlight
     */
    public function setName(?array $name = null): self
    {
        // validation for constraint: array
        if ('' !== ($nameArrayErrorMessage = self::validateNameForArrayConstraintFromSetName($name))) {
            throw new InvalidArgumentException($nameArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($name) && count($name) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Add item to Name value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Name $item
     * @return \Travelport\Util\StructType\EmployeesOnFlight
     */
    public function addToName(\Travelport\Util\StructType\Name $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Name) {
            throw new InvalidArgumentException(sprintf('The Name property can only contain items of type \Travelport\Util\StructType\Name, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Name) && count($this->Name) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Name)), __LINE__);
        }
        $this->Name[] = $item;
        
        return $this;
    }
}
