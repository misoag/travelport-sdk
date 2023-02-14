<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $Type = null;
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
    protected ?string $ProviderCode = null;
    /**
     * The DefaultProvider
     * Meta information extracted from the WSDL
     * - documentation: Use the value “true” if the provider is the default (primary) provider. Use the value “false” if the provider is the alternate (secondary). Use of this attribute requires specifically provisioned credentials.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $DefaultProvider = null;
    /**
     * The PrivateFareCode
     * Meta information extracted from the WSDL
     * - documentation: The code of the corporate private fare. This is the same as an account code. Use of this attribute requires specifically provisioned credentials.
     * - use: optional
     * @var string|null
     */
    protected ?string $PrivateFareCode = null;
    /**
     * The PrivateFareCodeOnly
     * Meta information extracted from the WSDL
     * - documentation: : Indicates whether or not the private fares returned should be restricted to only those specific to the PrivateFareCode in the previous attribute. This has the same validation as the AccountCodeFaresOnly attribute. Use of this
     * attribute requires specifically provisioned credentials.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PrivateFareCodeOnly = null;
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
     * @return \Travelport\UniversalRecord\StructType\MultiGDSSearchIndicator
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\MultiGDSSearchIndicator
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\MultiGDSSearchIndicator
     */
    public function setDefaultProvider(?bool $defaultProvider = null): self
    {
        // validation for constraint: boolean
        if (!is_null($defaultProvider) && !is_bool($defaultProvider)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($defaultProvider, true), gettype($defaultProvider)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\MultiGDSSearchIndicator
     */
    public function setPrivateFareCode(?string $privateFareCode = null): self
    {
        // validation for constraint: string
        if (!is_null($privateFareCode) && !is_string($privateFareCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($privateFareCode, true), gettype($privateFareCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\MultiGDSSearchIndicator
     */
    public function setPrivateFareCodeOnly(?bool $privateFareCodeOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($privateFareCodeOnly) && !is_bool($privateFareCodeOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($privateFareCodeOnly, true), gettype($privateFareCodeOnly)), __LINE__);
        }
        $this->PrivateFareCodeOnly = $privateFareCodeOnly;
        
        return $this;
    }
}
