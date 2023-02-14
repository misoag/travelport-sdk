<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FarePricing StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for Fare Pricing Information. One per PTC type.
 * @subpackage Structs
 */
class FarePricing extends AbstractStructBase
{
    /**
     * The PassengerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $PassengerType = null;
    /**
     * The TotalFareAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalFareAmount = null;
    /**
     * The PrivateFare
     * Meta information extracted from the WSDL
     * - documentation: NegotiatedFare attribute from earlier version of schema used to imply whether the fare is private fare or not. So, this attribute is renamed to PrivateFare as it best suited.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PrivateFare = null;
    /**
     * The NegotiatedFare
     * Meta information extracted from the WSDL
     * - documentation: Identifies the fare as a Negotiated Fare.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NegotiatedFare = null;
    /**
     * The AutoPriceable
     * Meta information extracted from the WSDL
     * - documentation: Identifies the fare as Autopriceable or not. False value means the fare filing is incomplete and the fare should not be used.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AutoPriceable = null;
    /**
     * The TotalNetFareAmount
     * Meta information extracted from the WSDL
     * - documentation: Total Net fare amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalNetFareAmount = null;
    /**
     * The BaseFare
     * Meta information extracted from the WSDL
     * - documentation: Base fare amount. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BaseFare = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The MMid
     * Meta information extracted from the WSDL
     * - documentation: Contains the Reference id which is generated when the request was ReturnMM=”true”. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $MMid = null;
    /**
     * Constructor method for FarePricing
     * @uses FarePricing::setPassengerType()
     * @uses FarePricing::setTotalFareAmount()
     * @uses FarePricing::setPrivateFare()
     * @uses FarePricing::setNegotiatedFare()
     * @uses FarePricing::setAutoPriceable()
     * @uses FarePricing::setTotalNetFareAmount()
     * @uses FarePricing::setBaseFare()
     * @uses FarePricing::setTaxes()
     * @uses FarePricing::setMMid()
     * @param string $passengerType
     * @param string $totalFareAmount
     * @param bool $privateFare
     * @param bool $negotiatedFare
     * @param bool $autoPriceable
     * @param string $totalNetFareAmount
     * @param string $baseFare
     * @param string $taxes
     * @param string $mMid
     */
    public function __construct(?string $passengerType = null, ?string $totalFareAmount = null, ?bool $privateFare = null, ?bool $negotiatedFare = null, ?bool $autoPriceable = null, ?string $totalNetFareAmount = null, ?string $baseFare = null, ?string $taxes = null, ?string $mMid = null)
    {
        $this
            ->setPassengerType($passengerType)
            ->setTotalFareAmount($totalFareAmount)
            ->setPrivateFare($privateFare)
            ->setNegotiatedFare($negotiatedFare)
            ->setAutoPriceable($autoPriceable)
            ->setTotalNetFareAmount($totalNetFareAmount)
            ->setBaseFare($baseFare)
            ->setTaxes($taxes)
            ->setMMid($mMid);
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType(): ?string
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @param string $passengerType
     * @return \Travelport\UniversalRecord\StructType\FarePricing
     */
    public function setPassengerType(?string $passengerType = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerType) && !is_string($passengerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerType, true), gettype($passengerType)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($passengerType) && mb_strlen((string) $passengerType) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $passengerType)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($passengerType) && mb_strlen((string) $passengerType) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $passengerType)), __LINE__);
        }
        $this->PassengerType = $passengerType;
        
        return $this;
    }
    /**
     * Get TotalFareAmount value
     * @return string|null
     */
    public function getTotalFareAmount(): ?string
    {
        return $this->TotalFareAmount;
    }
    /**
     * Set TotalFareAmount value
     * @param string $totalFareAmount
     * @return \Travelport\UniversalRecord\StructType\FarePricing
     */
    public function setTotalFareAmount(?string $totalFareAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($totalFareAmount) && !is_string($totalFareAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalFareAmount, true), gettype($totalFareAmount)), __LINE__);
        }
        $this->TotalFareAmount = $totalFareAmount;
        
        return $this;
    }
    /**
     * Get PrivateFare value
     * @return bool|null
     */
    public function getPrivateFare(): ?bool
    {
        return $this->PrivateFare;
    }
    /**
     * Set PrivateFare value
     * @param bool $privateFare
     * @return \Travelport\UniversalRecord\StructType\FarePricing
     */
    public function setPrivateFare(?bool $privateFare = null): self
    {
        // validation for constraint: boolean
        if (!is_null($privateFare) && !is_bool($privateFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($privateFare, true), gettype($privateFare)), __LINE__);
        }
        $this->PrivateFare = $privateFare;
        
        return $this;
    }
    /**
     * Get NegotiatedFare value
     * @return bool|null
     */
    public function getNegotiatedFare(): ?bool
    {
        return $this->NegotiatedFare;
    }
    /**
     * Set NegotiatedFare value
     * @param bool $negotiatedFare
     * @return \Travelport\UniversalRecord\StructType\FarePricing
     */
    public function setNegotiatedFare(?bool $negotiatedFare = null): self
    {
        // validation for constraint: boolean
        if (!is_null($negotiatedFare) && !is_bool($negotiatedFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($negotiatedFare, true), gettype($negotiatedFare)), __LINE__);
        }
        $this->NegotiatedFare = $negotiatedFare;
        
        return $this;
    }
    /**
     * Get AutoPriceable value
     * @return bool|null
     */
    public function getAutoPriceable(): ?bool
    {
        return $this->AutoPriceable;
    }
    /**
     * Set AutoPriceable value
     * @param bool $autoPriceable
     * @return \Travelport\UniversalRecord\StructType\FarePricing
     */
    public function setAutoPriceable(?bool $autoPriceable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($autoPriceable) && !is_bool($autoPriceable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoPriceable, true), gettype($autoPriceable)), __LINE__);
        }
        $this->AutoPriceable = $autoPriceable;
        
        return $this;
    }
    /**
     * Get TotalNetFareAmount value
     * @return string|null
     */
    public function getTotalNetFareAmount(): ?string
    {
        return $this->TotalNetFareAmount;
    }
    /**
     * Set TotalNetFareAmount value
     * @param string $totalNetFareAmount
     * @return \Travelport\UniversalRecord\StructType\FarePricing
     */
    public function setTotalNetFareAmount(?string $totalNetFareAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($totalNetFareAmount) && !is_string($totalNetFareAmount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalNetFareAmount, true), gettype($totalNetFareAmount)), __LINE__);
        }
        $this->TotalNetFareAmount = $totalNetFareAmount;
        
        return $this;
    }
    /**
     * Get BaseFare value
     * @return string|null
     */
    public function getBaseFare(): ?string
    {
        return $this->BaseFare;
    }
    /**
     * Set BaseFare value
     * @param string $baseFare
     * @return \Travelport\UniversalRecord\StructType\FarePricing
     */
    public function setBaseFare(?string $baseFare = null): self
    {
        // validation for constraint: string
        if (!is_null($baseFare) && !is_string($baseFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseFare, true), gettype($baseFare)), __LINE__);
        }
        $this->BaseFare = $baseFare;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\UniversalRecord\StructType\FarePricing
     */
    public function setTaxes(?string $taxes = null): self
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get MMid value
     * @return string|null
     */
    public function getMMid(): ?string
    {
        return $this->MMid;
    }
    /**
     * Set MMid value
     * @param string $mMid
     * @return \Travelport\UniversalRecord\StructType\FarePricing
     */
    public function setMMid(?string $mMid = null): self
    {
        // validation for constraint: string
        if (!is_null($mMid) && !is_string($mMid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mMid, true), gettype($mMid)), __LINE__);
        }
        $this->MMid = $mMid;
        
        return $this;
    }
}
