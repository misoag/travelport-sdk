<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CorporateDiscountID StructType
 * Meta information extracted from the WSDL
 * - documentation: These are zero or more negotiated rate codes
 * @subpackage Structs
 */
class CorporateDiscountID extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The NegotiatedRateCode
     * Meta information extracted from the WSDL
     * - documentation: When set to true, the data in the CorporateDiscountID is a negotiated rate code. Otherwise, this data is a Corporate Discount ID rate.
     * - use: optional
     * @var bool|null
     */
    public ?bool $NegotiatedRateCode = null;
    /**
     * Constructor method for CorporateDiscountID
     * @uses CorporateDiscountID::set_()
     * @uses CorporateDiscountID::setNegotiatedRateCode()
     * @param string $_
     * @param bool $negotiatedRateCode
     */
    public function __construct(?string $_ = null, ?bool $negotiatedRateCode = null)
    {
        $this
            ->set_($_)
            ->setNegotiatedRateCode($negotiatedRateCode);
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
     * @return \Travelport\Hotel\StructType\CorporateDiscountID
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get NegotiatedRateCode value
     * @return bool|null
     */
    public function getNegotiatedRateCode(): ?bool
    {
        return $this->NegotiatedRateCode;
    }
    /**
     * Set NegotiatedRateCode value
     * @param bool $negotiatedRateCode
     * @return \Travelport\Hotel\StructType\CorporateDiscountID
     */
    public function setNegotiatedRateCode(?bool $negotiatedRateCode = null): self
    {
        $this->NegotiatedRateCode = $negotiatedRateCode;
        
        return $this;
    }
}
