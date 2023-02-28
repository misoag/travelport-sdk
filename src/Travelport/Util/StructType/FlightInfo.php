<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightInfo StructType
 * @subpackage Structs
 */
class FlightInfo extends AbstractStructBase
{
    /**
     * The CriteriaKey
     * Meta information extracted from the WSDL
     * - documentation: An identifier to link the flightinfo responses to the criteria in request. The value populated here is passed in request. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $CriteriaKey;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier that is marketing this segment | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Carrier;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: The flight number under which the marketing carrier is marketing this flight | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    protected string $FlightNumber;
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - documentation: The date at which this entity departs. This does not include time zone information since it can be derived from the origin location.
     * - use: required
     * @var string
     */
    protected string $DepartureDate;
    /**
     * The FlightInfoDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FlightInfoDetail
     * @var \Travelport\Util\StructType\FlightInfoDetail[]
     */
    protected ?array $FlightInfoDetail = null;
    /**
     * The FlightInfoErrorMessage
     * Meta information extracted from the WSDL
     * - documentation: Errors, Warnings and informational messages for the Flight referenced above.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeResultMessage[]
     */
    protected ?array $FlightInfoErrorMessage = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
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
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ClassOfService = null;
    /**
     * Constructor method for FlightInfo
     * @uses FlightInfo::setCriteriaKey()
     * @uses FlightInfo::setCarrier()
     * @uses FlightInfo::setFlightNumber()
     * @uses FlightInfo::setDepartureDate()
     * @uses FlightInfo::setFlightInfoDetail()
     * @uses FlightInfo::setFlightInfoErrorMessage()
     * @uses FlightInfo::setOrigin()
     * @uses FlightInfo::setDestination()
     * @uses FlightInfo::setClassOfService()
     * @param string $criteriaKey
     * @param string $carrier
     * @param string $flightNumber
     * @param string $departureDate
     * @param \Travelport\Util\StructType\FlightInfoDetail[] $flightInfoDetail
     * @param \Travelport\Util\StructType\TypeResultMessage[] $flightInfoErrorMessage
     * @param string $origin
     * @param string $destination
     * @param string $classOfService
     */
    public function __construct(string $criteriaKey, string $carrier, string $flightNumber, string $departureDate, ?array $flightInfoDetail = null, ?array $flightInfoErrorMessage = null, ?string $origin = null, ?string $destination = null, ?string $classOfService = null)
    {
        $this
            ->setCriteriaKey($criteriaKey)
            ->setCarrier($carrier)
            ->setFlightNumber($flightNumber)
            ->setDepartureDate($departureDate)
            ->setFlightInfoDetail($flightInfoDetail)
            ->setFlightInfoErrorMessage($flightInfoErrorMessage)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setClassOfService($classOfService);
    }
    /**
     * Get CriteriaKey value
     * @return string
     */
    public function getCriteriaKey(): string
    {
        return $this->CriteriaKey;
    }
    /**
     * Set CriteriaKey value
     * @param string $criteriaKey
     * @return \Travelport\Util\StructType\FlightInfo
     */
    public function setCriteriaKey(string $criteriaKey): self
    {
        // validation for constraint: string
        if (!is_null($criteriaKey) && !is_string($criteriaKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($criteriaKey, true), gettype($criteriaKey)), __LINE__);
        }
        $this->CriteriaKey = $criteriaKey;
        
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
     * @return \Travelport\Util\StructType\FlightInfo
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
     * @return \Travelport\Util\StructType\FlightInfo
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
     * @return \Travelport\Util\StructType\FlightInfo
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
     * Get FlightInfoDetail value
     * @return \Travelport\Util\StructType\FlightInfoDetail[]
     */
    public function getFlightInfoDetail(): ?array
    {
        return $this->FlightInfoDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFlightInfoDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightInfoDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightInfoDetailForArrayConstraintFromSetFlightInfoDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightInfoFlightInfoDetailItem) {
            // validation for constraint: itemType
            if (!$flightInfoFlightInfoDetailItem instanceof \Travelport\Util\StructType\FlightInfoDetail) {
                $invalidValues[] = is_object($flightInfoFlightInfoDetailItem) ? get_class($flightInfoFlightInfoDetailItem) : sprintf('%s(%s)', gettype($flightInfoFlightInfoDetailItem), var_export($flightInfoFlightInfoDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightInfoDetail property can only contain items of type \Travelport\Util\StructType\FlightInfoDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightInfoDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FlightInfoDetail[] $flightInfoDetail
     * @return \Travelport\Util\StructType\FlightInfo
     */
    public function setFlightInfoDetail(?array $flightInfoDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightInfoDetailArrayErrorMessage = self::validateFlightInfoDetailForArrayConstraintFromSetFlightInfoDetail($flightInfoDetail))) {
            throw new InvalidArgumentException($flightInfoDetailArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightInfoDetail) && count($flightInfoDetail) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightInfoDetail)), __LINE__);
        }
        $this->FlightInfoDetail = $flightInfoDetail;
        
        return $this;
    }
    /**
     * Add item to FlightInfoDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FlightInfoDetail $item
     * @return \Travelport\Util\StructType\FlightInfo
     */
    public function addToFlightInfoDetail(\Travelport\Util\StructType\FlightInfoDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FlightInfoDetail) {
            throw new InvalidArgumentException(sprintf('The FlightInfoDetail property can only contain items of type \Travelport\Util\StructType\FlightInfoDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightInfoDetail) && count($this->FlightInfoDetail) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightInfoDetail)), __LINE__);
        }
        $this->FlightInfoDetail[] = $item;
        
        return $this;
    }
    /**
     * Get FlightInfoErrorMessage value
     * @return \Travelport\Util\StructType\TypeResultMessage[]
     */
    public function getFlightInfoErrorMessage(): ?array
    {
        return $this->FlightInfoErrorMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFlightInfoErrorMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlightInfoErrorMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlightInfoErrorMessageForArrayConstraintFromSetFlightInfoErrorMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $flightInfoFlightInfoErrorMessageItem) {
            // validation for constraint: itemType
            if (!$flightInfoFlightInfoErrorMessageItem instanceof \Travelport\Util\StructType\TypeResultMessage) {
                $invalidValues[] = is_object($flightInfoFlightInfoErrorMessageItem) ? get_class($flightInfoFlightInfoErrorMessageItem) : sprintf('%s(%s)', gettype($flightInfoFlightInfoErrorMessageItem), var_export($flightInfoFlightInfoErrorMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FlightInfoErrorMessage property can only contain items of type \Travelport\Util\StructType\TypeResultMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FlightInfoErrorMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeResultMessage[] $flightInfoErrorMessage
     * @return \Travelport\Util\StructType\FlightInfo
     */
    public function setFlightInfoErrorMessage(?array $flightInfoErrorMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($flightInfoErrorMessageArrayErrorMessage = self::validateFlightInfoErrorMessageForArrayConstraintFromSetFlightInfoErrorMessage($flightInfoErrorMessage))) {
            throw new InvalidArgumentException($flightInfoErrorMessageArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($flightInfoErrorMessage) && count($flightInfoErrorMessage) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($flightInfoErrorMessage)), __LINE__);
        }
        $this->FlightInfoErrorMessage = $flightInfoErrorMessage;
        
        return $this;
    }
    /**
     * Add item to FlightInfoErrorMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeResultMessage $item
     * @return \Travelport\Util\StructType\FlightInfo
     */
    public function addToFlightInfoErrorMessage(\Travelport\Util\StructType\TypeResultMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeResultMessage) {
            throw new InvalidArgumentException(sprintf('The FlightInfoErrorMessage property can only contain items of type \Travelport\Util\StructType\TypeResultMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FlightInfoErrorMessage) && count($this->FlightInfoErrorMessage) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FlightInfoErrorMessage)), __LINE__);
        }
        $this->FlightInfoErrorMessage[] = $item;
        
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
     * @return \Travelport\Util\StructType\FlightInfo
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
     * @return \Travelport\Util\StructType\FlightInfo
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
     * @return \Travelport\Util\StructType\FlightInfo
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
}
