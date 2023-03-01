<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Used by CreateReservationReq for passing in elements normally found post-booking
 * @subpackage Structs
 */
class PassiveInfo extends AbstractStructBase
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $TicketNumber = null;
    /**
     * The ConfirmationNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $ConfirmationNumber = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Commission
     * @var \Travelport\Air\StructType\Commission|null
     */
    public ?\Travelport\Air\StructType\Commission $Commission = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * The SupplierLocatorCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierLocatorCode = null;
    /**
     * Constructor method for PassiveInfo
     * @uses PassiveInfo::setTicketNumber()
     * @uses PassiveInfo::setConfirmationNumber()
     * @uses PassiveInfo::setCommission()
     * @uses PassiveInfo::setProviderCode()
     * @uses PassiveInfo::setProviderLocatorCode()
     * @uses PassiveInfo::setSupplierCode()
     * @uses PassiveInfo::setSupplierLocatorCode()
     * @param string[] $ticketNumber
     * @param string[] $confirmationNumber
     * @param \Travelport\Air\StructType\Commission $commission
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $supplierCode
     * @param string $supplierLocatorCode
     */
    public function __construct(?array $ticketNumber = null, ?array $confirmationNumber = null, ?\Travelport\Air\StructType\Commission $commission = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $supplierCode = null, ?string $supplierLocatorCode = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setConfirmationNumber($confirmationNumber)
            ->setCommission($commission)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setSupplierCode($supplierCode)
            ->setSupplierLocatorCode($supplierLocatorCode);
    }
    /**
     * Get TicketNumber value
     * @return string[]
     */
    public function getTicketNumber(): ?array
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string[] $ticketNumber
     * @return \Travelport\Air\StructType\PassiveInfo
     */
    public function setTicketNumber(?array $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Add item to TicketNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\PassiveInfo
     */
    public function addToTicketNumber(string $item): self
    {
        $this->TicketNumber[] = $item;
        
        return $this;
    }
    /**
     * Get ConfirmationNumber value
     * @return string[]
     */
    public function getConfirmationNumber(): ?array
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string[] $confirmationNumber
     * @return \Travelport\Air\StructType\PassiveInfo
     */
    public function setConfirmationNumber(?array $confirmationNumber = null): self
    {
        $this->ConfirmationNumber = $confirmationNumber;
        
        return $this;
    }
    /**
     * Add item to ConfirmationNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\PassiveInfo
     */
    public function addToConfirmationNumber(string $item): self
    {
        $this->ConfirmationNumber[] = $item;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Air\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\Air\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Air\StructType\Commission $commission
     * @return \Travelport\Air\StructType\PassiveInfo
     */
    public function setCommission(?\Travelport\Air\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
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
     * @return \Travelport\Air\StructType\PassiveInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\Air\StructType\PassiveInfo
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
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
     * @return \Travelport\Air\StructType\PassiveInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get SupplierLocatorCode value
     * @return string|null
     */
    public function getSupplierLocatorCode(): ?string
    {
        return $this->SupplierLocatorCode;
    }
    /**
     * Set SupplierLocatorCode value
     * @param string $supplierLocatorCode
     * @return \Travelport\Air\StructType\PassiveInfo
     */
    public function setSupplierLocatorCode(?string $supplierLocatorCode = null): self
    {
        $this->SupplierLocatorCode = $supplierLocatorCode;
        
        return $this;
    }
}
