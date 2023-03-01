<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirAvailInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Matches class of service information with availability counts. Only provided on search results.
 * @subpackage Structs
 */
class AirAvailInfo extends AbstractStructBase
{
    /**
     * The BookingCodeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingCodeInfo
     * @var \Travelport\UniversalRecord\StructType\BookingCodeInfo[]
     */
    public ?array $BookingCodeInfo = null;
    /**
     * The FareTokenInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FareTokenInfo[]
     */
    public ?array $FareTokenInfo = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $HostTokenRef = null;
    /**
     * Constructor method for AirAvailInfo
     * @uses AirAvailInfo::setBookingCodeInfo()
     * @uses AirAvailInfo::setFareTokenInfo()
     * @uses AirAvailInfo::setProviderCode()
     * @uses AirAvailInfo::setHostTokenRef()
     * @param \Travelport\UniversalRecord\StructType\BookingCodeInfo[] $bookingCodeInfo
     * @param \Travelport\UniversalRecord\StructType\FareTokenInfo[] $fareTokenInfo
     * @param string $providerCode
     * @param string $hostTokenRef
     */
    public function __construct(?array $bookingCodeInfo = null, ?array $fareTokenInfo = null, ?string $providerCode = null, ?string $hostTokenRef = null)
    {
        $this
            ->setBookingCodeInfo($bookingCodeInfo)
            ->setFareTokenInfo($fareTokenInfo)
            ->setProviderCode($providerCode)
            ->setHostTokenRef($hostTokenRef);
    }
    /**
     * Get BookingCodeInfo value
     * @return \Travelport\UniversalRecord\StructType\BookingCodeInfo[]
     */
    public function getBookingCodeInfo(): ?array
    {
        return $this->BookingCodeInfo;
    }
    /**
     * Set BookingCodeInfo value
     * @param \Travelport\UniversalRecord\StructType\BookingCodeInfo[] $bookingCodeInfo
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function setBookingCodeInfo(?array $bookingCodeInfo = null): self
    {
        $this->BookingCodeInfo = $bookingCodeInfo;
        
        return $this;
    }
    /**
     * Add item to BookingCodeInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingCodeInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function addToBookingCodeInfo(\Travelport\UniversalRecord\StructType\BookingCodeInfo $item): self
    {
        $this->BookingCodeInfo[] = $item;
        
        return $this;
    }
    /**
     * Get FareTokenInfo value
     * @return \Travelport\UniversalRecord\StructType\FareTokenInfo[]
     */
    public function getFareTokenInfo(): ?array
    {
        return $this->FareTokenInfo;
    }
    /**
     * Set FareTokenInfo value
     * @param \Travelport\UniversalRecord\StructType\FareTokenInfo[] $fareTokenInfo
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function setFareTokenInfo(?array $fareTokenInfo = null): self
    {
        $this->FareTokenInfo = $fareTokenInfo;
        
        return $this;
    }
    /**
     * Add item to FareTokenInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareTokenInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function addToFareTokenInfo(\Travelport\UniversalRecord\StructType\FareTokenInfo $item): self
    {
        $this->FareTokenInfo[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get HostTokenRef value
     * @return string|null
     */
    public function getHostTokenRef(): ?string
    {
        return $this->HostTokenRef;
    }
    /**
     * Set HostTokenRef value
     * @param string $hostTokenRef
     * @return \Travelport\UniversalRecord\StructType\AirAvailInfo
     */
    public function setHostTokenRef(?string $hostTokenRef = null): self
    {
        $this->HostTokenRef = $hostTokenRef;
        
        return $this;
    }
}
