<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConjunctedTicketInfo StructType
 * @subpackage Structs
 */
class ConjunctedTicketInfo extends AbstractStructBase
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
     * Constructor method for ConjunctedTicketInfo
     * @uses ConjunctedTicketInfo::setNumber()
     * @uses ConjunctedTicketInfo::setStatus()
     * @uses ConjunctedTicketInfo::setIATANumber()
     * @uses ConjunctedTicketInfo::setTicketIssueDate()
     * @uses ConjunctedTicketInfo::setTicketingAgentSignOn()
     * @uses ConjunctedTicketInfo::setCountryCode()
     * @param string $number
     * @param string $status
     * @param string $iATANumber
     * @param string $ticketIssueDate
     * @param string $ticketingAgentSignOn
     * @param string $countryCode
     */
    public function __construct(string $number, string $status, ?string $iATANumber = null, ?string $ticketIssueDate = null, ?string $ticketingAgentSignOn = null, ?string $countryCode = null)
    {
        $this
            ->setNumber($number)
            ->setStatus($status)
            ->setIATANumber($iATANumber)
            ->setTicketIssueDate($ticketIssueDate)
            ->setTicketingAgentSignOn($ticketingAgentSignOn)
            ->setCountryCode($countryCode);
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
     * @return \Travelport\Util\StructType\ConjunctedTicketInfo
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
     * @return \Travelport\Util\StructType\ConjunctedTicketInfo
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
     * @return \Travelport\Util\StructType\ConjunctedTicketInfo
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
     * @return \Travelport\Util\StructType\ConjunctedTicketInfo
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
     * @return \Travelport\Util\StructType\ConjunctedTicketInfo
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
     * @return \Travelport\Util\StructType\ConjunctedTicketInfo
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
}
