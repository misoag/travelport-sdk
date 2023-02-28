<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketInfo StructType
 * @subpackage Structs
 */
class TicketInfo extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Number;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Status;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a passenger. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $BookingTravelerRef;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - ref: common:Name
     * @var \Travelport\Util\StructType\Name|null
     */
    protected ?\Travelport\Util\StructType\Name $Name = null;
    /**
     * The ConjunctedTicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: ConjunctedTicketInfo
     * @var \Travelport\Util\StructType\ConjunctedTicketInfo[]
     */
    protected ?array $ConjunctedTicketInfo = null;
    /**
     * The ExchangedTicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ExchangedTicketInfo
     * @var \Travelport\Util\StructType\ExchangedTicketInfo[]
     */
    protected ?array $ExchangedTicketInfo = null;
    /**
     * The IATANumber
     * Meta information extracted from the WSDL
     * - documentation: ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    protected ?string $IATANumber = null;
    /**
     * The TicketIssueDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketIssueDate = null;
    /**
     * The TicketingAgentSignOn
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 9
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketingAgentSignOn = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: Contains Ticketed PCC’s Country code. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $CountryCode = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Whether the ticket was issued as bulk.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $BulkTicket = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - documentation: A reference to a AirPricing.Applicable Providers 1G and 1V. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AirPricingInfoRef = null;
    /**
     * Constructor method for TicketInfo
     * @uses TicketInfo::setNumber()
     * @uses TicketInfo::setStatus()
     * @uses TicketInfo::setBookingTravelerRef()
     * @uses TicketInfo::setName()
     * @uses TicketInfo::setConjunctedTicketInfo()
     * @uses TicketInfo::setExchangedTicketInfo()
     * @uses TicketInfo::setIATANumber()
     * @uses TicketInfo::setTicketIssueDate()
     * @uses TicketInfo::setTicketingAgentSignOn()
     * @uses TicketInfo::setCountryCode()
     * @uses TicketInfo::setBulkTicket()
     * @uses TicketInfo::setAirPricingInfoRef()
     * @param string $number
     * @param string $status
     * @param string $bookingTravelerRef
     * @param \Travelport\Util\StructType\Name $name
     * @param \Travelport\Util\StructType\ConjunctedTicketInfo[] $conjunctedTicketInfo
     * @param \Travelport\Util\StructType\ExchangedTicketInfo[] $exchangedTicketInfo
     * @param string $iATANumber
     * @param string $ticketIssueDate
     * @param string $ticketingAgentSignOn
     * @param string $countryCode
     * @param bool $bulkTicket
     * @param string $airPricingInfoRef
     */
    public function __construct(string $number, string $status, string $bookingTravelerRef, ?\Travelport\Util\StructType\Name $name = null, ?array $conjunctedTicketInfo = null, ?array $exchangedTicketInfo = null, ?string $iATANumber = null, ?string $ticketIssueDate = null, ?string $ticketingAgentSignOn = null, ?string $countryCode = null, ?bool $bulkTicket = null, ?string $airPricingInfoRef = null)
    {
        $this
            ->setNumber($number)
            ->setStatus($status)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setName($name)
            ->setConjunctedTicketInfo($conjunctedTicketInfo)
            ->setExchangedTicketInfo($exchangedTicketInfo)
            ->setIATANumber($iATANumber)
            ->setTicketIssueDate($ticketIssueDate)
            ->setTicketingAgentSignOn($ticketingAgentSignOn)
            ->setCountryCode($countryCode)
            ->setBulkTicket($bulkTicket)
            ->setAirPricingInfoRef($airPricingInfoRef);
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
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setNumber(string $number): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Travelport\Util\EnumType\TypeTicketStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeTicketStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeTicketStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeTicketStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Travelport\Util\EnumType\TypeTicketStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string
     */
    public function getBookingTravelerRef(): string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Util\StructType\Name|null
     */
    public function getName(): ?\Travelport\Util\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Util\StructType\Name $name
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setName(?\Travelport\Util\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get ConjunctedTicketInfo value
     * @return \Travelport\Util\StructType\ConjunctedTicketInfo[]
     */
    public function getConjunctedTicketInfo(): ?array
    {
        return $this->ConjunctedTicketInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setConjunctedTicketInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConjunctedTicketInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConjunctedTicketInfoForArrayConstraintFromSetConjunctedTicketInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketInfoConjunctedTicketInfoItem) {
            // validation for constraint: itemType
            if (!$ticketInfoConjunctedTicketInfoItem instanceof \Travelport\Util\StructType\ConjunctedTicketInfo) {
                $invalidValues[] = is_object($ticketInfoConjunctedTicketInfoItem) ? get_class($ticketInfoConjunctedTicketInfoItem) : sprintf('%s(%s)', gettype($ticketInfoConjunctedTicketInfoItem), var_export($ticketInfoConjunctedTicketInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConjunctedTicketInfo property can only contain items of type \Travelport\Util\StructType\ConjunctedTicketInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ConjunctedTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ConjunctedTicketInfo[] $conjunctedTicketInfo
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setConjunctedTicketInfo(?array $conjunctedTicketInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($conjunctedTicketInfoArrayErrorMessage = self::validateConjunctedTicketInfoForArrayConstraintFromSetConjunctedTicketInfo($conjunctedTicketInfo))) {
            throw new InvalidArgumentException($conjunctedTicketInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($conjunctedTicketInfo) && count($conjunctedTicketInfo) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($conjunctedTicketInfo)), __LINE__);
        }
        $this->ConjunctedTicketInfo = $conjunctedTicketInfo;
        
        return $this;
    }
    /**
     * Add item to ConjunctedTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ConjunctedTicketInfo $item
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function addToConjunctedTicketInfo(\Travelport\Util\StructType\ConjunctedTicketInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ConjunctedTicketInfo) {
            throw new InvalidArgumentException(sprintf('The ConjunctedTicketInfo property can only contain items of type \Travelport\Util\StructType\ConjunctedTicketInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->ConjunctedTicketInfo) && count($this->ConjunctedTicketInfo) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->ConjunctedTicketInfo)), __LINE__);
        }
        $this->ConjunctedTicketInfo[] = $item;
        
        return $this;
    }
    /**
     * Get ExchangedTicketInfo value
     * @return \Travelport\Util\StructType\ExchangedTicketInfo[]
     */
    public function getExchangedTicketInfo(): ?array
    {
        return $this->ExchangedTicketInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExchangedTicketInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExchangedTicketInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExchangedTicketInfoForArrayConstraintFromSetExchangedTicketInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketInfoExchangedTicketInfoItem) {
            // validation for constraint: itemType
            if (!$ticketInfoExchangedTicketInfoItem instanceof \Travelport\Util\StructType\ExchangedTicketInfo) {
                $invalidValues[] = is_object($ticketInfoExchangedTicketInfoItem) ? get_class($ticketInfoExchangedTicketInfoItem) : sprintf('%s(%s)', gettype($ticketInfoExchangedTicketInfoItem), var_export($ticketInfoExchangedTicketInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExchangedTicketInfo property can only contain items of type \Travelport\Util\StructType\ExchangedTicketInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExchangedTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ExchangedTicketInfo[] $exchangedTicketInfo
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setExchangedTicketInfo(?array $exchangedTicketInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($exchangedTicketInfoArrayErrorMessage = self::validateExchangedTicketInfoForArrayConstraintFromSetExchangedTicketInfo($exchangedTicketInfo))) {
            throw new InvalidArgumentException($exchangedTicketInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($exchangedTicketInfo) && count($exchangedTicketInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($exchangedTicketInfo)), __LINE__);
        }
        $this->ExchangedTicketInfo = $exchangedTicketInfo;
        
        return $this;
    }
    /**
     * Add item to ExchangedTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ExchangedTicketInfo $item
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function addToExchangedTicketInfo(\Travelport\Util\StructType\ExchangedTicketInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ExchangedTicketInfo) {
            throw new InvalidArgumentException(sprintf('The ExchangedTicketInfo property can only contain items of type \Travelport\Util\StructType\ExchangedTicketInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ExchangedTicketInfo) && count($this->ExchangedTicketInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ExchangedTicketInfo)), __LINE__);
        }
        $this->ExchangedTicketInfo[] = $item;
        
        return $this;
    }
    /**
     * Get IATANumber value
     * @return string|null
     */
    public function getIATANumber(): ?string
    {
        return $this->IATANumber;
    }
    /**
     * Set IATANumber value
     * @param string $iATANumber
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setIATANumber(?string $iATANumber = null): self
    {
        // validation for constraint: string
        if (!is_null($iATANumber) && !is_string($iATANumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iATANumber, true), gettype($iATANumber)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($iATANumber) && mb_strlen((string) $iATANumber) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $iATANumber)), __LINE__);
        }
        $this->IATANumber = $iATANumber;
        
        return $this;
    }
    /**
     * Get TicketIssueDate value
     * @return string|null
     */
    public function getTicketIssueDate(): ?string
    {
        return $this->TicketIssueDate;
    }
    /**
     * Set TicketIssueDate value
     * @param string $ticketIssueDate
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setTicketIssueDate(?string $ticketIssueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketIssueDate) && !is_string($ticketIssueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketIssueDate, true), gettype($ticketIssueDate)), __LINE__);
        }
        $this->TicketIssueDate = $ticketIssueDate;
        
        return $this;
    }
    /**
     * Get TicketingAgentSignOn value
     * @return string|null
     */
    public function getTicketingAgentSignOn(): ?string
    {
        return $this->TicketingAgentSignOn;
    }
    /**
     * Set TicketingAgentSignOn value
     * @param string $ticketingAgentSignOn
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setTicketingAgentSignOn(?string $ticketingAgentSignOn = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingAgentSignOn) && !is_string($ticketingAgentSignOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingAgentSignOn, true), gettype($ticketingAgentSignOn)), __LINE__);
        }
        // validation for constraint: maxLength(9)
        if (!is_null($ticketingAgentSignOn) && mb_strlen((string) $ticketingAgentSignOn) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 9', mb_strlen((string) $ticketingAgentSignOn)), __LINE__);
        }
        $this->TicketingAgentSignOn = $ticketingAgentSignOn;
        
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($countryCode) && mb_strlen((string) $countryCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get BulkTicket value
     * @return bool|null
     */
    public function getBulkTicket(): ?bool
    {
        return $this->BulkTicket;
    }
    /**
     * Set BulkTicket value
     * @param bool $bulkTicket
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setBulkTicket(?bool $bulkTicket = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bulkTicket) && !is_bool($bulkTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bulkTicket, true), gettype($bulkTicket)), __LINE__);
        }
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return string|null
     */
    public function getAirPricingInfoRef(): ?string
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param string $airPricingInfoRef
     * @return \Travelport\Util\StructType\TicketInfo
     */
    public function setAirPricingInfoRef(?string $airPricingInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($airPricingInfoRef) && !is_string($airPricingInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airPricingInfoRef, true), gettype($airPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
}
