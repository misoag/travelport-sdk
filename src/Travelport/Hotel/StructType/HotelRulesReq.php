<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRulesReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves hotel rules using hotel property code, chain code and hotel room rate type.
 * @subpackage Structs
 */
class HotelRulesReq extends BaseReq
{
    /**
     * The HotelReservationLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Request hotel rules using Locator code of existing hotel reservation. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - choice: HotelReservationLocatorCode | HotelRulesLookup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 8
     * - minLength: 5
     * @var string|null
     */
    public ?string $HotelReservationLocatorCode = null;
    /**
     * The HotelRulesLookup
     * Meta information extracted from the WSDL
     * - choice: HotelReservationLocatorCode | HotelRulesLookup
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\Hotel\StructType\HotelRulesLookup|null
     */
    public ?\Travelport\Hotel\StructType\HotelRulesLookup $HotelRulesLookup = null;
    /**
     * Constructor method for HotelRulesReq
     * @uses HotelRulesReq::setHotelReservationLocatorCode()
     * @uses HotelRulesReq::setHotelRulesLookup()
     * @param string $hotelReservationLocatorCode
     * @param \Travelport\Hotel\StructType\HotelRulesLookup $hotelRulesLookup
     */
    public function __construct(?string $hotelReservationLocatorCode = null, ?\Travelport\Hotel\StructType\HotelRulesLookup $hotelRulesLookup = null)
    {
        $this
            ->setHotelReservationLocatorCode($hotelReservationLocatorCode)
            ->setHotelRulesLookup($hotelRulesLookup);
    }
    /**
     * Get HotelReservationLocatorCode value
     * @return string|null
     */
    public function getHotelReservationLocatorCode(): ?string
    {
        return $this->HotelReservationLocatorCode ?? null;
    }
    /**
     * Set HotelReservationLocatorCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $hotelReservationLocatorCode
     * @return \Travelport\Hotel\StructType\HotelRulesReq
     */
    public function setHotelReservationLocatorCode(?string $hotelReservationLocatorCode = null): self
    {
        if (is_null($hotelReservationLocatorCode) || (is_array($hotelReservationLocatorCode) && empty($hotelReservationLocatorCode))) {
            unset($this->HotelReservationLocatorCode);
        } else {
            $this->HotelReservationLocatorCode = $hotelReservationLocatorCode;
        }
        
        return $this;
    }
    /**
     * Get HotelRulesLookup value
     * @return \Travelport\Hotel\StructType\HotelRulesLookup|null
     */
    public function getHotelRulesLookup(): ?\Travelport\Hotel\StructType\HotelRulesLookup
    {
        return $this->HotelRulesLookup ?? null;
    }
    /**
     * Set HotelRulesLookup value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\HotelRulesLookup $hotelRulesLookup
     * @return \Travelport\Hotel\StructType\HotelRulesReq
     */
    public function setHotelRulesLookup(?\Travelport\Hotel\StructType\HotelRulesLookup $hotelRulesLookup = null): self
    {
        if (is_null($hotelRulesLookup) || (is_array($hotelRulesLookup) && empty($hotelRulesLookup))) {
            unset($this->HotelRulesLookup);
        } else {
            $this->HotelRulesLookup = $hotelRulesLookup;
        }
        
        return $this;
    }
}
