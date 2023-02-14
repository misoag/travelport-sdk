<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?int $MinPercentage = null;
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
    protected ?int $MaxPercentage = null;
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
    protected ?string $ExpiryDays = null;
    /**
     * The MultiUse
     * Meta information extracted from the WSDL
     * - documentation: Acceptable values are true or false. If set to true it will denote that the VAN being requested is multi-use else it will indicate a single -use VAN.A Single use VAN can only be debited once while the multiple use VAN's can be
     * debited multiple times subjected to the maximum value it has been authorized for. The default value will be TRUE to indicate a multi-use VAN is being issued.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MultiUse = null;
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
     * @return \Travelport\Hotel\StructType\EnettVan
     */
    public function setMinPercentage(?int $minPercentage = null): self
    {
        // validation for constraint: int
        if (!is_null($minPercentage) && !(is_int($minPercentage) || ctype_digit($minPercentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minPercentage, true), gettype($minPercentage)), __LINE__);
        }
        // validation for constraint: maxInclusive(100)
        if (!is_null($minPercentage) && $minPercentage > 100) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 100', var_export($minPercentage, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($minPercentage) && $minPercentage < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($minPercentage, true)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\EnettVan
     */
    public function setMaxPercentage(?int $maxPercentage = null): self
    {
        // validation for constraint: int
        if (!is_null($maxPercentage) && !(is_int($maxPercentage) || ctype_digit($maxPercentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxPercentage, true), gettype($maxPercentage)), __LINE__);
        }
        // validation for constraint: maxInclusive(100)
        if (!is_null($maxPercentage) && $maxPercentage > 100) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 100', var_export($maxPercentage, true)), __LINE__);
        }
        // validation for constraint: minInclusive
        if (!is_null($maxPercentage) && $maxPercentage < 0) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 0', var_export($maxPercentage, true)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\EnettVan
     */
    public function setExpiryDays(?string $expiryDays = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDays) && !is_string($expiryDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDays, true), gettype($expiryDays)), __LINE__);
        }
        // validation for constraint: maxInclusive(P366D)
        if (!is_null($expiryDays) && false === mb_strpos((string) $expiryDays, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $expiryDays)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P366D')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P366D', var_export($expiryDays, true)), __LINE__);
        }
        // validation for constraint: minInclusive(P1D)
        if (!is_null($expiryDays) && false !== mb_strpos((string) $expiryDays, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $expiryDays)))) < \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P1D')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to P1D', var_export($expiryDays, true)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\EnettVan
     */
    public function setMultiUse(?bool $multiUse = true): self
    {
        // validation for constraint: boolean
        if (!is_null($multiUse) && !is_bool($multiUse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multiUse, true), gettype($multiUse)), __LINE__);
        }
        $this->MultiUse = $multiUse;
        
        return $this;
    }
}
