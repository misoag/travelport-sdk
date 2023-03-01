<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public ?string $Key = null;
    /**
     * The ProviderReservationLevel
     * Meta information extracted from the WSDL
     * - documentation: It means that the form of payment is applied at ProviderReservation level.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProviderReservationLevel = null;
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
     * @return \Travelport\Hotel\StructType\TypeFormOfPaymentPNRReference
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\Hotel\StructType\TypeFormOfPaymentPNRReference
     */
    public function setProviderReservationLevel(?bool $providerReservationLevel = true): self
    {
        $this->ProviderReservationLevel = $providerReservationLevel;
        
        return $this;
    }
}
