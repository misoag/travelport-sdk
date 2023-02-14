<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveSegment StructType
 * @subpackage Structs
 */
class PassiveSegment extends AbstractStructBase
{
    /**
     * The SegmentType
     * Meta information extracted from the WSDL
     * - documentation: The Type of Passive segment being entered ( Car,Hotel,Tour,Air,Surface,Bus,Rail,Cruise,Helicopter,Limousine,Transfers,Miscellaneous,ProcessingFee,Insurance,
     * AirTaxi,Currency,Fees,Forms,Group,Include,Leisure,Land,Other,Package,RailRoad,SeaPlane,Software,Supply,Service, Theater,Ticket,Transfer,Taxi,Charter,CorporatePlane,UnitedPassive,AccountingInfo,BookingFee,ServiceCharge,ServiceFee,TicketFees
     * ,TelexCharge)
     * - use: required
     * @var string
     */
    protected string $SegmentType;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\Amount|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Amount $Amount = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Vendor Code. This could have values outside what is defined as a carrier. (eg:ZZ as in case for vendor in case of Due paid) | 2 Character vendor code.
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * The Status
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The StartDate
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The EndDate
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Origin for Air, but City for all other Types. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: This optional, except when Type is Air, then it is required. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The AvailabilitySource
     * Meta information extracted from the WSDL
     * - documentation: Indicates Availability source of AirSegment.
     * @var string|null
     */
    protected ?string $AvailabilitySource = null;
    /**
     * The PolledAvailabilityOption
     * Meta information extracted from the WSDL
     * - documentation: Indicates if carrier has inside(polled) availability option.
     * @var string|null
     */
    protected ?string $PolledAvailabilityOption = null;
    /**
     * The AvailabilityDisplayType
     * Meta information extracted from the WSDL
     * - documentation: The type of availability from which the segment is sold. E.g., General, Carrier Specific/Direct Access, Fare Shop/Optimal Shop, etc.
     * @var string|null
     */
    protected ?string $AvailabilityDisplayType = null;
    /**
     * The FlightNumber
     * @var string|null
     */
    protected ?string $FlightNumber = null;
    /**
     * The ClassOfService
     * @var string|null
     */
    protected ?string $ClassOfService = null;
    /**
     * The NumberOfItems
     * @var int|null
     */
    protected ?int $NumberOfItems = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: The Key of Passive Segment. | Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The VehicleType
     * Meta information extracted from the WSDL
     * - documentation: The Type of Vehicle in Passive Segment.
     * @var string|null
     */
    protected ?string $VehicleType = null;
    /**
     * The PassiveProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Passive Provider Reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PassiveProviderReservationInfoRef = null;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - documentation: Unique Identifier used for grouping together identical segments.
     * - use: optional
     * @var int|null
     */
    protected ?int $Group = null;
    /**
     * The TravelOrder
     * Meta information extracted from the WSDL
     * - documentation: To identify the appropriate travel sequence for Air/Car/Hotel/Passive segments/reservations based on travel dates. This ordering is applicable across the UR not provider or traveler specific
     * - use: optional
     * @var int|null
     */
    protected ?int $TravelOrder = null;
    /**
     * The ProviderSegmentOrder
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 999
     * - use: optional
     * @var int|null
     */
    protected ?int $ProviderSegmentOrder = null;
    /**
     * The PassiveGroup
     * Meta information extracted from the WSDL
     * - documentation: Used for grouping 2 sets of identical passive segments with different remark information.
     * - use: optional
     * @var string|null
     */
    protected ?string $PassiveGroup = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for PassiveSegment
     * @uses PassiveSegment::setSegmentType()
     * @uses PassiveSegment::setAmount()
     * @uses PassiveSegment::setSupplierCode()
     * @uses PassiveSegment::setStatus()
     * @uses PassiveSegment::setStartDate()
     * @uses PassiveSegment::setEndDate()
     * @uses PassiveSegment::setOrigin()
     * @uses PassiveSegment::setDestination()
     * @uses PassiveSegment::setAvailabilitySource()
     * @uses PassiveSegment::setPolledAvailabilityOption()
     * @uses PassiveSegment::setAvailabilityDisplayType()
     * @uses PassiveSegment::setFlightNumber()
     * @uses PassiveSegment::setClassOfService()
     * @uses PassiveSegment::setNumberOfItems()
     * @uses PassiveSegment::setKey()
     * @uses PassiveSegment::setVehicleType()
     * @uses PassiveSegment::setPassiveProviderReservationInfoRef()
     * @uses PassiveSegment::setGroup()
     * @uses PassiveSegment::setTravelOrder()
     * @uses PassiveSegment::setProviderSegmentOrder()
     * @uses PassiveSegment::setPassiveGroup()
     * @uses PassiveSegment::setElStat()
     * @uses PassiveSegment::setKeyOverride()
     * @param string $segmentType
     * @param \Travelport\UniversalRecord\StructType\Amount $amount
     * @param string $supplierCode
     * @param string $status
     * @param string $startDate
     * @param string $endDate
     * @param string $origin
     * @param string $destination
     * @param string $availabilitySource
     * @param string $polledAvailabilityOption
     * @param string $availabilityDisplayType
     * @param string $flightNumber
     * @param string $classOfService
     * @param int $numberOfItems
     * @param string $key
     * @param string $vehicleType
     * @param string $passiveProviderReservationInfoRef
     * @param int $group
     * @param int $travelOrder
     * @param int $providerSegmentOrder
     * @param string $passiveGroup
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $segmentType, ?\Travelport\UniversalRecord\StructType\Amount $amount = null, ?string $supplierCode = null, ?string $status = null, ?string $startDate = null, ?string $endDate = null, ?string $origin = null, ?string $destination = null, ?string $availabilitySource = null, ?string $polledAvailabilityOption = null, ?string $availabilityDisplayType = null, ?string $flightNumber = null, ?string $classOfService = null, ?int $numberOfItems = null, ?string $key = null, ?string $vehicleType = null, ?string $passiveProviderReservationInfoRef = null, ?int $group = null, ?int $travelOrder = null, ?int $providerSegmentOrder = null, ?string $passiveGroup = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setSegmentType($segmentType)
            ->setAmount($amount)
            ->setSupplierCode($supplierCode)
            ->setStatus($status)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setAvailabilitySource($availabilitySource)
            ->setPolledAvailabilityOption($polledAvailabilityOption)
            ->setAvailabilityDisplayType($availabilityDisplayType)
            ->setFlightNumber($flightNumber)
            ->setClassOfService($classOfService)
            ->setNumberOfItems($numberOfItems)
            ->setKey($key)
            ->setVehicleType($vehicleType)
            ->setPassiveProviderReservationInfoRef($passiveProviderReservationInfoRef)
            ->setGroup($group)
            ->setTravelOrder($travelOrder)
            ->setProviderSegmentOrder($providerSegmentOrder)
            ->setPassiveGroup($passiveGroup)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get SegmentType value
     * @return string
     */
    public function getSegmentType(): string
    {
        return $this->SegmentType;
    }
    /**
     * Set SegmentType value
     * @param string $segmentType
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setSegmentType(string $segmentType): self
    {
        // validation for constraint: string
        if (!is_null($segmentType) && !is_string($segmentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentType, true), gettype($segmentType)), __LINE__);
        }
        $this->SegmentType = $segmentType;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return \Travelport\UniversalRecord\StructType\Amount|null
     */
    public function getAmount(): ?\Travelport\UniversalRecord\StructType\Amount
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \Travelport\UniversalRecord\StructType\Amount $amount
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setAmount(?\Travelport\UniversalRecord\StructType\Amount $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setOrigin(?string $origin = null): self
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
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setDestination(?string $destination = null): self
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
     * Get AvailabilitySource value
     * @return string|null
     */
    public function getAvailabilitySource(): ?string
    {
        return $this->AvailabilitySource;
    }
    /**
     * Set AvailabilitySource value
     * @param string $availabilitySource
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setAvailabilitySource(?string $availabilitySource = null): self
    {
        // validation for constraint: string
        if (!is_null($availabilitySource) && !is_string($availabilitySource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availabilitySource, true), gettype($availabilitySource)), __LINE__);
        }
        $this->AvailabilitySource = $availabilitySource;
        
        return $this;
    }
    /**
     * Get PolledAvailabilityOption value
     * @return string|null
     */
    public function getPolledAvailabilityOption(): ?string
    {
        return $this->PolledAvailabilityOption;
    }
    /**
     * Set PolledAvailabilityOption value
     * @param string $polledAvailabilityOption
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setPolledAvailabilityOption(?string $polledAvailabilityOption = null): self
    {
        // validation for constraint: string
        if (!is_null($polledAvailabilityOption) && !is_string($polledAvailabilityOption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($polledAvailabilityOption, true), gettype($polledAvailabilityOption)), __LINE__);
        }
        $this->PolledAvailabilityOption = $polledAvailabilityOption;
        
        return $this;
    }
    /**
     * Get AvailabilityDisplayType value
     * @return string|null
     */
    public function getAvailabilityDisplayType(): ?string
    {
        return $this->AvailabilityDisplayType;
    }
    /**
     * Set AvailabilityDisplayType value
     * @param string $availabilityDisplayType
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setAvailabilityDisplayType(?string $availabilityDisplayType = null): self
    {
        // validation for constraint: string
        if (!is_null($availabilityDisplayType) && !is_string($availabilityDisplayType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($availabilityDisplayType, true), gettype($availabilityDisplayType)), __LINE__);
        }
        $this->AvailabilityDisplayType = $availabilityDisplayType;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber(): ?string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        
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
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfService, true), gettype($classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
    /**
     * Get NumberOfItems value
     * @return int|null
     */
    public function getNumberOfItems(): ?int
    {
        return $this->NumberOfItems;
    }
    /**
     * Set NumberOfItems value
     * @param int $numberOfItems
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setNumberOfItems(?int $numberOfItems = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfItems) && !(is_int($numberOfItems) || ctype_digit($numberOfItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfItems, true), gettype($numberOfItems)), __LINE__);
        }
        $this->NumberOfItems = $numberOfItems;
        
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
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
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
     * Get VehicleType value
     * @return string|null
     */
    public function getVehicleType(): ?string
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @param string $vehicleType
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setVehicleType(?string $vehicleType = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleType) && !is_string($vehicleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleType, true), gettype($vehicleType)), __LINE__);
        }
        $this->VehicleType = $vehicleType;
        
        return $this;
    }
    /**
     * Get PassiveProviderReservationInfoRef value
     * @return string|null
     */
    public function getPassiveProviderReservationInfoRef(): ?string
    {
        return $this->PassiveProviderReservationInfoRef;
    }
    /**
     * Set PassiveProviderReservationInfoRef value
     * @param string $passiveProviderReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setPassiveProviderReservationInfoRef(?string $passiveProviderReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($passiveProviderReservationInfoRef) && !is_string($passiveProviderReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passiveProviderReservationInfoRef, true), gettype($passiveProviderReservationInfoRef)), __LINE__);
        }
        $this->PassiveProviderReservationInfoRef = $passiveProviderReservationInfoRef;
        
        return $this;
    }
    /**
     * Get Group value
     * @return int|null
     */
    public function getGroup(): ?int
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param int $group
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setGroup(?int $group = null): self
    {
        // validation for constraint: int
        if (!is_null($group) && !(is_int($group) || ctype_digit($group))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->Group = $group;
        
        return $this;
    }
    /**
     * Get TravelOrder value
     * @return int|null
     */
    public function getTravelOrder(): ?int
    {
        return $this->TravelOrder;
    }
    /**
     * Set TravelOrder value
     * @param int $travelOrder
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($travelOrder) && !(is_int($travelOrder) || ctype_digit($travelOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelOrder, true), gettype($travelOrder)), __LINE__);
        }
        $this->TravelOrder = $travelOrder;
        
        return $this;
    }
    /**
     * Get ProviderSegmentOrder value
     * @return int|null
     */
    public function getProviderSegmentOrder(): ?int
    {
        return $this->ProviderSegmentOrder;
    }
    /**
     * Set ProviderSegmentOrder value
     * @param int $providerSegmentOrder
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setProviderSegmentOrder(?int $providerSegmentOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($providerSegmentOrder) && !(is_int($providerSegmentOrder) || ctype_digit($providerSegmentOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($providerSegmentOrder, true), gettype($providerSegmentOrder)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($providerSegmentOrder) && $providerSegmentOrder > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($providerSegmentOrder, true)), __LINE__);
        }
        $this->ProviderSegmentOrder = $providerSegmentOrder;
        
        return $this;
    }
    /**
     * Get PassiveGroup value
     * @return string|null
     */
    public function getPassiveGroup(): ?string
    {
        return $this->PassiveGroup;
    }
    /**
     * Set PassiveGroup value
     * @param string $passiveGroup
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setPassiveGroup(?string $passiveGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($passiveGroup) && !is_string($passiveGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passiveGroup, true), gettype($passiveGroup)), __LINE__);
        }
        $this->PassiveGroup = $passiveGroup;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\UniversalRecord\StructType\PassiveSegment
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
