<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyDescription StructType
 * @subpackage Structs
 */
class PropertyDescription extends AbstractStructBase
{
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: The host associated with this token | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * Constructor method for PropertyDescription
     * @uses PropertyDescription::setProviderCode()
     * @uses PropertyDescription::set_()
     * @param string $providerCode
     * @param string $_
     */
    public function __construct(string $providerCode, ?string $_ = null)
    {
        $this
            ->setProviderCode($providerCode)
            ->set_($_);
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Hotel\StructType\PropertyDescription
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\Hotel\StructType\PropertyDescription
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
