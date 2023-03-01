<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Characteristic StructType
 * Meta information extracted from the WSDL
 * - documentation: Identifies the characteristics of the seat with seat type, value and description.
 * @subpackage Structs
 */
class Characteristic extends AbstractStructBase
{
    /**
     * The SeatType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $SeatType = null;
    /**
     * The SeatDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $SeatDescription = null;
    /**
     * The SeatValue
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $SeatValue = null;
    /**
     * The SeatValueDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $SeatValueDescription = null;
    /**
     * Constructor method for Characteristic
     * @uses Characteristic::setSeatType()
     * @uses Characteristic::setSeatDescription()
     * @uses Characteristic::setSeatValue()
     * @uses Characteristic::setSeatValueDescription()
     * @param string $seatType
     * @param string $seatDescription
     * @param string $seatValue
     * @param string $seatValueDescription
     */
    public function __construct(?string $seatType = null, ?string $seatDescription = null, ?string $seatValue = null, ?string $seatValueDescription = null)
    {
        $this
            ->setSeatType($seatType)
            ->setSeatDescription($seatDescription)
            ->setSeatValue($seatValue)
            ->setSeatValueDescription($seatValueDescription);
    }
    /**
     * Get SeatType value
     * @return string|null
     */
    public function getSeatType(): ?string
    {
        return $this->SeatType;
    }
    /**
     * Set SeatType value
     * @param string $seatType
     * @return \Travelport\Hotel\StructType\Characteristic
     */
    public function setSeatType(?string $seatType = null): self
    {
        $this->SeatType = $seatType;
        
        return $this;
    }
    /**
     * Get SeatDescription value
     * @return string|null
     */
    public function getSeatDescription(): ?string
    {
        return $this->SeatDescription;
    }
    /**
     * Set SeatDescription value
     * @param string $seatDescription
     * @return \Travelport\Hotel\StructType\Characteristic
     */
    public function setSeatDescription(?string $seatDescription = null): self
    {
        $this->SeatDescription = $seatDescription;
        
        return $this;
    }
    /**
     * Get SeatValue value
     * @return string|null
     */
    public function getSeatValue(): ?string
    {
        return $this->SeatValue;
    }
    /**
     * Set SeatValue value
     * @param string $seatValue
     * @return \Travelport\Hotel\StructType\Characteristic
     */
    public function setSeatValue(?string $seatValue = null): self
    {
        $this->SeatValue = $seatValue;
        
        return $this;
    }
    /**
     * Get SeatValueDescription value
     * @return string|null
     */
    public function getSeatValueDescription(): ?string
    {
        return $this->SeatValueDescription;
    }
    /**
     * Set SeatValueDescription value
     * @param string $seatValueDescription
     * @return \Travelport\Hotel\StructType\Characteristic
     */
    public function setSeatValueDescription(?string $seatValueDescription = null): self
    {
        $this->SeatValueDescription = $seatValueDescription;
        
        return $this;
    }
}
