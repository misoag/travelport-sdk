<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCOInformation StructType
 * @subpackage Structs
 */
class MCOInformation extends AbstractStructBase
{
    /**
     * The PassengerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassengerInfo
     * @var \Travelport\Hotel\StructType\PassengerInfo[]
     */
    public ?array $PassengerInfo = null;
    /**
     * The MCONumber
     * Meta information extracted from the WSDL
     * - documentation: The unique MCO number
     * - use: optional
     * @var string|null
     */
    public ?string $MCONumber = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Current status of the MCO
     * - use: optional
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The MCOType
     * Meta information extracted from the WSDL
     * - documentation: The Type of MCO. Once of Agency Fee, Airline Service Fee, or Residual value from an Exchange.
     * - use: optional
     * @var string|null
     */
    public ?string $MCOType = null;
    /**
     * Constructor method for MCOInformation
     * @uses MCOInformation::setPassengerInfo()
     * @uses MCOInformation::setMCONumber()
     * @uses MCOInformation::setStatus()
     * @uses MCOInformation::setMCOType()
     * @param \Travelport\Hotel\StructType\PassengerInfo[] $passengerInfo
     * @param string $mCONumber
     * @param string $status
     * @param string $mCOType
     */
    public function __construct(?array $passengerInfo = null, ?string $mCONumber = null, ?string $status = null, ?string $mCOType = null)
    {
        $this
            ->setPassengerInfo($passengerInfo)
            ->setMCONumber($mCONumber)
            ->setStatus($status)
            ->setMCOType($mCOType);
    }
    /**
     * Get PassengerInfo value
     * @return \Travelport\Hotel\StructType\PassengerInfo[]
     */
    public function getPassengerInfo(): ?array
    {
        return $this->PassengerInfo;
    }
    /**
     * Set PassengerInfo value
     * @param \Travelport\Hotel\StructType\PassengerInfo[] $passengerInfo
     * @return \Travelport\Hotel\StructType\MCOInformation
     */
    public function setPassengerInfo(?array $passengerInfo = null): self
    {
        $this->PassengerInfo = $passengerInfo;
        
        return $this;
    }
    /**
     * Add item to PassengerInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PassengerInfo $item
     * @return \Travelport\Hotel\StructType\MCOInformation
     */
    public function addToPassengerInfo(\Travelport\Hotel\StructType\PassengerInfo $item): self
    {
        $this->PassengerInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MCONumber value
     * @return string|null
     */
    public function getMCONumber(): ?string
    {
        return $this->MCONumber;
    }
    /**
     * Set MCONumber value
     * @param string $mCONumber
     * @return \Travelport\Hotel\StructType\MCOInformation
     */
    public function setMCONumber(?string $mCONumber = null): self
    {
        $this->MCONumber = $mCONumber;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Hotel\StructType\MCOInformation
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get MCOType value
     * @return string|null
     */
    public function getMCOType(): ?string
    {
        return $this->MCOType;
    }
    /**
     * Set MCOType value
     * @param string $mCOType
     * @return \Travelport\Hotel\StructType\MCOInformation
     */
    public function setMCOType(?string $mCOType = null): self
    {
        $this->MCOType = $mCOType;
        
        return $this;
    }
}
