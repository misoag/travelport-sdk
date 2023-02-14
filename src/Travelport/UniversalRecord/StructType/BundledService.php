<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $Carrier = null;
    /**
     * The CarrierSubCode
     * Meta information extracted from the WSDL
     * - documentation: Carrier sub code. True means the carrier used their own sub code. False means the carrier used an ATPCO sub code
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CarrierSubCode = null;
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: The type of service or what the service is used for, e.g. F type is flight type, meaning the service is used on a flight
     * - use: optional
     * @var string|null
     */
    protected ?string $ServiceType = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - documentation: The sub code of the service, e.g. OAA for Pre paid baggage
     * - use: optional
     * @var string|null
     */
    protected ?string $ServiceSubCode = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the bundled service.
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Booking
     * Meta information extracted from the WSDL
     * - base: typeBooking
     * - use: optional
     * @var string|null
     */
    protected ?string $Booking = null;
    /**
     * The Occurrence
     * Meta information extracted from the WSDL
     * - documentation: How many of the service are included in the bundled service.
     * - use: optional
     * @var int|null
     */
    protected ?int $Occurrence = null;
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
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($carrierSubCode) && !is_bool($carrierSubCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($carrierSubCode, true), gettype($carrierSubCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($serviceType) && !is_string($serviceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceType, true), gettype($serviceType)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($serviceSubCode) && !is_string($serviceSubCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceSubCode, true), gettype($serviceSubCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($booking) && !is_string($booking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($booking, true), gettype($booking)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($occurrence) && !(is_int($occurrence) || ctype_digit($occurrence))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($occurrence, true), gettype($occurrence)), __LINE__);
        }
        $this->Occurrence = $occurrence;
        
        return $this;
    }
}
