<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiGDSSearchIndicator StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates whether public fares and/or private fares should be returned.
 * @subpackage Structs
 */
class MultiGDSSearchIndicator extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether only public fares or both public and private fares should be returned or a specific type of private fares. Examples of valid values are PublicFaresOnly, PrivateFaresOnly, AirlinePrivateFaresOnly,
     * AgencyPrivateFaresOnly, PublicandPrivateFares, and NetFaresOnly.
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
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
     * The DefaultProvider
     * Meta information extracted from the WSDL
     * - documentation: Use the value “true” if the provider is the default (primary) provider. Use the value “false” if the provider is the alternate (secondary). Use of this attribute requires specifically provisioned credentials.
     * - use: optional
     * @var bool|null
     */
    public ?bool $DefaultProvider = null;
    /**
     * The PrivateFareCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the corporate private fare. This is the same as an account code. Use of this attribute requires specifically provisioned credentials.
     * - use: optional
     * @var string|null
     */
    public ?string $PrivateFareCode = null;
    /**
     * The PrivateFareCodeOnly
     * Meta information extracted from the WSDL
     * - documentation: : Indicates whether or not the private fares returned should be restricted to only those specific to the PrivateFareCode in the previous attribute. This has the same validation as the AccountCodeFaresOnly attribute. Use of this
     * attribute requires specifically provisioned credentials.
     * - use: optional
     * @var bool|null
     */
    public ?bool $PrivateFareCodeOnly = null;
    /**
     * Constructor method for MultiGDSSearchIndicator
     * @uses MultiGDSSearchIndicator::setType()
     * @uses MultiGDSSearchIndicator::setProviderCode()
     * @uses MultiGDSSearchIndicator::setDefaultProvider()
     * @uses MultiGDSSearchIndicator::setPrivateFareCode()
     * @uses MultiGDSSearchIndicator::setPrivateFareCodeOnly()
     * @param string $type
     * @param string $providerCode
     * @param bool $defaultProvider
     * @param string $privateFareCode
     * @param bool $privateFareCodeOnly
     */
    public function __construct(?string $type = null, ?string $providerCode = null, ?bool $defaultProvider = null, ?string $privateFareCode = null, ?bool $privateFareCodeOnly = null)
    {
        $this
            ->setType($type)
            ->setProviderCode($providerCode)
            ->setDefaultProvider($defaultProvider)
            ->setPrivateFareCode($privateFareCode)
            ->setPrivateFareCodeOnly($privateFareCodeOnly);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Air\StructType\MultiGDSSearchIndicator
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
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
     * @return \Travelport\Air\StructType\MultiGDSSearchIndicator
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get DefaultProvider value
     * @return bool|null
     */
    public function getDefaultProvider(): ?bool
    {
        return $this->DefaultProvider;
    }
    /**
     * Set DefaultProvider value
     * @param bool $defaultProvider
     * @return \Travelport\Air\StructType\MultiGDSSearchIndicator
     */
    public function setDefaultProvider(?bool $defaultProvider = null): self
    {
        $this->DefaultProvider = $defaultProvider;
        
        return $this;
    }
    /**
     * Get PrivateFareCode value
     * @return string|null
     */
    public function getPrivateFareCode(): ?string
    {
        return $this->PrivateFareCode;
    }
    /**
     * Set PrivateFareCode value
     * @param string $privateFareCode
     * @return \Travelport\Air\StructType\MultiGDSSearchIndicator
     */
    public function setPrivateFareCode(?string $privateFareCode = null): self
    {
        $this->PrivateFareCode = $privateFareCode;
        
        return $this;
    }
    /**
     * Get PrivateFareCodeOnly value
     * @return bool|null
     */
    public function getPrivateFareCodeOnly(): ?bool
    {
        return $this->PrivateFareCodeOnly;
    }
    /**
     * Set PrivateFareCodeOnly value
     * @param bool $privateFareCodeOnly
     * @return \Travelport\Air\StructType\MultiGDSSearchIndicator
     */
    public function setPrivateFareCodeOnly(?bool $privateFareCodeOnly = null): self
    {
        $this->PrivateFareCodeOnly = $privateFareCodeOnly;
        
        return $this;
    }
}
