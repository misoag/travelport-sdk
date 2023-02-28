<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFare StructType
 * Meta information extracted from the WSDL
 * - documentation: Use references on rail availability response, and the full fare IDs on the reservation. | Key reference to RailFareNote present in RailFareNotList | Information about this fare component
 * @subpackage Structs
 */
class RailFare extends AbstractStructBase
{
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
     * The CabinClass
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code or fare class for this fare | Rail Cabin class specification .The valid values are Economy,Business,First and Other.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $CabinClass;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - documentation: Returns the date on which this fare was quoted. Set as current date
     * - use: required
     * @var string
     */
    protected string $EffectiveDate;
    /**
     * The RailFareNoteRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFareNoteRef
     * @var \Travelport\UniversalRecord\StructType\RailFareNoteRef[]
     */
    protected ?array $RailFareNoteRef = null;
    /**
     * The RailFareID
     * Meta information extracted from the WSDL
     * - choice: RailFareID | RailFareIDRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFareID
     * @var \Travelport\UniversalRecord\StructType\RailFareID[]
     */
    protected ?array $RailFareID = null;
    /**
     * The RailFareIDRef
     * Meta information extracted from the WSDL
     * - choice: RailFareID | RailFareIDRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFareIDRef
     * @var \Travelport\UniversalRecord\StructType\RailFareIDRef[]
     */
    protected ?array $RailFareIDRef = null;
    /**
     * The FareValidity
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareValidity
     * @var \Travelport\UniversalRecord\StructType\FareValidity[]
     */
    protected ?array $FareValidity = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken|null
     */
    protected ?\Travelport\UniversalRecord\StructType\HostToken $HostToken = null;
    /**
     * The FulFillmentType
     * Meta information extracted from the WSDL
     * - documentation: Fulfillment options for this segment. the options will be one of "Ticket on Departure", "Ticketless", "Ticket By Email", "Travel Agency"
     * - base: xs:string
     * - maxLength: 255
     * - maxOccurs: 999
     * - minLength: 0
     * - minOccurs: 0
     * - ref: FulFillmentType
     * @var string[]
     */
    protected ?array $FulFillmentType = null;
    /**
     * The RailFareComponent
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: RailFareComponent
     * @var \Travelport\UniversalRecord\StructType\RailFareComponent[]
     */
    protected ?array $RailFareComponent = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code or fare description for this fare
     * - use: optional
     * @var string|null
     */
    protected ?string $FareBasis = null;
    /**
     * The PassengerTypeCode
     * Meta information extracted from the WSDL
     * - documentation: The PTC that is associated with this fare. Default to ADT | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $PassengerTypeCode = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Returns the airport or city code that defines the origin market for this fare. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Returns the airport or city code that defines the destination market for this fare. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The RouteDescription
     * Meta information extracted from the WSDL
     * - documentation: Describes the route of the train fare.
     * - use: optional
     * @var string|null
     */
    protected ?string $RouteDescription = null;
    /**
     * The TicketTypeCode
     * Meta information extracted from the WSDL
     * - documentation: Describes the main identifier code of the fare.
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketTypeCode = null;
    /**
     * The FareReference
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $FareReference = null;
    /**
     * The CrossCityFare
     * Meta information extracted from the WSDL
     * - documentation: Set to 'true' if the fare is valid across a Metropolitan Area, eg. Cross-London travel via the London Underground.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CrossCityFare = null;
    /**
     * The OriginStationName
     * Meta information extracted from the WSDL
     * - documentation: The origin station name for the Rail Fare.
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginStationName = null;
    /**
     * The DestinationStationName
     * Meta information extracted from the WSDL
     * - documentation: The destination station name for the Rail Fare.
     * - use: optional
     * @var string|null
     */
    protected ?string $DestinationStationName = null;
    /**
     * The ReservationRequired
     * Meta information extracted from the WSDL
     * - documentation: Set to true if a seat reservation is required while booking.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReservationRequired = null;
    /**
     * The JourneyDirection
     * Meta information extracted from the WSDL
     * - documentation: The direction of the Journey (Outward or Return) associated with the Rail fare.
     * - use: optional
     * @var string|null
     */
    protected ?string $JourneyDirection = null;
    /**
     * The RailLocOrigin
     * Meta information extracted from the WSDL
     * - documentation: RCH specific origin code (a.k.a UCodes) which uniquely identifies a train station. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $RailLocOrigin = null;
    /**
     * The RailLocDestination
     * Meta information extracted from the WSDL
     * - documentation: RCH specific destination code (a.k.a UCodes) which uniquely identifies a train station. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $RailLocDestination = null;
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
     * Constructor method for RailFare
     * @uses RailFare::setKey()
     * @uses RailFare::setCabinClass()
     * @uses RailFare::setEffectiveDate()
     * @uses RailFare::setRailFareNoteRef()
     * @uses RailFare::setRailFareID()
     * @uses RailFare::setRailFareIDRef()
     * @uses RailFare::setFareValidity()
     * @uses RailFare::setHostToken()
     * @uses RailFare::setFulFillmentType()
     * @uses RailFare::setRailFareComponent()
     * @uses RailFare::setFareBasis()
     * @uses RailFare::setPassengerTypeCode()
     * @uses RailFare::setOrigin()
     * @uses RailFare::setDestination()
     * @uses RailFare::setAmount()
     * @uses RailFare::setRouteDescription()
     * @uses RailFare::setTicketTypeCode()
     * @uses RailFare::setFareReference()
     * @uses RailFare::setCrossCityFare()
     * @uses RailFare::setOriginStationName()
     * @uses RailFare::setDestinationStationName()
     * @uses RailFare::setReservationRequired()
     * @uses RailFare::setJourneyDirection()
     * @uses RailFare::setRailLocOrigin()
     * @uses RailFare::setRailLocDestination()
     * @uses RailFare::setElStat()
     * @uses RailFare::setKeyOverride()
     * @param string $key
     * @param string $cabinClass
     * @param string $effectiveDate
     * @param \Travelport\UniversalRecord\StructType\RailFareNoteRef[] $railFareNoteRef
     * @param \Travelport\UniversalRecord\StructType\RailFareID[] $railFareID
     * @param \Travelport\UniversalRecord\StructType\RailFareIDRef[] $railFareIDRef
     * @param \Travelport\UniversalRecord\StructType\FareValidity[] $fareValidity
     * @param \Travelport\UniversalRecord\StructType\HostToken $hostToken
     * @param string[] $fulFillmentType
     * @param \Travelport\UniversalRecord\StructType\RailFareComponent[] $railFareComponent
     * @param string $fareBasis
     * @param string $passengerTypeCode
     * @param string $origin
     * @param string $destination
     * @param string $amount
     * @param string $routeDescription
     * @param string $ticketTypeCode
     * @param string $fareReference
     * @param bool $crossCityFare
     * @param string $originStationName
     * @param string $destinationStationName
     * @param bool $reservationRequired
     * @param string $journeyDirection
     * @param string $railLocOrigin
     * @param string $railLocDestination
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, string $cabinClass, string $effectiveDate, ?array $railFareNoteRef = null, ?array $railFareID = null, ?array $railFareIDRef = null, ?array $fareValidity = null, ?\Travelport\UniversalRecord\StructType\HostToken $hostToken = null, ?array $fulFillmentType = null, ?array $railFareComponent = null, ?string $fareBasis = null, ?string $passengerTypeCode = null, ?string $origin = null, ?string $destination = null, ?string $amount = null, ?string $routeDescription = null, ?string $ticketTypeCode = null, ?string $fareReference = null, ?bool $crossCityFare = false, ?string $originStationName = null, ?string $destinationStationName = null, ?bool $reservationRequired = null, ?string $journeyDirection = null, ?string $railLocOrigin = null, ?string $railLocDestination = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setCabinClass($cabinClass)
            ->setEffectiveDate($effectiveDate)
            ->setRailFareNoteRef($railFareNoteRef)
            ->setRailFareID($railFareID)
            ->setRailFareIDRef($railFareIDRef)
            ->setFareValidity($fareValidity)
            ->setHostToken($hostToken)
            ->setFulFillmentType($fulFillmentType)
            ->setRailFareComponent($railFareComponent)
            ->setFareBasis($fareBasis)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setAmount($amount)
            ->setRouteDescription($routeDescription)
            ->setTicketTypeCode($ticketTypeCode)
            ->setFareReference($fareReference)
            ->setCrossCityFare($crossCityFare)
            ->setOriginStationName($originStationName)
            ->setDestinationStationName($destinationStationName)
            ->setReservationRequired($reservationRequired)
            ->setJourneyDirection($journeyDirection)
            ->setRailLocOrigin($railLocOrigin)
            ->setRailLocDestination($railLocDestination)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
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
     * @return \Travelport\UniversalRecord\StructType\RailFare
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
     * Get CabinClass value
     * @return string
     */
    public function getCabinClass(): string
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param string $cabinClass
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setCabinClass(string $cabinClass): self
    {
        // validation for constraint: string
        if (!is_null($cabinClass) && !is_string($cabinClass)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cabinClass, true), gettype($cabinClass)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($cabinClass) && mb_strlen((string) $cabinClass) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $cabinClass)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($cabinClass) && mb_strlen((string) $cabinClass) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $cabinClass)), __LINE__);
        }
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get RailFareNoteRef value
     * @return \Travelport\UniversalRecord\StructType\RailFareNoteRef[]
     */
    public function getRailFareNoteRef(): ?array
    {
        return $this->RailFareNoteRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailFareNoteRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareNoteRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareNoteRefForArrayConstraintFromSetRailFareNoteRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareRailFareNoteRefItem) {
            // validation for constraint: itemType
            if (!$railFareRailFareNoteRefItem instanceof \Travelport\UniversalRecord\StructType\RailFareNoteRef) {
                $invalidValues[] = is_object($railFareRailFareNoteRefItem) ? get_class($railFareRailFareNoteRefItem) : sprintf('%s(%s)', gettype($railFareRailFareNoteRefItem), var_export($railFareRailFareNoteRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFareNoteRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareNoteRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailFareNoteRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareNoteRef[] $railFareNoteRef
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setRailFareNoteRef(?array $railFareNoteRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareNoteRefArrayErrorMessage = self::validateRailFareNoteRefForArrayConstraintFromSetRailFareNoteRef($railFareNoteRef))) {
            throw new InvalidArgumentException($railFareNoteRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railFareNoteRef) && count($railFareNoteRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railFareNoteRef)), __LINE__);
        }
        $this->RailFareNoteRef = $railFareNoteRef;
        
        return $this;
    }
    /**
     * Add item to RailFareNoteRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareNoteRef $item
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function addToRailFareNoteRef(\Travelport\UniversalRecord\StructType\RailFareNoteRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFareNoteRef) {
            throw new InvalidArgumentException(sprintf('The RailFareNoteRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareNoteRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailFareNoteRef) && count($this->RailFareNoteRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailFareNoteRef)), __LINE__);
        }
        $this->RailFareNoteRef[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareID value
     * @return \Travelport\UniversalRecord\StructType\RailFareID[]|null
     */
    public function getRailFareID(): ?array
    {
        return $this->RailFareID ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailFareID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareID method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareIDForArrayConstraintFromSetRailFareID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareRailFareIDItem) {
            // validation for constraint: itemType
            if (!$railFareRailFareIDItem instanceof \Travelport\UniversalRecord\StructType\RailFareID) {
                $invalidValues[] = is_object($railFareRailFareIDItem) ? get_class($railFareRailFareIDItem) : sprintf('%s(%s)', gettype($railFareRailFareIDItem), var_export($railFareRailFareIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFareID property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailFareID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailFareIDForChoiceConstraintFromSetRailFareID($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailFareIDRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailFareID can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFareID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailFareID value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareID[] $railFareID
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setRailFareID(?array $railFareID = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareIDArrayErrorMessage = self::validateRailFareIDForArrayConstraintFromSetRailFareID($railFareID))) {
            throw new InvalidArgumentException($railFareIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailFareID, RailFareIDRef)
        if ('' !== ($railFareIDChoiceErrorMessage = self::validateRailFareIDForChoiceConstraintFromSetRailFareID($railFareID))) {
            throw new InvalidArgumentException($railFareIDChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railFareID) && count($railFareID) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railFareID)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railFareID) && count($railFareID) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railFareID)), __LINE__);
        }
        if (is_null($railFareID) || (is_array($railFareID) && empty($railFareID))) {
            unset($this->RailFareID);
        } else {
            $this->RailFareID = $railFareID;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToRailFareID method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailFareID method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToRailFareID($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailFareIDRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailFareID can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFareID, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailFareID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareID $item
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function addToRailFareID(\Travelport\UniversalRecord\StructType\RailFareID $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFareID) {
            throw new InvalidArgumentException(sprintf('The RailFareID property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailFareID, RailFareIDRef)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToRailFareID($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailFareID) && count($this->RailFareID) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailFareID)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailFareID) && count($this->RailFareID) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailFareID)), __LINE__);
        }
        $this->RailFareID[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareIDRef value
     * @return \Travelport\UniversalRecord\StructType\RailFareIDRef[]|null
     */
    public function getRailFareIDRef(): ?array
    {
        return $this->RailFareIDRef ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailFareIDRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareIDRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareIDRefForArrayConstraintFromSetRailFareIDRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareRailFareIDRefItem) {
            // validation for constraint: itemType
            if (!$railFareRailFareIDRefItem instanceof \Travelport\UniversalRecord\StructType\RailFareIDRef) {
                $invalidValues[] = is_object($railFareRailFareIDRefItem) ? get_class($railFareRailFareIDRefItem) : sprintf('%s(%s)', gettype($railFareRailFareIDRefItem), var_export($railFareRailFareIDRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFareIDRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareIDRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailFareIDRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareIDRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailFareIDRefForChoiceConstraintFromSetRailFareIDRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailFareID',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailFareIDRef can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFareIDRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailFareIDRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareIDRef[] $railFareIDRef
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setRailFareIDRef(?array $railFareIDRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareIDRefArrayErrorMessage = self::validateRailFareIDRefForArrayConstraintFromSetRailFareIDRef($railFareIDRef))) {
            throw new InvalidArgumentException($railFareIDRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailFareID, RailFareIDRef)
        if ('' !== ($railFareIDRefChoiceErrorMessage = self::validateRailFareIDRefForChoiceConstraintFromSetRailFareIDRef($railFareIDRef))) {
            throw new InvalidArgumentException($railFareIDRefChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railFareIDRef) && count($railFareIDRef) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railFareIDRef)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railFareIDRef) && count($railFareIDRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railFareIDRef)), __LINE__);
        }
        if (is_null($railFareIDRef) || (is_array($railFareIDRef) && empty($railFareIDRef))) {
            unset($this->RailFareIDRef);
        } else {
            $this->RailFareIDRef = $railFareIDRef;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToRailFareIDRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailFareIDRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToRailFareIDRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailFareID',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailFareIDRef can\'t be set as the property %s is already set. Only one property must be set among these properties: RailFareIDRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailFareIDRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareIDRef $item
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function addToRailFareIDRef(\Travelport\UniversalRecord\StructType\RailFareIDRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFareIDRef) {
            throw new InvalidArgumentException(sprintf('The RailFareIDRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareIDRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailFareID, RailFareIDRef)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToRailFareIDRef($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailFareIDRef) && count($this->RailFareIDRef) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailFareIDRef)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailFareIDRef) && count($this->RailFareIDRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailFareIDRef)), __LINE__);
        }
        $this->RailFareIDRef[] = $item;
        
        return $this;
    }
    /**
     * Get FareValidity value
     * @return \Travelport\UniversalRecord\StructType\FareValidity[]
     */
    public function getFareValidity(): ?array
    {
        return $this->FareValidity;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareValidity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareValidity method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareValidityForArrayConstraintFromSetFareValidity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareFareValidityItem) {
            // validation for constraint: itemType
            if (!$railFareFareValidityItem instanceof \Travelport\UniversalRecord\StructType\FareValidity) {
                $invalidValues[] = is_object($railFareFareValidityItem) ? get_class($railFareFareValidityItem) : sprintf('%s(%s)', gettype($railFareFareValidityItem), var_export($railFareFareValidityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareValidity property can only contain items of type \Travelport\UniversalRecord\StructType\FareValidity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareValidity value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareValidity[] $fareValidity
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setFareValidity(?array $fareValidity = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareValidityArrayErrorMessage = self::validateFareValidityForArrayConstraintFromSetFareValidity($fareValidity))) {
            throw new InvalidArgumentException($fareValidityArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareValidity) && count($fareValidity) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareValidity)), __LINE__);
        }
        $this->FareValidity = $fareValidity;
        
        return $this;
    }
    /**
     * Add item to FareValidity value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareValidity $item
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function addToFareValidity(\Travelport\UniversalRecord\StructType\FareValidity $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FareValidity) {
            throw new InvalidArgumentException(sprintf('The FareValidity property can only contain items of type \Travelport\UniversalRecord\StructType\FareValidity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareValidity) && count($this->FareValidity) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareValidity)), __LINE__);
        }
        $this->FareValidity[] = $item;
        
        return $this;
    }
    /**
     * Get HostToken value
     * @return \Travelport\UniversalRecord\StructType\HostToken|null
     */
    public function getHostToken(): ?\Travelport\UniversalRecord\StructType\HostToken
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\UniversalRecord\StructType\HostToken $hostToken
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setHostToken(?\Travelport\UniversalRecord\StructType\HostToken $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Get FulFillmentType value
     * @return string[]
     */
    public function getFulFillmentType(): ?array
    {
        return $this->FulFillmentType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFulFillmentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulFillmentType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulFillmentTypeForArrayConstraintFromSetFulFillmentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareFulFillmentTypeItem) {
            // validation for constraint: itemType
            if (!is_string($railFareFulFillmentTypeItem)) {
                $invalidValues[] = is_object($railFareFulFillmentTypeItem) ? get_class($railFareFulFillmentTypeItem) : sprintf('%s(%s)', gettype($railFareFulFillmentTypeItem), var_export($railFareFulFillmentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FulFillmentType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFulFillmentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulFillmentType method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulFillmentTypeForMaxLengthConstraintFromSetFulFillmentType(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $railFareFulFillmentTypeItem) {
            // validation for constraint: maxLength(255)
            if (mb_strlen((string) $railFareFulFillmentTypeItem) > 255) {
                $invalidValues[] = var_export($railFareFulFillmentTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 255', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFulFillmentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFulFillmentType method
     * This has to validate that the items contained by the array match the length constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFulFillmentTypeForMinLengthConstraintFromSetFulFillmentType(?array $values = null): string
    {
        $message = '';
        $invalidValues = [];
        foreach (($values ?? []) as $railFareFulFillmentTypeItem) {
            // validation for constraint: minLength
            if (mb_strlen((string) $railFareFulFillmentTypeItem) < 0) {
                $invalidValues[] = var_export($railFareFulFillmentTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 0', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FulFillmentType value
     * @throws InvalidArgumentException
     * @param string[] $fulFillmentType
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setFulFillmentType(?array $fulFillmentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($fulFillmentTypeArrayErrorMessage = self::validateFulFillmentTypeForArrayConstraintFromSetFulFillmentType($fulFillmentType))) {
            throw new InvalidArgumentException($fulFillmentTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(255)
        if ('' !== ($fulFillmentTypeMaxLengthErrorMessage = self::validateFulFillmentTypeForMaxLengthConstraintFromSetFulFillmentType($fulFillmentType))) {
            throw new InvalidArgumentException($fulFillmentTypeMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fulFillmentType) && count($fulFillmentType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fulFillmentType)), __LINE__);
        }
        // validation for constraint: minLength
        if ('' !== ($fulFillmentTypeMinLengthErrorMessage = self::validateFulFillmentTypeForMinLengthConstraintFromSetFulFillmentType($fulFillmentType))) {
            throw new InvalidArgumentException($fulFillmentTypeMinLengthErrorMessage, __LINE__);
        }
        $this->FulFillmentType = $fulFillmentType;
        
        return $this;
    }
    /**
     * Add item to FulFillmentType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function addToFulFillmentType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The FulFillmentType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (mb_strlen((string) $item) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FulFillmentType) && count($this->FulFillmentType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FulFillmentType)), __LINE__);
        }
        // validation for constraint: minLength
        if (mb_strlen((string) $item) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $item)), __LINE__);
        }
        $this->FulFillmentType[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareComponent value
     * @return \Travelport\UniversalRecord\StructType\RailFareComponent[]
     */
    public function getRailFareComponent(): ?array
    {
        return $this->RailFareComponent;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailFareComponent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailFareComponent method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailFareComponentForArrayConstraintFromSetRailFareComponent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railFareRailFareComponentItem) {
            // validation for constraint: itemType
            if (!$railFareRailFareComponentItem instanceof \Travelport\UniversalRecord\StructType\RailFareComponent) {
                $invalidValues[] = is_object($railFareRailFareComponentItem) ? get_class($railFareRailFareComponentItem) : sprintf('%s(%s)', gettype($railFareRailFareComponentItem), var_export($railFareRailFareComponentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailFareComponent property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareComponent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailFareComponent value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareComponent[] $railFareComponent
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setRailFareComponent(?array $railFareComponent = null): self
    {
        // validation for constraint: array
        if ('' !== ($railFareComponentArrayErrorMessage = self::validateRailFareComponentForArrayConstraintFromSetRailFareComponent($railFareComponent))) {
            throw new InvalidArgumentException($railFareComponentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($railFareComponent) && count($railFareComponent) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($railFareComponent)), __LINE__);
        }
        $this->RailFareComponent = $railFareComponent;
        
        return $this;
    }
    /**
     * Add item to RailFareComponent value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareComponent $item
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function addToRailFareComponent(\Travelport\UniversalRecord\StructType\RailFareComponent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailFareComponent) {
            throw new InvalidArgumentException(sprintf('The RailFareComponent property can only contain items of type \Travelport\UniversalRecord\StructType\RailFareComponent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->RailFareComponent) && count($this->RailFareComponent) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->RailFareComponent)), __LINE__);
        }
        $this->RailFareComponent[] = $item;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return string|null
     */
    public function getFareBasis(): ?string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setFareBasis(?string $fareBasis = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode(): ?string
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setPassengerTypeCode(?string $passengerTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerTypeCode, true), gettype($passengerTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($passengerTypeCode) && mb_strlen((string) $passengerTypeCode) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $passengerTypeCode)), __LINE__);
        }
        $this->PassengerTypeCode = $passengerTypeCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailFare
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
     * @return \Travelport\UniversalRecord\StructType\RailFare
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
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get RouteDescription value
     * @return string|null
     */
    public function getRouteDescription(): ?string
    {
        return $this->RouteDescription;
    }
    /**
     * Set RouteDescription value
     * @param string $routeDescription
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setRouteDescription(?string $routeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($routeDescription) && !is_string($routeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routeDescription, true), gettype($routeDescription)), __LINE__);
        }
        $this->RouteDescription = $routeDescription;
        
        return $this;
    }
    /**
     * Get TicketTypeCode value
     * @return string|null
     */
    public function getTicketTypeCode(): ?string
    {
        return $this->TicketTypeCode;
    }
    /**
     * Set TicketTypeCode value
     * @param string $ticketTypeCode
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setTicketTypeCode(?string $ticketTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketTypeCode) && !is_string($ticketTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketTypeCode, true), gettype($ticketTypeCode)), __LINE__);
        }
        $this->TicketTypeCode = $ticketTypeCode;
        
        return $this;
    }
    /**
     * Get FareReference value
     * @return string|null
     */
    public function getFareReference(): ?string
    {
        return $this->FareReference;
    }
    /**
     * Set FareReference value
     * @param string $fareReference
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setFareReference(?string $fareReference = null): self
    {
        // validation for constraint: string
        if (!is_null($fareReference) && !is_string($fareReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareReference, true), gettype($fareReference)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($fareReference) && mb_strlen((string) $fareReference) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $fareReference)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($fareReference) && mb_strlen((string) $fareReference) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $fareReference)), __LINE__);
        }
        $this->FareReference = $fareReference;
        
        return $this;
    }
    /**
     * Get CrossCityFare value
     * @return bool|null
     */
    public function getCrossCityFare(): ?bool
    {
        return $this->CrossCityFare;
    }
    /**
     * Set CrossCityFare value
     * @param bool $crossCityFare
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setCrossCityFare(?bool $crossCityFare = false): self
    {
        // validation for constraint: boolean
        if (!is_null($crossCityFare) && !is_bool($crossCityFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crossCityFare, true), gettype($crossCityFare)), __LINE__);
        }
        $this->CrossCityFare = $crossCityFare;
        
        return $this;
    }
    /**
     * Get OriginStationName value
     * @return string|null
     */
    public function getOriginStationName(): ?string
    {
        return $this->OriginStationName;
    }
    /**
     * Set OriginStationName value
     * @param string $originStationName
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setOriginStationName(?string $originStationName = null): self
    {
        // validation for constraint: string
        if (!is_null($originStationName) && !is_string($originStationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originStationName, true), gettype($originStationName)), __LINE__);
        }
        $this->OriginStationName = $originStationName;
        
        return $this;
    }
    /**
     * Get DestinationStationName value
     * @return string|null
     */
    public function getDestinationStationName(): ?string
    {
        return $this->DestinationStationName;
    }
    /**
     * Set DestinationStationName value
     * @param string $destinationStationName
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setDestinationStationName(?string $destinationStationName = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationStationName) && !is_string($destinationStationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationStationName, true), gettype($destinationStationName)), __LINE__);
        }
        $this->DestinationStationName = $destinationStationName;
        
        return $this;
    }
    /**
     * Get ReservationRequired value
     * @return bool|null
     */
    public function getReservationRequired(): ?bool
    {
        return $this->ReservationRequired;
    }
    /**
     * Set ReservationRequired value
     * @param bool $reservationRequired
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setReservationRequired(?bool $reservationRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reservationRequired) && !is_bool($reservationRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reservationRequired, true), gettype($reservationRequired)), __LINE__);
        }
        $this->ReservationRequired = $reservationRequired;
        
        return $this;
    }
    /**
     * Get JourneyDirection value
     * @return string|null
     */
    public function getJourneyDirection(): ?string
    {
        return $this->JourneyDirection;
    }
    /**
     * Set JourneyDirection value
     * @uses \Travelport\UniversalRecord\EnumType\TypeJourneyDirection::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeJourneyDirection::getValidValues()
     * @throws InvalidArgumentException
     * @param string $journeyDirection
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setJourneyDirection(?string $journeyDirection = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeJourneyDirection::valueIsValid($journeyDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeJourneyDirection', is_array($journeyDirection) ? implode(', ', $journeyDirection) : var_export($journeyDirection, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeJourneyDirection::getValidValues())), __LINE__);
        }
        $this->JourneyDirection = $journeyDirection;
        
        return $this;
    }
    /**
     * Get RailLocOrigin value
     * @return string|null
     */
    public function getRailLocOrigin(): ?string
    {
        return $this->RailLocOrigin;
    }
    /**
     * Set RailLocOrigin value
     * @param string $railLocOrigin
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setRailLocOrigin(?string $railLocOrigin = null): self
    {
        // validation for constraint: string
        if (!is_null($railLocOrigin) && !is_string($railLocOrigin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railLocOrigin, true), gettype($railLocOrigin)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($railLocOrigin) && mb_strlen((string) $railLocOrigin) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $railLocOrigin)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($railLocOrigin) && mb_strlen((string) $railLocOrigin) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $railLocOrigin)), __LINE__);
        }
        $this->RailLocOrigin = $railLocOrigin;
        
        return $this;
    }
    /**
     * Get RailLocDestination value
     * @return string|null
     */
    public function getRailLocDestination(): ?string
    {
        return $this->RailLocDestination;
    }
    /**
     * Set RailLocDestination value
     * @param string $railLocDestination
     * @return \Travelport\UniversalRecord\StructType\RailFare
     */
    public function setRailLocDestination(?string $railLocDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($railLocDestination) && !is_string($railLocDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railLocDestination, true), gettype($railLocDestination)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($railLocDestination) && mb_strlen((string) $railLocDestination) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $railLocDestination)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($railLocDestination) && mb_strlen((string) $railLocDestination) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $railLocDestination)), __LINE__);
        }
        $this->RailLocDestination = $railLocDestination;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailFare
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
     * @return \Travelport\UniversalRecord\StructType\RailFare
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
