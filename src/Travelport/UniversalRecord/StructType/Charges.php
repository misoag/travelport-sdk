<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Charges StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for various Charges assocaited with the Cruise Booking
 * @subpackage Structs
 */
class Charges extends AbstractStructBase
{
    /**
     * The AirCharge
     * Meta information extracted from the WSDL
     * - documentation: Total Amount of Air Charges associated with Cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AirCharge = null;
    /**
     * The OptionalCharge
     * Meta information extracted from the WSDL
     * - documentation: Total Amount of Optional Charges associated with Cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $OptionalCharge = null;
    /**
     * The WaiverCharge
     * Meta information extracted from the WSDL
     * - documentation: Total Waiver/Insurance charges associated with Cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $WaiverCharge = null;
    /**
     * The WaiverChargeType
     * Meta information extracted from the WSDL
     * - documentation: Use to determine if the amount is Waiver Charges or Insurance Charges.(Values - Waiver/Insurance) | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    public ?string $WaiverChargeType = null;
    /**
     * The PortCharge
     * Meta information extracted from the WSDL
     * - documentation: Amount of Port tax associated with Cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PortCharge = null;
    /**
     * The PortChargeDescription
     * Meta information extracted from the WSDL
     * - documentation: Text explaining Port charges | Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PortChargeDescription = null;
    /**
     * The PenaltyCharge
     * Meta information extracted from the WSDL
     * - documentation: Amount of penalty charged with Cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PenaltyCharge = null;
    /**
     * Constructor method for Charges
     * @uses Charges::setAirCharge()
     * @uses Charges::setOptionalCharge()
     * @uses Charges::setWaiverCharge()
     * @uses Charges::setWaiverChargeType()
     * @uses Charges::setPortCharge()
     * @uses Charges::setPortChargeDescription()
     * @uses Charges::setPenaltyCharge()
     * @param string $airCharge
     * @param string $optionalCharge
     * @param string $waiverCharge
     * @param string $waiverChargeType
     * @param string $portCharge
     * @param string $portChargeDescription
     * @param string $penaltyCharge
     */
    public function __construct(?string $airCharge = null, ?string $optionalCharge = null, ?string $waiverCharge = null, ?string $waiverChargeType = null, ?string $portCharge = null, ?string $portChargeDescription = null, ?string $penaltyCharge = null)
    {
        $this
            ->setAirCharge($airCharge)
            ->setOptionalCharge($optionalCharge)
            ->setWaiverCharge($waiverCharge)
            ->setWaiverChargeType($waiverChargeType)
            ->setPortCharge($portCharge)
            ->setPortChargeDescription($portChargeDescription)
            ->setPenaltyCharge($penaltyCharge);
    }
    /**
     * Get AirCharge value
     * @return string|null
     */
    public function getAirCharge(): ?string
    {
        return $this->AirCharge;
    }
    /**
     * Set AirCharge value
     * @param string $airCharge
     * @return \Travelport\UniversalRecord\StructType\Charges
     */
    public function setAirCharge(?string $airCharge = null): self
    {
        $this->AirCharge = $airCharge;
        
        return $this;
    }
    /**
     * Get OptionalCharge value
     * @return string|null
     */
    public function getOptionalCharge(): ?string
    {
        return $this->OptionalCharge;
    }
    /**
     * Set OptionalCharge value
     * @param string $optionalCharge
     * @return \Travelport\UniversalRecord\StructType\Charges
     */
    public function setOptionalCharge(?string $optionalCharge = null): self
    {
        $this->OptionalCharge = $optionalCharge;
        
        return $this;
    }
    /**
     * Get WaiverCharge value
     * @return string|null
     */
    public function getWaiverCharge(): ?string
    {
        return $this->WaiverCharge;
    }
    /**
     * Set WaiverCharge value
     * @param string $waiverCharge
     * @return \Travelport\UniversalRecord\StructType\Charges
     */
    public function setWaiverCharge(?string $waiverCharge = null): self
    {
        $this->WaiverCharge = $waiverCharge;
        
        return $this;
    }
    /**
     * Get WaiverChargeType value
     * @return string|null
     */
    public function getWaiverChargeType(): ?string
    {
        return $this->WaiverChargeType;
    }
    /**
     * Set WaiverChargeType value
     * @param string $waiverChargeType
     * @return \Travelport\UniversalRecord\StructType\Charges
     */
    public function setWaiverChargeType(?string $waiverChargeType = null): self
    {
        $this->WaiverChargeType = $waiverChargeType;
        
        return $this;
    }
    /**
     * Get PortCharge value
     * @return string|null
     */
    public function getPortCharge(): ?string
    {
        return $this->PortCharge;
    }
    /**
     * Set PortCharge value
     * @param string $portCharge
     * @return \Travelport\UniversalRecord\StructType\Charges
     */
    public function setPortCharge(?string $portCharge = null): self
    {
        $this->PortCharge = $portCharge;
        
        return $this;
    }
    /**
     * Get PortChargeDescription value
     * @return string|null
     */
    public function getPortChargeDescription(): ?string
    {
        return $this->PortChargeDescription;
    }
    /**
     * Set PortChargeDescription value
     * @param string $portChargeDescription
     * @return \Travelport\UniversalRecord\StructType\Charges
     */
    public function setPortChargeDescription(?string $portChargeDescription = null): self
    {
        $this->PortChargeDescription = $portChargeDescription;
        
        return $this;
    }
    /**
     * Get PenaltyCharge value
     * @return string|null
     */
    public function getPenaltyCharge(): ?string
    {
        return $this->PenaltyCharge;
    }
    /**
     * Set PenaltyCharge value
     * @param string $penaltyCharge
     * @return \Travelport\UniversalRecord\StructType\Charges
     */
    public function setPenaltyCharge(?string $penaltyCharge = null): self
    {
        $this->PenaltyCharge = $penaltyCharge;
        
        return $this;
    }
}
