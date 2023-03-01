<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRemark StructType
 * @subpackage Structs
 */
class TypeRemark extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the provider for which this element is used | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * Constructor method for typeRemark
     * @uses TypeRemark::set_()
     * @uses TypeRemark::setProviderReservationInfoRef()
     * @uses TypeRemark::setProviderCode()
     * @param string $_
     * @param string $providerReservationInfoRef
     * @param string $providerCode
     */
    public function __construct(?string $_ = null, ?string $providerReservationInfoRef = null, ?string $providerCode = null)
    {
        $this
            ->set_($_)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderCode($providerCode);
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
     * @return \Travelport\UniversalRecord\StructType\TypeRemark
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\TypeRemark
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\TypeRemark
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
}
