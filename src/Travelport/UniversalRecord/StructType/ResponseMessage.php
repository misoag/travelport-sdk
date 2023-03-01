<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseMessage StructType
 * Meta information extracted from the WSDL
 * - documentation: A simple textual fare note. Used within several other objects.
 * @subpackage Structs
 */
class ResponseMessage extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $Code;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
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
     * - type: typeProviderCode
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - type: typeSupplierCode
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
    /**
     * Constructor method for ResponseMessage
     * @uses ResponseMessage::setCode()
     * @uses ResponseMessage::set_()
     * @uses ResponseMessage::setType()
     * @uses ResponseMessage::setProviderCode()
     * @uses ResponseMessage::setSupplierCode()
     * @param int $code
     * @param string $_
     * @param string $type
     * @param string $providerCode
     * @param string $supplierCode
     */
    public function __construct(int $code, ?string $_ = null, ?string $type = null, ?string $providerCode = null, ?string $supplierCode = null)
    {
        $this
            ->setCode($code)
            ->set_($_)
            ->setType($type)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get Code value
     * @return int
     */
    public function getCode(): int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Travelport\UniversalRecord\StructType\ResponseMessage
     */
    public function setCode(int $code): self
    {
        $this->Code = $code;
        
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
     * @return \Travelport\UniversalRecord\StructType\ResponseMessage
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\ResponseMessage
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
     * @return \Travelport\UniversalRecord\StructType\ResponseMessage
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\ResponseMessage
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
