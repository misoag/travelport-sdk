<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRDivideInfo StructType
 * @subpackage Structs
 */
class PNRDivideInfo extends AbstractStructBase
{
    /**
     * The BookingTravelerName
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: common:BookingTravelerName
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerName[]
     */
    public array $BookingTravelerName;
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
     * Constructor method for PNRDivideInfo
     * @uses PNRDivideInfo::setBookingTravelerName()
     * @uses PNRDivideInfo::setProviderCode()
     * @uses PNRDivideInfo::setProviderLocatorCode()
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerName[] $bookingTravelerName
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(array $bookingTravelerName, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setBookingTravelerName($bookingTravelerName)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
    }
    /**
     * Get BookingTravelerName value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerName[]
     */
    public function getBookingTravelerName(): array
    {
        return $this->BookingTravelerName;
    }
    /**
     * Set BookingTravelerName value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerName[] $bookingTravelerName
     * @return \Travelport\UniversalRecord\StructType\PNRDivideInfo
     */
    public function setBookingTravelerName(array $bookingTravelerName): self
    {
        $this->BookingTravelerName = $bookingTravelerName;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerName value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerName $item
     * @return \Travelport\UniversalRecord\StructType\PNRDivideInfo
     */
    public function addToBookingTravelerName(\Travelport\UniversalRecord\StructType\BookingTravelerName $item): self
    {
        $this->BookingTravelerName[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\PNRDivideInfo
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
     * @return \Travelport\UniversalRecord\StructType\PNRDivideInfo
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
