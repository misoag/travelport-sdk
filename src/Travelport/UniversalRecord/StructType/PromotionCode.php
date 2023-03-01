<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionCode StructType
 * Meta information extracted from the WSDL
 * - base: xs:string
 * - maxLength: 30
 * @subpackage Structs
 */
class PromotionCode extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * Constructor method for PromotionCode
     * @uses PromotionCode::set_()
     * @uses PromotionCode::setKey()
     * @param string $_
     * @param string $key
     */
    public function __construct(?string $_ = null, ?string $key = null)
    {
        $this
            ->set_($_)
            ->setKey($key);
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
     * @return \Travelport\UniversalRecord\StructType\PromotionCode
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\PromotionCode
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
