<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\ContractCodes|null
     */
    public ?\Travelport\Air\StructType\ContractCodes $ContractCodes = null;
    /**
     * The BookingDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $BookingDate = null;
    /**
     * The TicketingDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TicketingDate = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $AccountCode = null;
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
    public ?string $TicketDesignator = null;
    /**
     * The AllowPenaltyFares
     * Meta information extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $AllowPenaltyFares = null;
    /**
     * The PrivateFaresOnly
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PrivateFaresOnly = null;
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
    public ?string $UniversalRecordLocatorCode = null;
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
    public ?string $ProviderLocatorCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: To be used with ProviderLocatorCode, which host the reservation being added to belongs to.
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
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
     * @param \Travelport\Air\StructType\ContractCodes $contractCodes
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
    public function __construct(?\Travelport\Air\StructType\ContractCodes $contractCodes = null, ?string $bookingDate = null, ?string $ticketingDate = null, ?string $accountCode = null, ?string $ticketDesignator = null, ?bool $allowPenaltyFares = true, ?bool $privateFaresOnly = false, ?string $universalRecordLocatorCode = null, ?string $providerLocatorCode = null, ?string $providerCode = null)
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
     * @return \Travelport\Air\StructType\ContractCodes|null
     */
    public function getContractCodes(): ?\Travelport\Air\StructType\ContractCodes
    {
        return $this->ContractCodes;
    }
    /**
     * Set ContractCodes value
     * @param \Travelport\Air\StructType\ContractCodes $contractCodes
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setContractCodes(?\Travelport\Air\StructType\ContractCodes $contractCodes = null): self
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
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
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
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setTicketingDate(?string $ticketingDate = null): self
    {
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
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setAccountCode(?string $accountCode = null): self
    {
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
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
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
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setAllowPenaltyFares(?bool $allowPenaltyFares = true): self
    {
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
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setPrivateFaresOnly(?bool $privateFaresOnly = false): self
    {
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
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
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
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
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
     * @return \Travelport\Air\StructType\AirExchangeModifiers
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
}
