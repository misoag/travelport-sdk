<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailTicketInfo StructType
 * @subpackage Structs
 */
class RailTicketInfo extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 19
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Number;
    /**
     * The RailJourneyRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailJourneyRef
     * @var \Travelport\UniversalRecord\StructType\RailJourneyRef[]
     */
    protected ?array $RailJourneyRef = null;
    /**
     * The TicketAdvisory
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: TicketAdvisory
     * @var \Travelport\UniversalRecord\StructType\TicketAdvisory[]
     */
    protected ?array $TicketAdvisory = null;
    /**
     * The IssueLocation
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $IssueLocation = null;
    /**
     * The TicketStatus
     * Meta information extracted from the WSDL
     * - documentation: Status of Ticket. | Used for Character Strings, length 1 to 255.
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketStatus = null;
    /**
     * The TicketFormType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketFormType = null;
    /**
     * The TrafficType
     * Meta information extracted from the WSDL
     * - documentation: Type of traffic. | Used for Character Strings, length 1 to 255.
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $TrafficType = null;
    /**
     * The IssuedDate
     * Meta information extracted from the WSDL
     * - documentation: Ticket issue date.
     * - use: optional
     * @var string|null
     */
    protected ?string $IssuedDate = null;
    /**
     * The TicketType
     * Meta information extracted from the WSDL
     * - documentation: Type of ticket. Paper, eTicket etc. | Used for Character Strings, length 1 to 255.
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketType = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a BookingTraveler. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * Constructor method for RailTicketInfo
     * @uses RailTicketInfo::setNumber()
     * @uses RailTicketInfo::setRailJourneyRef()
     * @uses RailTicketInfo::setTicketAdvisory()
     * @uses RailTicketInfo::setIssueLocation()
     * @uses RailTicketInfo::setTicketStatus()
     * @uses RailTicketInfo::setTicketFormType()
     * @uses RailTicketInfo::setTrafficType()
     * @uses RailTicketInfo::setIssuedDate()
     * @uses RailTicketInfo::setTicketType()
     * @uses RailTicketInfo::setBookingTravelerRef()
     * @param string $number
     * @param \Travelport\UniversalRecord\StructType\RailJourneyRef[] $railJourneyRef
     * @param \Travelport\UniversalRecord\StructType\TicketAdvisory[] $ticketAdvisory
     * @param string $issueLocation
     * @param string $ticketStatus
     * @param string $ticketFormType
     * @param string $trafficType
     * @param string $issuedDate
     * @param string $ticketType
     * @param string $bookingTravelerRef
     */
    public function __construct(string $number, ?array $railJourneyRef = null, ?array $ticketAdvisory = null, ?string $issueLocation = null, ?string $ticketStatus = null, ?string $ticketFormType = null, ?string $trafficType = null, ?string $issuedDate = null, ?string $ticketType = null, ?string $bookingTravelerRef = null)
    {
        $this
            ->setNumber($number)
            ->setRailJourneyRef($railJourneyRef)
            ->setTicketAdvisory($ticketAdvisory)
            ->setIssueLocation($issueLocation)
            ->setTicketStatus($ticketStatus)
            ->setTicketFormType($ticketFormType)
            ->setTrafficType($trafficType)
            ->setIssuedDate($issuedDate)
            ->setTicketType($ticketType)
            ->setBookingTravelerRef($bookingTravelerRef);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setNumber(string $number): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxLength(19)
        if (!is_null($number) && mb_strlen((string) $number) > 19) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 19', mb_strlen((string) $number)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($number) && mb_strlen((string) $number) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get RailJourneyRef value
     * @return \Travelport\UniversalRecord\StructType\RailJourneyRef[]
     */
    public function getRailJourneyRef(): ?array
    {
        return $this->RailJourneyRef;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailJourneyRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailJourneyRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailJourneyRefForArrayConstraintFromSetRailJourneyRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railTicketInfoRailJourneyRefItem) {
            // validation for constraint: itemType
            if (!$railTicketInfoRailJourneyRefItem instanceof \Travelport\UniversalRecord\StructType\RailJourneyRef) {
                $invalidValues[] = is_object($railTicketInfoRailJourneyRefItem) ? get_class($railTicketInfoRailJourneyRefItem) : sprintf('%s(%s)', gettype($railTicketInfoRailJourneyRefItem), var_export($railTicketInfoRailJourneyRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailJourneyRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourneyRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailJourneyRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourneyRef[] $railJourneyRef
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setRailJourneyRef(?array $railJourneyRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($railJourneyRefArrayErrorMessage = self::validateRailJourneyRefForArrayConstraintFromSetRailJourneyRef($railJourneyRef))) {
            throw new InvalidArgumentException($railJourneyRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railJourneyRef) && count($railJourneyRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railJourneyRef)), __LINE__);
        }
        $this->RailJourneyRef = $railJourneyRef;
        
        return $this;
    }
    /**
     * Add item to RailJourneyRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourneyRef $item
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function addToRailJourneyRef(\Travelport\UniversalRecord\StructType\RailJourneyRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailJourneyRef) {
            throw new InvalidArgumentException(sprintf('The RailJourneyRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourneyRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailJourneyRef) && count($this->RailJourneyRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailJourneyRef)), __LINE__);
        }
        $this->RailJourneyRef[] = $item;
        
        return $this;
    }
    /**
     * Get TicketAdvisory value
     * @return \Travelport\UniversalRecord\StructType\TicketAdvisory[]
     */
    public function getTicketAdvisory(): ?array
    {
        return $this->TicketAdvisory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTicketAdvisory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketAdvisory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketAdvisoryForArrayConstraintFromSetTicketAdvisory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $railTicketInfoTicketAdvisoryItem) {
            // validation for constraint: itemType
            if (!$railTicketInfoTicketAdvisoryItem instanceof \Travelport\UniversalRecord\StructType\TicketAdvisory) {
                $invalidValues[] = is_object($railTicketInfoTicketAdvisoryItem) ? get_class($railTicketInfoTicketAdvisoryItem) : sprintf('%s(%s)', gettype($railTicketInfoTicketAdvisoryItem), var_export($railTicketInfoTicketAdvisoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketAdvisory property can only contain items of type \Travelport\UniversalRecord\StructType\TicketAdvisory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketAdvisory value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketAdvisory[] $ticketAdvisory
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTicketAdvisory(?array $ticketAdvisory = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketAdvisoryArrayErrorMessage = self::validateTicketAdvisoryForArrayConstraintFromSetTicketAdvisory($ticketAdvisory))) {
            throw new InvalidArgumentException($ticketAdvisoryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($ticketAdvisory) && count($ticketAdvisory) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($ticketAdvisory)), __LINE__);
        }
        $this->TicketAdvisory = $ticketAdvisory;
        
        return $this;
    }
    /**
     * Add item to TicketAdvisory value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketAdvisory $item
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function addToTicketAdvisory(\Travelport\UniversalRecord\StructType\TicketAdvisory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TicketAdvisory) {
            throw new InvalidArgumentException(sprintf('The TicketAdvisory property can only contain items of type \Travelport\UniversalRecord\StructType\TicketAdvisory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->TicketAdvisory) && count($this->TicketAdvisory) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->TicketAdvisory)), __LINE__);
        }
        $this->TicketAdvisory[] = $item;
        
        return $this;
    }
    /**
     * Get IssueLocation value
     * @return string|null
     */
    public function getIssueLocation(): ?string
    {
        return $this->IssueLocation;
    }
    /**
     * Set IssueLocation value
     * @param string $issueLocation
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setIssueLocation(?string $issueLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($issueLocation) && !is_string($issueLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueLocation, true), gettype($issueLocation)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($issueLocation) && mb_strlen((string) $issueLocation) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $issueLocation)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($issueLocation) && mb_strlen((string) $issueLocation) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $issueLocation)), __LINE__);
        }
        $this->IssueLocation = $issueLocation;
        
        return $this;
    }
    /**
     * Get TicketStatus value
     * @return string|null
     */
    public function getTicketStatus(): ?string
    {
        return $this->TicketStatus;
    }
    /**
     * Set TicketStatus value
     * @param string $ticketStatus
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTicketStatus(?string $ticketStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketStatus) && !is_string($ticketStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketStatus, true), gettype($ticketStatus)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($ticketStatus) && mb_strlen((string) $ticketStatus) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $ticketStatus)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ticketStatus) && mb_strlen((string) $ticketStatus) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $ticketStatus)), __LINE__);
        }
        $this->TicketStatus = $ticketStatus;
        
        return $this;
    }
    /**
     * Get TicketFormType value
     * @return string|null
     */
    public function getTicketFormType(): ?string
    {
        return $this->TicketFormType;
    }
    /**
     * Set TicketFormType value
     * @param string $ticketFormType
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTicketFormType(?string $ticketFormType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketFormType) && !is_string($ticketFormType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketFormType, true), gettype($ticketFormType)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($ticketFormType) && mb_strlen((string) $ticketFormType) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $ticketFormType)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($ticketFormType) && mb_strlen((string) $ticketFormType) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $ticketFormType)), __LINE__);
        }
        $this->TicketFormType = $ticketFormType;
        
        return $this;
    }
    /**
     * Get TrafficType value
     * @return string|null
     */
    public function getTrafficType(): ?string
    {
        return $this->TrafficType;
    }
    /**
     * Set TrafficType value
     * @param string $trafficType
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTrafficType(?string $trafficType = null): self
    {
        // validation for constraint: string
        if (!is_null($trafficType) && !is_string($trafficType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trafficType, true), gettype($trafficType)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($trafficType) && mb_strlen((string) $trafficType) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $trafficType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($trafficType) && mb_strlen((string) $trafficType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $trafficType)), __LINE__);
        }
        $this->TrafficType = $trafficType;
        
        return $this;
    }
    /**
     * Get IssuedDate value
     * @return string|null
     */
    public function getIssuedDate(): ?string
    {
        return $this->IssuedDate;
    }
    /**
     * Set IssuedDate value
     * @param string $issuedDate
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setIssuedDate(?string $issuedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issuedDate) && !is_string($issuedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuedDate, true), gettype($issuedDate)), __LINE__);
        }
        $this->IssuedDate = $issuedDate;
        
        return $this;
    }
    /**
     * Get TicketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->TicketType;
    }
    /**
     * Set TicketType value
     * @param string $ticketType
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketType, true), gettype($ticketType)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($ticketType) && mb_strlen((string) $ticketType) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $ticketType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($ticketType) && mb_strlen((string) $ticketType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $ticketType)), __LINE__);
        }
        $this->TicketType = $ticketType;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\RailTicketInfo
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
}
