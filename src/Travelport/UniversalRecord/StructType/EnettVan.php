<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnettVan StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for all eNett Van information.
 * @subpackage Structs
 */
class EnettVan extends AbstractStructBase
{
    /**
     * The MinPercentage
     * Meta information extracted from the WSDL
     * - documentation: The minimum percentage that will be applied on the Total price and sent to enett,which will denote the minimum authorized amount approved by eNett.uApi will default this to zero for multi-use Van's. | Percentage value
     * - base: xs:nonNegativeInteger
     * - maxInclusive: 100
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $MinPercentage = null;
    /**
     * The MaxPercentage
     * Meta information extracted from the WSDL
     * - documentation: The maximum percentage that will be applied on the Total price and sent to enett, which will denote the maximum authorized amount as approved by eNett. This value will be ignored and not used for Multi-Use VAN’s. | Percentage value
     * - base: xs:nonNegativeInteger
     * - maxInclusive: 100
     * - minInclusive: 0
     * - use: optional
     * @var int|null
     */
    public ?int $MaxPercentage = null;
    /**
     * The ExpiryDays
     * Meta information extracted from the WSDL
     * - documentation: The number of days from the VAN generation date that the VAN will be active for, after which the VAN cannot be used. | Value of the Duration in P[NumberOfDays]D format.Ranges Permitted are P001D to P366D .
     * - base: xs:duration
     * - maxInclusive: P366D
     * - minInclusive: P1D
     * - use: optional
     * @var string|null
     */
    public ?string $ExpiryDays = null;
    /**
     * The MultiUse
     * Meta information extracted from the WSDL
     * - documentation: Acceptable values are true or false. If set to true it will denote that the VAN being requested is multi-use else it will indicate a single -use VAN.A Single use VAN can only be debited once while the multiple use VAN's can be
     * debited multiple times subjected to the maximum value it has been authorized for. The default value will be TRUE to indicate a multi-use VAN is being issued.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $MultiUse = null;
    /**
     * Constructor method for EnettVan
     * @uses EnettVan::setMinPercentage()
     * @uses EnettVan::setMaxPercentage()
     * @uses EnettVan::setExpiryDays()
     * @uses EnettVan::setMultiUse()
     * @param int $minPercentage
     * @param int $maxPercentage
     * @param string $expiryDays
     * @param bool $multiUse
     */
    public function __construct(?int $minPercentage = null, ?int $maxPercentage = null, ?string $expiryDays = null, ?bool $multiUse = true)
    {
        $this
            ->setMinPercentage($minPercentage)
            ->setMaxPercentage($maxPercentage)
            ->setExpiryDays($expiryDays)
            ->setMultiUse($multiUse);
    }
    /**
     * Get MinPercentage value
     * @return int|null
     */
    public function getMinPercentage(): ?int
    {
        return $this->MinPercentage;
    }
    /**
     * Set MinPercentage value
     * @param int $minPercentage
     * @return \Travelport\UniversalRecord\StructType\EnettVan
     */
    public function setMinPercentage(?int $minPercentage = null): self
    {
        $this->MinPercentage = $minPercentage;
        
        return $this;
    }
    /**
     * Get MaxPercentage value
     * @return int|null
     */
    public function getMaxPercentage(): ?int
    {
        return $this->MaxPercentage;
    }
    /**
     * Set MaxPercentage value
     * @param int $maxPercentage
     * @return \Travelport\UniversalRecord\StructType\EnettVan
     */
    public function setMaxPercentage(?int $maxPercentage = null): self
    {
        $this->MaxPercentage = $maxPercentage;
        
        return $this;
    }
    /**
     * Get ExpiryDays value
     * @return string|null
     */
    public function getExpiryDays(): ?string
    {
        return $this->ExpiryDays;
    }
    /**
     * Set ExpiryDays value
     * @param string $expiryDays
     * @return \Travelport\UniversalRecord\StructType\EnettVan
     */
    public function setExpiryDays(?string $expiryDays = null): self
    {
        $this->ExpiryDays = $expiryDays;
        
        return $this;
    }
    /**
     * Get MultiUse value
     * @return bool|null
     */
    public function getMultiUse(): ?bool
    {
        return $this->MultiUse;
    }
    /**
     * Set MultiUse value
     * @param bool $multiUse
     * @return \Travelport\UniversalRecord\StructType\EnettVan
     */
    public function setMultiUse(?bool $multiUse = true): self
    {
        $this->MultiUse = $multiUse;
        
        return $this;
    }
}
