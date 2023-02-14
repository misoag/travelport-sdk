<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $AirCharge = null;
    /**
     * The OptionalCharge
     * Meta information extracted from the WSDL
     * - documentation: Total Amount of Optional Charges associated with Cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $OptionalCharge = null;
    /**
     * The WaiverCharge
     * Meta information extracted from the WSDL
     * - documentation: Total Waiver/Insurance charges associated with Cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $WaiverCharge = null;
    /**
     * The WaiverChargeType
     * Meta information extracted from the WSDL
     * - documentation: Use to determine if the amount is Waiver Charges or Insurance Charges.(Values - Waiver/Insurance) | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $WaiverChargeType = null;
    /**
     * The PortCharge
     * Meta information extracted from the WSDL
     * - documentation: Amount of Port tax associated with Cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PortCharge = null;
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
    protected ?string $PortChargeDescription = null;
    /**
     * The PenaltyCharge
     * Meta information extracted from the WSDL
     * - documentation: Amount of penalty charged with Cruise | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PenaltyCharge = null;
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
        // validation for constraint: string
        if (!is_null($airCharge) && !is_string($airCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airCharge, true), gettype($airCharge)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($optionalCharge) && !is_string($optionalCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionalCharge, true), gettype($optionalCharge)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($waiverCharge) && !is_string($waiverCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waiverCharge, true), gettype($waiverCharge)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($waiverChargeType) && !is_string($waiverChargeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waiverChargeType, true), gettype($waiverChargeType)), __LINE__);
        }
        // validation for constraint: length(1)
        if (!is_null($waiverChargeType) && mb_strlen((string) $waiverChargeType) !== 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 1', mb_strlen((string) $waiverChargeType)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($portCharge) && !is_string($portCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portCharge, true), gettype($portCharge)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($portChargeDescription) && !is_string($portChargeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portChargeDescription, true), gettype($portChargeDescription)), __LINE__);
        }
        // validation for constraint: maxLength(13)
        if (!is_null($portChargeDescription) && mb_strlen((string) $portChargeDescription) > 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 13', mb_strlen((string) $portChargeDescription)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($portChargeDescription) && mb_strlen((string) $portChargeDescription) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $portChargeDescription)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($penaltyCharge) && !is_string($penaltyCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($penaltyCharge, true), gettype($penaltyCharge)), __LINE__);
        }
        $this->PenaltyCharge = $penaltyCharge;
        
        return $this;
    }
}
