<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRemarkWithTravelerRef StructType
 * @subpackage Structs
 */
class TypeRemarkWithTravelerRef extends AbstractStructBase
{
    /**
     * The RemarkData
     * Meta information extracted from the WSDL
     * - documentation: Actual remarks data.
     * @var string|null
     */
    public ?string $RemarkData = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to Booking Traveler. | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the provider for which this element is used | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * Constructor method for typeRemarkWithTravelerRef
     * @uses TypeRemarkWithTravelerRef::setRemarkData()
     * @uses TypeRemarkWithTravelerRef::setBookingTravelerRef()
     * @uses TypeRemarkWithTravelerRef::setProviderReservationInfoRef()
     * @uses TypeRemarkWithTravelerRef::setProviderCode()
     * @param string $remarkData
     * @param string[] $bookingTravelerRef
     * @param string $providerReservationInfoRef
     * @param string $providerCode
     */
    public function __construct(?string $remarkData = null, ?array $bookingTravelerRef = null, ?string $providerReservationInfoRef = null, ?string $providerCode = null)
    {
        $this
            ->setRemarkData($remarkData)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderCode($providerCode);
    }
    /**
     * Get RemarkData value
     * @return string|null
     */
    public function getRemarkData(): ?string
    {
        return $this->RemarkData;
    }
    /**
     * Set RemarkData value
     * @param string $remarkData
     * @return \Travelport\Air\StructType\TypeRemarkWithTravelerRef
     */
    public function setRemarkData(?string $remarkData = null): self
    {
        $this->RemarkData = $remarkData;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string[] $bookingTravelerRef
     * @return \Travelport\Air\StructType\TypeRemarkWithTravelerRef
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\TypeRemarkWithTravelerRef
     */
    public function addToBookingTravelerRef(string $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\Air\StructType\TypeRemarkWithTravelerRef
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
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
     * @return \Travelport\Air\StructType\TypeRemarkWithTravelerRef
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
}
