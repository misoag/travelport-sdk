<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides controls and switches for the Exchange process
 * @subpackage Structs
 */
class AirExchangeModifiers extends AbstractStructBase
{
    /**
     * The ContractCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\ContractCodes|null
     */
    protected ?\Travelport\Util\StructType\ContractCodes $ContractCodes = null;
    /**
     * The BookingDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingDate = null;
    /**
     * The TicketingDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketingDate = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $AccountCode = null;
    /**
     * The TicketDesignator
     * Meta information extracted from the WSDL
     * - documentation: Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketDesignator = null;
    /**
     * The AllowPenaltyFares
     * Meta information extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AllowPenaltyFares = null;
    /**
     * The PrivateFaresOnly
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PrivateFaresOnly = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Which UniversalRecord should this new reservation be applied to. If blank, then a new one is created. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $UniversalRecordLocatorCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Which Provider reservation does this reservation get added to. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: To be used with ProviderLocatorCode, which host the reservation being added to belongs to.
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * Constructor method for AirExchangeModifiers
     * @uses AirExchangeModifiers::setContractCodes()
     * @uses AirExchangeModifiers::setBookingDate()
     * @uses AirExchangeModifiers::setTicketingDate()
     * @uses AirExchangeModifiers::setAccountCode()
     * @uses AirExchangeModifiers::setTicketDesignator()
     * @uses AirExchangeModifiers::setAllowPenaltyFares()
     * @uses AirExchangeModifiers::setPrivateFaresOnly()
     * @uses AirExchangeModifiers::setUniversalRecordLocatorCode()
     * @uses AirExchangeModifiers::setProviderLocatorCode()
     * @uses AirExchangeModifiers::setProviderCode()
     * @param \Travelport\Util\StructType\ContractCodes $contractCodes
     * @param string $bookingDate
     * @param string $ticketingDate
     * @param string $accountCode
     * @param string $ticketDesignator
     * @param bool $allowPenaltyFares
     * @param bool $privateFaresOnly
     * @param string $universalRecordLocatorCode
     * @param string $providerLocatorCode
     * @param string $providerCode
     */
    public function __construct(?\Travelport\Util\StructType\ContractCodes $contractCodes = null, ?string $bookingDate = null, ?string $ticketingDate = null, ?string $accountCode = null, ?string $ticketDesignator = null, ?bool $allowPenaltyFares = true, ?bool $privateFaresOnly = false, ?string $universalRecordLocatorCode = null, ?string $providerLocatorCode = null, ?string $providerCode = null)
    {
        $this
            ->setContractCodes($contractCodes)
            ->setBookingDate($bookingDate)
            ->setTicketingDate($ticketingDate)
            ->setAccountCode($accountCode)
            ->setTicketDesignator($ticketDesignator)
            ->setAllowPenaltyFares($allowPenaltyFares)
            ->setPrivateFaresOnly($privateFaresOnly)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setProviderCode($providerCode);
    }
    /**
     * Get ContractCodes value
     * @return \Travelport\Util\StructType\ContractCodes|null
     */
    public function getContractCodes(): ?\Travelport\Util\StructType\ContractCodes
    {
        return $this->ContractCodes;
    }
    /**
     * Set ContractCodes value
     * @param \Travelport\Util\StructType\ContractCodes $contractCodes
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setContractCodes(?\Travelport\Util\StructType\ContractCodes $contractCodes = null): self
    {
        $this->ContractCodes = $contractCodes;
        
        return $this;
    }
    /**
     * Get BookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->BookingDate;
    }
    /**
     * Set BookingDate value
     * @param string $bookingDate
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->BookingDate = $bookingDate;
        
        return $this;
    }
    /**
     * Get TicketingDate value
     * @return string|null
     */
    public function getTicketingDate(): ?string
    {
        return $this->TicketingDate;
    }
    /**
     * Set TicketingDate value
     * @param string $ticketingDate
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setTicketingDate(?string $ticketingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingDate) && !is_string($ticketingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingDate, true), gettype($ticketingDate)), __LINE__);
        }
        $this->TicketingDate = $ticketingDate;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode(): ?string
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCode, true), gettype($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Get TicketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->TicketDesignator;
    }
    /**
     * Set TicketDesignator value
     * @param string $ticketDesignator
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($ticketDesignator) && mb_strlen((string) $ticketDesignator) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $ticketDesignator)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($ticketDesignator) && mb_strlen((string) $ticketDesignator) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $ticketDesignator)), __LINE__);
        }
        $this->TicketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Get AllowPenaltyFares value
     * @return bool|null
     */
    public function getAllowPenaltyFares(): ?bool
    {
        return $this->AllowPenaltyFares;
    }
    /**
     * Set AllowPenaltyFares value
     * @param bool $allowPenaltyFares
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setAllowPenaltyFares(?bool $allowPenaltyFares = true): self
    {
        // validation for constraint: boolean
        if (!is_null($allowPenaltyFares) && !is_bool($allowPenaltyFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowPenaltyFares, true), gettype($allowPenaltyFares)), __LINE__);
        }
        $this->AllowPenaltyFares = $allowPenaltyFares;
        
        return $this;
    }
    /**
     * Get PrivateFaresOnly value
     * @return bool|null
     */
    public function getPrivateFaresOnly(): ?bool
    {
        return $this->PrivateFaresOnly;
    }
    /**
     * Set PrivateFaresOnly value
     * @param bool $privateFaresOnly
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setPrivateFaresOnly(?bool $privateFaresOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($privateFaresOnly) && !is_bool($privateFaresOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($privateFaresOnly, true), gettype($privateFaresOnly)), __LINE__);
        }
        $this->PrivateFaresOnly = $privateFaresOnly;
        
        return $this;
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string|null
     */
    public function getUniversalRecordLocatorCode(): ?string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($universalRecordLocatorCode) && !is_string($universalRecordLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($universalRecordLocatorCode, true), gettype($universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($universalRecordLocatorCode) && mb_strlen((string) $universalRecordLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $universalRecordLocatorCode)), __LINE__);
        }
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Util\StructType\AirExchangeModifiers
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
}
