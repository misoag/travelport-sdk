<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BundledService StructType
 * Meta information extracted from the WSDL
 * - documentation: Displays the services bundled together
 * @subpackage Structs
 */
class BundledService extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: Carrier the service is applicable. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $Carrier = null;
    /**
     * The CarrierSubCode
     * Meta information extracted from the WSDL
     * - documentation: Carrier sub code. True means the carrier used their own sub code. False means the carrier used an ATPCO sub code
     * - use: optional
     * @var bool|null
     */
    public ?bool $CarrierSubCode = null;
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: The type of service or what the service is used for, e.g. F type is flight type, meaning the service is used on a flight
     * - use: optional
     * @var string|null
     */
    public ?string $ServiceType = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - documentation: The sub code of the service, e.g. OAA for Pre paid baggage
     * - use: optional
     * @var string|null
     */
    public ?string $ServiceSubCode = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the bundled service.
     * - use: optional
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The Booking
     * Meta information extracted from the WSDL
     * - base: typeBooking
     * - use: optional
     * @var string|null
     */
    public ?string $Booking = null;
    /**
     * The Occurrence
     * Meta information extracted from the WSDL
     * - documentation: How many of the service are included in the bundled service.
     * - use: optional
     * @var int|null
     */
    public ?int $Occurrence = null;
    /**
     * Constructor method for BundledService
     * @uses BundledService::setCarrier()
     * @uses BundledService::setCarrierSubCode()
     * @uses BundledService::setServiceType()
     * @uses BundledService::setServiceSubCode()
     * @uses BundledService::setName()
     * @uses BundledService::setBooking()
     * @uses BundledService::setOccurrence()
     * @param string $carrier
     * @param bool $carrierSubCode
     * @param string $serviceType
     * @param string $serviceSubCode
     * @param string $name
     * @param string $booking
     * @param int $occurrence
     */
    public function __construct(?string $carrier = null, ?bool $carrierSubCode = null, ?string $serviceType = null, ?string $serviceSubCode = null, ?string $name = null, ?string $booking = null, ?int $occurrence = null)
    {
        $this
            ->setCarrier($carrier)
            ->setCarrierSubCode($carrierSubCode)
            ->setServiceType($serviceType)
            ->setServiceSubCode($serviceSubCode)
            ->setName($name)
            ->setBooking($booking)
            ->setOccurrence($occurrence);
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\UniversalRecord\StructType\BundledService
     */
    public function setCarrier(?string $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get CarrierSubCode value
     * @return bool|null
     */
    public function getCarrierSubCode(): ?bool
    {
        return $this->CarrierSubCode;
    }
    /**
     * Set CarrierSubCode value
     * @param bool $carrierSubCode
     * @return \Travelport\UniversalRecord\StructType\BundledService
     */
    public function setCarrierSubCode(?bool $carrierSubCode = null): self
    {
        $this->CarrierSubCode = $carrierSubCode;
        
        return $this;
    }
    /**
     * Get ServiceType value
     * @return string|null
     */
    public function getServiceType(): ?string
    {
        return $this->ServiceType;
    }
    /**
     * Set ServiceType value
     * @param string $serviceType
     * @return \Travelport\UniversalRecord\StructType\BundledService
     */
    public function setServiceType(?string $serviceType = null): self
    {
        $this->ServiceType = $serviceType;
        
        return $this;
    }
    /**
     * Get ServiceSubCode value
     * @return string|null
     */
    public function getServiceSubCode(): ?string
    {
        return $this->ServiceSubCode;
    }
    /**
     * Set ServiceSubCode value
     * @param string $serviceSubCode
     * @return \Travelport\UniversalRecord\StructType\BundledService
     */
    public function setServiceSubCode(?string $serviceSubCode = null): self
    {
        $this->ServiceSubCode = $serviceSubCode;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\BundledService
     */
    public function setName(?string $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Booking value
     * @return string|null
     */
    public function getBooking(): ?string
    {
        return $this->Booking;
    }
    /**
     * Set Booking value
     * @param string $booking
     * @return \Travelport\UniversalRecord\StructType\BundledService
     */
    public function setBooking(?string $booking = null): self
    {
        $this->Booking = $booking;
        
        return $this;
    }
    /**
     * Get Occurrence value
     * @return int|null
     */
    public function getOccurrence(): ?int
    {
        return $this->Occurrence;
    }
    /**
     * Set Occurrence value
     * @param int $occurrence
     * @return \Travelport\UniversalRecord\StructType\BundledService
     */
    public function setOccurrence(?int $occurrence = null): self
    {
        $this->Occurrence = $occurrence;
        
        return $this;
    }
}
