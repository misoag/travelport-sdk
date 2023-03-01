<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationStatus StructType
 * Meta information extracted from the WSDL
 * - documentation: Status of the cancellation for this provider reservation.
 * @subpackage Structs
 */
class ProviderReservationStatus extends AbstractStructBase
{
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was created.
     * - use: required
     * @var string
     */
    public string $CreateDate;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was last modified for any reason.
     * - use: required
     * @var string
     */
    public string $ModifiedDate;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the entity housing the actual reservation in the event this is a passive one. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Locator Code of the actual reservation in the event this is a passive reservation. | A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - use: required
     * @var string
     */
    public string $LocatorCode;
    /**
     * The Cancelled
     * Meta information extracted from the WSDL
     * - documentation: Will be true if the reservation was successfuly cancelled on the provider system.
     * - use: required
     * @var bool
     */
    public bool $Cancelled;
    /**
     * The CancelInfo
     * Meta information extracted from the WSDL
     * - documentation: If the provider reservation was not successfully cancelled or cancelled with warnings the provider system might provides some textual information describing the reason.
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeResultMessage $CancelInfo = null;
    /**
     * Constructor method for ProviderReservationStatus
     * @uses ProviderReservationStatus::setCreateDate()
     * @uses ProviderReservationStatus::setModifiedDate()
     * @uses ProviderReservationStatus::setProviderCode()
     * @uses ProviderReservationStatus::setLocatorCode()
     * @uses ProviderReservationStatus::setCancelled()
     * @uses ProviderReservationStatus::setCancelInfo()
     * @param string $createDate
     * @param string $modifiedDate
     * @param string $providerCode
     * @param string $locatorCode
     * @param bool $cancelled
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $cancelInfo
     */
    public function __construct(string $createDate, string $modifiedDate, string $providerCode, string $locatorCode, bool $cancelled, ?\Travelport\UniversalRecord\StructType\TypeResultMessage $cancelInfo = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setModifiedDate($modifiedDate)
            ->setProviderCode($providerCode)
            ->setLocatorCode($locatorCode)
            ->setCancelled($cancelled)
            ->setCancelInfo($cancelInfo);
    }
    /**
     * Get CreateDate value
     * @return string
     */
    public function getCreateDate(): string
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationStatus
     */
    public function setCreateDate(string $createDate): self
    {
        $this->CreateDate = $createDate;
        
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string
     */
    public function getModifiedDate(): string
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationStatus
     */
    public function setModifiedDate(string $modifiedDate): self
    {
        $this->ModifiedDate = $modifiedDate;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationStatus
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get LocatorCode value
     * @return string
     */
    public function getLocatorCode(): string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationStatus
     */
    public function setLocatorCode(string $locatorCode): self
    {
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get Cancelled value
     * @return bool
     */
    public function getCancelled(): bool
    {
        return $this->Cancelled;
    }
    /**
     * Set Cancelled value
     * @param bool $cancelled
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationStatus
     */
    public function setCancelled(bool $cancelled): self
    {
        $this->Cancelled = $cancelled;
        
        return $this;
    }
    /**
     * Get CancelInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage|null
     */
    public function getCancelInfo(): ?\Travelport\UniversalRecord\StructType\TypeResultMessage
    {
        return $this->CancelInfo;
    }
    /**
     * Set CancelInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $cancelInfo
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationStatus
     */
    public function setCancelInfo(?\Travelport\UniversalRecord\StructType\TypeResultMessage $cancelInfo = null): self
    {
        $this->CancelInfo = $cancelInfo;
        
        return $this;
    }
}
