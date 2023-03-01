<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public array $PassengerDetailsRef;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
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
    public string $ProviderCode;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Carrier;
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
    public string $Origin;
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
    public string $Destination;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location.
     * - use: required
     * @var string
     */
    public string $DepartureTime;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
     * - use: required
     * @var string
     */
    public string $ArrivalTime;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: Flight Number for the Search Leg Detail. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    public string $FlightNumber;
    /**
     * The BrandID
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: BrandID
     * @var \Travelport\UniversalRecord\StructType\BrandID[]
     */
    public ?array $BrandID = null;
    /**
     * The BookingCodeList
     * Meta information extracted from the WSDL
     * - documentation: Lists classes of service and their counts separated by delimiter |.
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $BookingCodeList = null;
    /**
     * The Equipment
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter equipment code (sometimes vary by carrier)
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $Equipment = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * @var string|null
     */
    public ?string $ClassOfService = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $CabinClass = null;
    /**
     * The OperatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The actual carrier that is operating the flight. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $OperatingCarrier = null;
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
     * Set PassengerDetailsRef value
     * @param \Travelport\UniversalRecord\StructType\PassengerDetailsRef[] $passengerDetailsRef
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setPassengerDetailsRef(array $passengerDetailsRef): self
    {
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
     * Set BrandID value
     * @param \Travelport\UniversalRecord\StructType\BrandID[] $brandID
     * @return \Travelport\UniversalRecord\StructType\AirSegmentDetails
     */
    public function setBrandID(?array $brandID = null): self
    {
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
        $this->OperatingCarrier = $operatingCarrier;
        
        return $this;
    }
}
