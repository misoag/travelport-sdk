<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingRulesFareReference StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Reference associated with the BookingRules. Containing a text container for vendor response text.
 * @subpackage Structs
 */
class BookingRulesFareReference extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
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
    public ?string $ClassOfService = null;
    /**
     * The TicketDesignatorCode
     * Meta information extracted from the WSDL
     * - documentation: Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $TicketDesignatorCode = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $AccountCode = null;
    /**
     * The UpgrageAllowed
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $UpgrageAllowed = null;
    /**
     * The UpgradeClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $UpgradeClassOfService = null;
    /**
     * Constructor method for BookingRulesFareReference
     * @uses BookingRulesFareReference::set_()
     * @uses BookingRulesFareReference::setClassOfService()
     * @uses BookingRulesFareReference::setTicketDesignatorCode()
     * @uses BookingRulesFareReference::setAccountCode()
     * @uses BookingRulesFareReference::setUpgrageAllowed()
     * @uses BookingRulesFareReference::setUpgradeClassOfService()
     * @param string $_
     * @param string $classOfService
     * @param string $ticketDesignatorCode
     * @param string $accountCode
     * @param bool $upgrageAllowed
     * @param string $upgradeClassOfService
     */
    public function __construct(?string $_ = null, ?string $classOfService = null, ?string $ticketDesignatorCode = null, ?string $accountCode = null, ?bool $upgrageAllowed = null, ?string $upgradeClassOfService = null)
    {
        $this
            ->set_($_)
            ->setClassOfService($classOfService)
            ->setTicketDesignatorCode($ticketDesignatorCode)
            ->setAccountCode($accountCode)
            ->setUpgrageAllowed($upgrageAllowed)
            ->setUpgradeClassOfService($upgradeClassOfService);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\BookingRulesFareReference
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
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
     * @return \Travelport\UniversalRecord\StructType\BookingRulesFareReference
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
    /**
     * Get TicketDesignatorCode value
     * @return string|null
     */
    public function getTicketDesignatorCode(): ?string
    {
        return $this->TicketDesignatorCode;
    }
    /**
     * Set TicketDesignatorCode value
     * @param string $ticketDesignatorCode
     * @return \Travelport\UniversalRecord\StructType\BookingRulesFareReference
     */
    public function setTicketDesignatorCode(?string $ticketDesignatorCode = null): self
    {
        $this->TicketDesignatorCode = $ticketDesignatorCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\BookingRulesFareReference
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Get UpgrageAllowed value
     * @return bool|null
     */
    public function getUpgrageAllowed(): ?bool
    {
        return $this->UpgrageAllowed;
    }
    /**
     * Set UpgrageAllowed value
     * @param bool $upgrageAllowed
     * @return \Travelport\UniversalRecord\StructType\BookingRulesFareReference
     */
    public function setUpgrageAllowed(?bool $upgrageAllowed = null): self
    {
        $this->UpgrageAllowed = $upgrageAllowed;
        
        return $this;
    }
    /**
     * Get UpgradeClassOfService value
     * @return string|null
     */
    public function getUpgradeClassOfService(): ?string
    {
        return $this->UpgradeClassOfService;
    }
    /**
     * Set UpgradeClassOfService value
     * @param string $upgradeClassOfService
     * @return \Travelport\UniversalRecord\StructType\BookingRulesFareReference
     */
    public function setUpgradeClassOfService(?string $upgradeClassOfService = null): self
    {
        $this->UpgradeClassOfService = $upgradeClassOfService;
        
        return $this;
    }
}
