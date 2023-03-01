<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareDisplayRuleKey StructType
 * Meta information extracted from the WSDL
 * - documentation: The Tariff Fare Rule requested using a Key. The key is typically a provider specific string which is required to make either a following Air Fare Tariff request for Mileage/Routing information or Air Fare Tariff Rule Request. | At
 * least one character data in Next Result Reference
 * - base: xs:string
 * - minLength: 1
 * - whiteSpace: collapse
 * @subpackage Structs
 */
class AirFareDisplayRuleKey extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: At least one character data in Next Result Reference
     * - base: xs:string
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * Constructor method for AirFareDisplayRuleKey
     * @uses AirFareDisplayRuleKey::set_()
     * @uses AirFareDisplayRuleKey::setProviderCode()
     * @param string $_
     * @param string $providerCode
     */
    public function __construct(?string $_ = null, ?string $providerCode = null)
    {
        $this
            ->set_($_)
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
     * @return \Travelport\Air\StructType\AirFareDisplayRuleKey
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
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
     * @return \Travelport\Air\StructType\AirFareDisplayRuleKey
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
}
