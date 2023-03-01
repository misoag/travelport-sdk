<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceChangeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates a price change is found in Fare Control Manager
 * @subpackage Structs
 */
class PriceChangeType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Contains the currency and amount information. Assume the amount is added unless a hyphen is present to indicate subtraction.
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: Contains carrier code information
     * - use: optional
     * @var string|null
     */
    public ?string $Carrier = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Contains segment reference information
     * - use: optional
     * @var string|null
     */
    public ?string $SegmentRef = null;
    /**
     * Constructor method for PriceChangeType
     * @uses PriceChangeType::setAmount()
     * @uses PriceChangeType::set_()
     * @uses PriceChangeType::setCarrier()
     * @uses PriceChangeType::setSegmentRef()
     * @param string $amount
     * @param string $_
     * @param string $carrier
     * @param string $segmentRef
     */
    public function __construct(string $amount, ?string $_ = null, ?string $carrier = null, ?string $segmentRef = null)
    {
        $this
            ->setAmount($amount)
            ->set_($_)
            ->setCarrier($carrier)
            ->setSegmentRef($segmentRef);
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\UniversalRecord\StructType\PriceChangeType
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\PriceChangeType
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\PriceChangeType
     */
    public function setCarrier(?string $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\UniversalRecord\StructType\PriceChangeType
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
}
