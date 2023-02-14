<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeFormOfPaymentPNRReference StructType
 * @subpackage Structs
 */
class TypeFormOfPaymentPNRReference extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Unique ID to identify a ProviderReservationInfo | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The ProviderReservationLevel
     * Meta information extracted from the WSDL
     * - documentation: It means that the form of payment is applied at ProviderReservation level.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProviderReservationLevel = null;
    /**
     * Constructor method for typeFormOfPaymentPNRReference
     * @uses TypeFormOfPaymentPNRReference::setKey()
     * @uses TypeFormOfPaymentPNRReference::setProviderReservationLevel()
     * @param string $key
     * @param bool $providerReservationLevel
     */
    public function __construct(?string $key = null, ?bool $providerReservationLevel = true)
    {
        $this
            ->setKey($key)
            ->setProviderReservationLevel($providerReservationLevel);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProviderReservationLevel value
     * @return bool|null
     */
    public function getProviderReservationLevel(): ?bool
    {
        return $this->ProviderReservationLevel;
    }
    /**
     * Set ProviderReservationLevel value
     * @param bool $providerReservationLevel
     * @return \Travelport\UniversalRecord\StructType\TypeFormOfPaymentPNRReference
     */
    public function setProviderReservationLevel(?bool $providerReservationLevel = true): self
    {
        // validation for constraint: boolean
        if (!is_null($providerReservationLevel) && !is_bool($providerReservationLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($providerReservationLevel, true), gettype($providerReservationLevel)), __LINE__);
        }
        $this->ProviderReservationLevel = $providerReservationLevel;
        
        return $this;
    }
}
