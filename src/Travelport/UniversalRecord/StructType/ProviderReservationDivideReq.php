<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationDivideReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to split a PNR containing atleast 1 air reservation .
 * @subpackage Structs
 */
class ProviderReservationDivideReq extends BaseReq
{
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public array $BookingTravelerRef;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Represents a valid Universal Record locator code | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $UniversalRecordLocatorCode;
    /**
     * The CreateChildUniversalRecord
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $CreateChildUniversalRecord;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * Constructor method for ProviderReservationDivideReq
     * @uses ProviderReservationDivideReq::setBookingTravelerRef()
     * @uses ProviderReservationDivideReq::setUniversalRecordLocatorCode()
     * @uses ProviderReservationDivideReq::setCreateChildUniversalRecord()
     * @uses ProviderReservationDivideReq::setProviderCode()
     * @uses ProviderReservationDivideReq::setProviderLocatorCode()
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param string $universalRecordLocatorCode
     * @param string $createChildUniversalRecord
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(array $bookingTravelerRef, string $universalRecordLocatorCode, string $createChildUniversalRecord, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setCreateChildUniversalRecord($createChildUniversalRecord)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDivideReq
     */
    public function setBookingTravelerRef(array $bookingTravelerRef): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDivideReq
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string
     */
    public function getUniversalRecordLocatorCode(): string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDivideReq
     */
    public function setUniversalRecordLocatorCode(string $universalRecordLocatorCode): self
    {
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
        return $this;
    }
    /**
     * Get CreateChildUniversalRecord value
     * @return string
     */
    public function getCreateChildUniversalRecord(): string
    {
        return $this->CreateChildUniversalRecord;
    }
    /**
     * Set CreateChildUniversalRecord value
     * @param string $createChildUniversalRecord
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDivideReq
     */
    public function setCreateChildUniversalRecord(string $createChildUniversalRecord): self
    {
        $this->CreateChildUniversalRecord = $createChildUniversalRecord;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDivideReq
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDivideReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
