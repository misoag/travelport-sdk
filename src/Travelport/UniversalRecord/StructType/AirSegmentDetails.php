<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSegmentDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: An Air marketable travel segment.
 * @subpackage Structs
 */
class AirSegmentDetails extends AbstractStructBase
{
    /**
     * The PassengerDetailsRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: PassengerDetailsRef
     * @var \Travelport\UniversalRecord\StructType\PassengerDetailsRef[]
     */
    protected array $PassengerDetailsRef;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    protected string $ProviderCode;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Carrier;
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
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location.
     * - use: required
     * @var string
     */
    protected string $DepartureTime;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
     * - use: required
     * @var string
     */
    protected string $ArrivalTime;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: Flight Number for the Search Leg Detail. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    protected string $FlightNumber;
    /**
     * The BrandID
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: BrandID
     * @var \Travelport\UniversalRecord\StructType\BrandID[]
     */
    protected ?array $BrandID = null;
    /**
     * The BookingCodeList
     * Meta information extracted from the WSDL
     * - documentation: Lists classes of service and their counts separated by delimiter |.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BookingCodeList = null;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter equipment code (sometimes vary by carrier)
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $Equipment = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * @var string|null
     */
    protected ?string $ClassOfService = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CabinClass = null;
    /**
     * The OperatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The actual carrier that is operating the flight. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $OperatingCarrier = null;
    /**
     * Constructor method for AirSegmentDetails
     * @uses AirSegmentDetails::setPassengerDetailsRef()
     * @uses AirSegmentDetails::setKey()
     * @uses AirSegmentDetails::setProviderCode()
     * @uses AirSegmentDetails::setCarrier()
     * @uses AirSegmentDetails::setOrigin()
     * @uses AirSegmentDetails::setDestination()
     * @uses AirSegmentDetails::setDepartureTime()
     * @uses AirSegmentDetails::setArrivalTime()
     * @uses AirSegmentDetails::setFlightNumber()
     * @uses AirSegmentDetails::setBrandID()
     * @uses AirSegmentDetails::setBookingCodeList()
     * @uses AirSegmentDetails::setEquipment()
     * @uses AirSegmentDetails::setClassOfService()
     * @uses AirSegmentDetails::setCabinClass()
     * @uses AirSegmentDetails::setOperatingCarrier()
     * @param \Travelport\UniversalRecord\StructType\PassengerDetailsRef[] $passengerDetailsRef
     * @param string $key
     * @param string $providerCode
     * @param string $carrier
     * @param string $origin
     * @param string $destination
     * @param string $departureTime
     * @param string $arrivalTime
     * @param string $flightNumber
     * @param \Travelport\UniversalRecord\StructType\BrandID[] $brandID
     * @param string $bookingCodeList
     * @param string $equipment
     * @param string $classOfService
     * @param string $cabinClass
     * @param string $operatingCarrier
     */
    public function __construct(array $passengerDetailsRef, string $key, string $providerCode, string $carrier, string $origin, string $destination, string $departureTime, string $arrivalTime, string $flightNumber, ?array $brandID = null, ?string $bookingCodeList = null, ?string $equipment = null, ?string $classOfService = null, ?string $cabinClass = null, ?string $operatingCarrier = null)
    {
        $this
            ->setPassengerDetailsRef($passengerDetailsRef)
            ->setKey($key)
            ->setProviderCode($providerCode)
            ->setCarrier($carrier)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setDepartureTime($departureTime)
            ->setArrivalTime($arrivalTime)
            ->setFlightNumber($flightNumber)
            ->setBrandID($brandID)
            ->setBookingCodeList($bookingCodeList)
            ->setEquipment($equipment)
            ->setClassOfService($classOfService)
            ->setCabinClass($cabinClass)
            ->setOperatingCarrier($operatingCarrier);
    }
    /**
     * Get PassengerDetailsRef value
     * @return \Travelport\UniversalRecord\StructType\PassengerDetailsRef[]
     */
    public function getPassengerDetailsRef(): array
    {
        return $this->PassengerDetailsRef;
    }
    /**
     * This method is responsible for validating the values passed to the setPassengerDetailsRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerDetailsRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerDetailsRefForArrayConstraintsFromSetPassengerDetailsRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airSegmentDetailsPassengerDetailsRefItem) {
            // validation for constraint: itemType
            if (!$airSegmentDetailsPassengerDetailsRefItem instanceof \Travelport\UniversalRecord\StructType\PassengerDetailsRef) {
                $invalidValues[] = is_object($airSegmentDetailsPassengerDetailsRefItem) ? get_class($airSegmentDetailsPassengerDetailsRefItem) : sprintf('%s(%s)', gettype($airSegmentDetailsPassengerDetailsRefItem), var_export($airSegmentDetailsPassengerDetailsRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerDetailsRef property can only contain items of type \Travelport\UniversalRecord\StructType\PassengerDetailsRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassengerDetailsRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassengerDetailsRef[] $passengerDetailsRef
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setPassengerDetailsRef(array $passengerDetailsRef): self
    {
        // validation for constraint: array
        if ('' !== ($passengerDetailsRefArrayErrorMessage = self::validatePassengerDetailsRefForArrayConstraintsFromSetPassengerDetailsRef($passengerDetailsRef))) {
            throw new InvalidArgumentException($passengerDetailsRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passengerDetailsRef) && count($passengerDetailsRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passengerDetailsRef)), __LINE__);
        }
        $this->PassengerDetailsRef = $passengerDetailsRef;
        
        return $this;
    }
    /**
     * Add item to PassengerDetailsRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassengerDetailsRef $item
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function addToPassengerDetailsRef(\Travelport\UniversalRecord\StructType\PassengerDetailsRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PassengerDetailsRef) {
            throw new InvalidArgumentException(sprintf('The PassengerDetailsRef property can only contain items of type \Travelport\UniversalRecord\StructType\PassengerDetailsRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassengerDetailsRef) && count($this->PassengerDetailsRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassengerDetailsRef)), __LINE__);
        }
        $this->PassengerDetailsRef[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setProviderCode(string $providerCode): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
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
     * Get DepartureTime value
     * @return string
     */
    public function getDepartureTime(): string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setDepartureTime(string $departureTime): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string
     */
    public function getArrivalTime(): string
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setArrivalTime(string $arrivalTime): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->ArrivalTime = $arrivalTime;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setFlightNumber(string $flightNumber): self
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($flightNumber) && mb_strlen((string) $flightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get BrandID value
     * @return \Travelport\UniversalRecord\StructType\BrandID[]
     */
    public function getBrandID(): ?array
    {
        return $this->BrandID;
    }
    /**
     * This method is responsible for validating the values passed to the setBrandID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBrandID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBrandIDForArrayConstraintsFromSetBrandID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airSegmentDetailsBrandIDItem) {
            // validation for constraint: itemType
            if (!$airSegmentDetailsBrandIDItem instanceof \Travelport\UniversalRecord\StructType\BrandID) {
                $invalidValues[] = is_object($airSegmentDetailsBrandIDItem) ? get_class($airSegmentDetailsBrandIDItem) : sprintf('%s(%s)', gettype($airSegmentDetailsBrandIDItem), var_export($airSegmentDetailsBrandIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BrandID property can only contain items of type \Travelport\UniversalRecord\StructType\BrandID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BrandID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BrandID[] $brandID
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setBrandID(?array $brandID = null): self
    {
        // validation for constraint: array
        if ('' !== ($brandIDArrayErrorMessage = self::validateBrandIDForArrayConstraintsFromSetBrandID($brandID))) {
            throw new InvalidArgumentException($brandIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($brandID) && count($brandID) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($brandID)), __LINE__);
        }
        $this->BrandID = $brandID;
        
        return $this;
    }
    /**
     * Add item to BrandID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BrandID $item
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function addToBrandID(\Travelport\UniversalRecord\StructType\BrandID $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BrandID) {
            throw new InvalidArgumentException(sprintf('The BrandID property can only contain items of type \Travelport\UniversalRecord\StructType\BrandID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->BrandID) && count($this->BrandID) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->BrandID)), __LINE__);
        }
        $this->BrandID[] = $item;
        
        return $this;
    }
    /**
     * Get BookingCodeList value
     * @return string|null
     */
    public function getBookingCodeList(): ?string
    {
        return $this->BookingCodeList;
    }
    /**
     * Set BookingCodeList value
     * @param string $bookingCodeList
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setBookingCodeList(?string $bookingCodeList = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingCodeList) && !is_string($bookingCodeList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingCodeList, true), gettype($bookingCodeList)), __LINE__);
        }
        $this->BookingCodeList = $bookingCodeList;
        
        return $this;
    }
    /**
     * Get Equipment value
     * @return string|null
     */
    public function getEquipment(): ?string
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param string $equipment
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setEquipment(?string $equipment = null): self
    {
        // validation for constraint: string
        if (!is_null($equipment) && !is_string($equipment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equipment, true), gettype($equipment)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($equipment) && mb_strlen((string) $equipment) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $equipment)), __LINE__);
        }
        $this->Equipment = $equipment;
        
        return $this;
    }
    /**
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService(): ?string
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfService, true), gettype($classOfService)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $classOfService)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return string|null
     */
    public function getCabinClass(): ?string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setCabinClass(?string $cabinClass = null): self
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinClass, true), gettype($cabinClass)), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get OperatingCarrier value
     * @return string|null
     */
    public function getOperatingCarrier(): ?string
    {
        return $this->OperatingCarrier;
    }
    /**
     * Set OperatingCarrier value
     * @param string $operatingCarrier
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setOperatingCarrier(?string $operatingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingCarrier) && !is_string($operatingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingCarrier, true), gettype($operatingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($operatingCarrier) && mb_strlen((string) $operatingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $operatingCarrier)), __LINE__);
        }
        $this->OperatingCarrier = $operatingCarrier;
        
        return $this;
    }
}
